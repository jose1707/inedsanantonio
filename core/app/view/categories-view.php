<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header" data-background-color="blue">
  <h4 class="title">Consultas</h4>
</div>
<div class="card-content table-responsive">


	<?php

	$users = pacientData::getAll();
	if(count($users)>0){
		// si hay usuarios
		?>

		<table class="table table-bordered table-hover">
		<thead>
		<th>Nombre</th>
		<th style="width:300px;"></th>
		</thead>
		<?php
		foreach($users as $user){
			?>
			<tr>
			<td><?php echo $user->nombre." ".$user->apellido; ?></td>

			
			<td> 
			<a href="index.php?view=newcategory&id=<?php echo $user->id;?>" class="btn btn-info btn-xs">Nueva Consulta</a>
			<a href="index.php?view=editcategory&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
			<a href="index.php?view=delcategory&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
			</td>
			
			</tr>
			<?php

		}
?>
</table>
<?php


	}else{
		echo "<p class='alert alert-danger'> No hay Categorias </p>";
	}


	?>

</div>
</div>
</div>
</div>