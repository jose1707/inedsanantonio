<?php 
$user = MedicData::getById($_GET["id"]);
$categories = CategoryData::getAll();
?>
<div class="row">
	<div class="col-md-12">

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Informacion del Docente</h4>
  </div>
  <div class="card-content table-responsive">
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatemedic" role="form">


  <div class="form-group">
    
    <!--<option value="">-- SELECCIONE --</option>      -->
    <?php foreach($categories as $cat):?>
   
    <?php endforeach;?>
   
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" value="<?php echo $user->nombre;?>" class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido" value="<?php echo $user->apellido;?>" required class="form-control" id="apellido" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <input type="text" name="direccion" value="<?php echo $user->direccion;?>" class="form-control" required id="direccion" placeholder="Direccion">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email" value="<?php echo $user->email;?>" class="form-control" id="email" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono</label>
    <div class="col-md-6">
      <input type="text" name="telefono"  value="<?php echo $user->telefono;?>"  class="form-control" id="telefono" placeholder="Telefono">
    </div>
  </div>

  
</form>
</div>
</div>
	</div>
</div>
