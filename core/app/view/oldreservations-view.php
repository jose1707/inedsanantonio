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
    
	<h4 class="title">Publicaciones Anteriores</h4>
  </div>
  <div class="card-content table-responsive">
		
		<?php

		$users = ReservationData::getOld();
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
				<td style="width:130px;">
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
			echo "<p class='alert alert-danger'>No hay publicaciones</p>";
		}


		?>


	</div>
</div>