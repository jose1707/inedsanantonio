<div class="row">
	<div class="col-md-12">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Reporte de citas</h4>
  </div>
  <div class="card-content table-responsive">


<form class="form-horizontal" role="form">
<input type="hidden" name="view" value="reports">
        <?php
$pacients = PacientData::getAll();
$medics = MedicData::getAll();
$statuses = StatusData::getAll();
$payments = PaymentData::getAll();
        ?>

  <div class="form-group">

    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-male"></i></span>
<select name="pacient_id" class="form-control">
<option value="">PACIENTE</option>
  <?php foreach($pacients as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if(isset($_GET["pacient_id"]) && $_GET["pacient_id"]==$p->id){ echo "selected"; } ?>><?php echo $p->id." - ".$p->nombre." ".$p->apellido; ?></option>
  <?php endforeach; ?>
</select>
		</div>
    </div>
    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
<select name="medic_id" class="form-control">
<option value="">MEDICO</option>
  <?php foreach($medics as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if(isset($_GET["medic_id"]) && $_GET["medic_id"]==$p->id){ echo "selected"; } ?>><?php echo $p->id." - ".$p->nombre." ".$p->apellido; ?></option>
  <?php endforeach; ?>
</select>
		</div>
    </div>
    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon">INICIO</span>
		  <input type="date" name="start_at" value="<?php if(isset($_GET["start_at"]) && $_GET["start_at"]!=""){ echo $_GET["start_at"]; } ?>" class="form-control" placeholder="Palabra clave">
		</div>
    </div>
    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon">FIN</span>
		  <input type="date" name="finish_at" value="<?php if(isset($_GET["finish_at"]) && $_GET["finish_at"]!=""){ echo $_GET["finish_at"]; } ?>" class="form-control" placeholder="Palabra clave">
		</div>
    </div>

  </div>
  <div class="form-group">

    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon">ESTADO</span>
<select name="status_id" class="form-control">
  <?php foreach($statuses as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if(isset($_GET["status_id"]) && $_GET["status_id"]==$p->id){ echo "selected"; } ?>><?php echo $p->nombre; ?></option>
  <?php endforeach; ?>
</select>
		</div>
    </div>
    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon">PAGO</span>
<select name="payment_id" class="form-control">
  <?php foreach($payments as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if(isset($_GET["payment_id"]) && $_GET["payment_id"]==$p->id){ echo "selected"; } ?>><?php echo $p->nombre; ?></option>
  <?php endforeach; ?>
</select>
		</div>
    </div>
    <div class="col-lg-6">
    <button class="btn btn-primary btn-block">Procesar</button>
    </div>

  </div>
</form>

		<?php
$users= array();
if((isset($_GET["status_id"]) && isset($_GET["payment_id"]) && isset($_GET["pacient_id"]) && isset($_GET["medic_id"]) && isset($_GET["start_at"]) && isset($_GET["finish_at"]) ) && ($_GET["status_id"]!="" ||$_GET["payment_id"]!="" || $_GET["pacient_id"]!="" || $_GET["medic_id"]!="" || ($_GET["start_at"]!="" && $_GET["finish_at"]!="") ) ) {
$sql = "select * from reservation where ";
if($_GET["status_id"]!=""){
	$sql .= " status_id = ".$_GET["status_id"];
}

if($_GET["payment_id"]!=""){
if($_GET["status_id"]!=""){
	$sql .= " and ";
}
	$sql .= " payment_id = ".$_GET["payment_id"];
}


if($_GET["pacient_id"]!=""){
if($_GET["status_id"]!=""||$_GET["payment_id"]!=""){
	$sql .= " and ";
}
	$sql .= " pacient_id = ".$_GET["pacient_id"];
}

if($_GET["medic_id"]!=""){
if($_GET["status_id"]!=""||$_GET["pacient_id"]!=""||$_GET["payment_id"]!=""){
	$sql .= " and ";
}

	$sql .= " medic_id = ".$_GET["medic_id"];
}



if($_GET["start_at"]!="" && $_GET["finish_at"]){
if($_GET["status_id"]!=""||$_GET["pacient_id"]!="" ||$_GET["medic_id"]!="" ||$_GET["payment_id"]!="" ){
	$sql .= " and ";
}

	$sql .= " ( dia >= \"".$_GET["start_at"]."\" and dia <= \"".$_GET["finish_at"]."\" ) ";
}

//echo $sql;
		$users = ReservationData::getBySQL($sql);

}else{
		$users = ReservationData::getAllPendings();

}
		if(count($users)>0){
			// si hay usuarios
			$_SESSION["report_data"] = $users;
			?>
			<div class="panel panel-default">
			<div class="panel-heading">
			Reportes</div>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Asunto</th>
			<th>Paciente</th>
			<th>Medico</th>
			<th>Fecha</th>
			<th>Estado</th>
			<th>Pago</th>
			<th>Costo</th>
			</thead>
			<?php
			$total = 0;
			foreach($users as $user){
				$pacient  = $user->getPacient();
				$medic = $user->getMedic();
				?>
				<tr>
				<td><?php echo $user->descripcion; ?></td>
				<td><?php echo $pacient->nombre." ".$pacient->apellido; ?></td>
				<td><?php echo $medic->nombre." ".$medic->apellido; ?></td>
				<td><?php echo $user->dia." ".$user->hora; ?></td>
				<td><?php echo $user->getStatus()->nombre; ?></td>
				<td><?php echo $user->getPayment()->nombre; ?></td>
				<td>$ <?php echo number_format($user->precio,2,".",",");?></td>
				</tr>
				<?php
				$total += $user->precio;

			}
			echo "</table>";
			?>
			<div class="panel-body">
			<h1>Total: Q <?php echo number_format($total,2,".",",");?></h1>
			<a href="./report/report-word.php" class="btn btn-default"><i class="fa fa-download"> Descargar (.docx)</i></a>

			</div>
			<?php



		}else{
			echo "<p class='alert alert-danger'>No hay pacientes</p>";
		}


		?>

	</div>
</div>

	</div>
</div>
