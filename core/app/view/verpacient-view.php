<?php $user = PacientData::getById($_GET["id"]);?>
<div class="row">
	<div class="col-md-12">

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Informacion del Estudiante</h4>
  </div>
 <div class="card-content table-responsive">
    <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatepacient" role="form">

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">IdEstudiante</label>
    <div class="col-md-6">
      <input type="text" name="quirurgicos" value="<?php echo $user->quirurgicos;?>" class="form-control" id="quirurgicos" placeholder="IdEstudiante">
    </div>
    </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
    <div class="col-md-6">
      <input type="text" name="nombre" value="<?php echo $user->nombre;?>" class="form-control" id="nombre" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido</label>
    <div class="col-md-6">
      <input type="text" name="apellido" value="<?php echo $user->apellido;?>" required class="form-control" id="apellido" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">edad</label>
    <div class="col-md-6">
      <input type="date" name="edad" value="<?php echo $user->edad;?>" class="form-control" id="edad" placeholder="edad">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono</label>
    <div class="col-md-6">
      <input type="text" name="telefono" value="<?php echo $user->telefono;?>" class="form-control" id="phone1" placeholder="Telefono">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion</label>
    <div class="col-md-6">
      <input type="text" name="direccion" value="<?php echo $user->direccion;?>" class="form-control"  id="address1" placeholder="Direccion">
    </div>
  </div>


<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Genero</label>
    <div class="col-md-6">
      <input type="text" name="genero" value="<?php echo $user->genero;?>" class="form-control" id="genero" placeholder="genero">
    </div>
  </div>

  
<div class="card-header" data-background-color="blue">
      <h4 class="title">Asignación</h4>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Carrera</label>
    <div class="col-md-6">
      <input type="Medicos" name="medico" value="<?php echo $user->medico;?>" class="form-control"  id="medico" placeholder="Carrera">
    </div>
  </div>


<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Grado</label>
    <div class="col-md-6">
      <input type="text" name="traumaticos" value="<?php echo $user->traumaticos;?>" class="form-control" id="traumaticos" placeholder="Grado">
    </div>
  </div>
  
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Clave</label>
    <div class="col-md-6">
      <input type="text" name="alergico" value="<?php echo $user->alergico;?>" class="form-control"  id="alergico" placeholder="Clave">
    </div>
  </div>

  
</form>
</div>
</div>
	</div>
</div>