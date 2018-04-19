<?php
$pacient = PacientData::getById($_GET["id"]);
?>
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
      <h4 class="title">Historial de Citas del Paciente</h4>
<p>Paciente: <?php echo $pacient->nombre." ".$pacient->apellido;?></p>
  </div>
  <div class="card-content table-responsive">
		<?php
		$users = ReservationData::getAllByPacientId($_GET["id"]);
		if(count($users)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Asunto</th>
			<th>Paciente</th>
			<th>Medico</th>
			<th>Fecha</th>
			</thead>
			<?php
			foreach($users as $user){
				$pacient  = $user->getPacient();
				$medic = $user->getMedic();
				?>
				<tr>
				<td><?php echo $user->descripcion; ?></td>
				<td><?php echo $pacient->nombre." ".$pacient->apellido; ?></td>
				<td><?php echo $medic->nombre." ".$medic->apellido; ?></td>
				<td><?php echo $user->dia." ".$user->hora; ?></td>
				</tr>
				<?php

			}
?>
</table>
</div>
</div>
<?php

		}else{
			echo "<p class='alert alert-danger'>No hay citas</p>";
		}


		?>


	</div>
</div>