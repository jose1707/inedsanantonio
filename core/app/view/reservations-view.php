<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
<!--<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/clients-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div>
-->
</div>


<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Publicaciones</h4>
  </div>
  <div class="card-content table-responsive">
<a href="./index.php?view=newreservation" class="btn btn-info">Publicacion Nueva</a>
<a href="./index.php?view=oldreservations" class="btn btn-default">Publicaciones Anteriores</a>
<br><br>
<form class="form-horizontal" role="form">
<input type="hidden" name="view" value="reservations">
        <?php
$medics = MedicData::getAll();
        ?>

  <div class="form-group">
    
<div class="col-lg-2">
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-search"></i></span>
		  <input type="text" name="q" value="<?php if(isset($_GET["q"]) && $_GET["q"]!=""){ echo $_GET["q"]; } ?>" class="form-control" placeholder="Palabra clave">
		</div>
    </div>
    <div class="col-lg-2">
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-male"></i></span>

<select name="medic_id" class="form-control">
<option value="">DOCENTE</option>
  <?php foreach($medics as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if(isset($_GET["medic_id"]) && $_GET["medic_id"]==$p->id){ echo "selected"; } ?>><?php echo $p->id." - ".$p->nombre." ".$p->apellido; ?></option>
  <?php endforeach; ?>
</select>
		</div>
    </div>
    <div class="col-lg-4">
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
		  <input type="date" name="dia" value="<?php if(isset($_GET["dia"]) && $_GET["dia"]!=""){ echo $_GET["dia"]; } ?>" class="form-control" placeholder="Palabra clave">
		</div>
    </div>

    <div class="col-lg-2">
    <button class="btn btn-primary btn-block">Buscar</button>
    </div>

  </div>
</form>

		<?php
$users= array();
if((isset($_GET["q"]) && isset($_GET["medic_id"]) && isset($_GET["dia"])) && ($_GET["q"]!="" || $_GET["medic_id"]!="" || $_GET["dia"]!="") ) {
$sql = "select * from reservation where ";
if($_GET["q"]!=""){
	$sql .= " descripcion like '%$_GET[q]%' and nota like '%$_GET[q] %' ";
}

if($_GET["medic_id"]!=""){

	$sql .= " medic_id = ".$_GET["medic_id"];
}



if($_GET["dia"]!=""){
if($_GET["q"]!="" ||$_GET["medic_id"]!="" ){
	$sql .= " and ";
}

	$sql .= " dia = \"".$_GET["dia"]."\"";
}

		$users = ReservationData::getBySQL($sql);

}else{
		$users = ReservationData::getAll();

}
		if(count($users)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Asunto</th>
			<th>Docente</th>
			<th>Fecha</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				$medic = $user->getMedic();
				?>
				<tr>
				<td><?php echo $user->descripcion; ?></td>
				<td><?php echo $medic->nombre." ".$medic->apellido; ?></td>
				<td><?php echo $user->dia." ".$user->hora; ?></td>
				<td style="width:180px;">
				<a href="index.php?view=editreservation&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?action=delreservation&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
				</td>
				</tr>
				<?php

			}
			?>
			</table>
			</div>
			</div>
			<?php



		}else{
			echo "<p class='alert alert-danger'>No hay Publicaciones</p>";
		}


		?>


	</div>
</div>