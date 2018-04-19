<?php $user = PacientData::getById($_GET["id"]);?>
<div class="row">
	<div class="col-md-12">

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Editar Estudiante</h4>
  </div>
 <div class="card-content table-responsive">
    <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatepacient" role="form">
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Carné</label>
    <div class="col-md-6">
      <input type="text" name="quirurgicos" value="<?php echo $user->quirurgicos;?>" class="form-control" id="quirurgicos" placeholder="Carné">
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
<label class="checkbox-inline">
  <input type="radio" id="inlineCheckbox1" name="genero" require value="<?php echo $user->genero;?>" value="h"> Hombre
</label>
<label class="checkbox-inline">
  <input type="radio" id="inlineCheckbox2" name="genero" required value="<?php echo $user->genero;?>" value="m"> Mujer
</label>

    </div>
  </div>

<div class="card-header" data-background-color="blue">
      <h4 class="title">Asignación</h4>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Carrera*</label>
    <div class="col-md-6">
    <select name="medico" >
    <option value="Computación">Computación</option>
    <option value="Educación">Educación</option>
    <option value="Mecanica">Mecanica</option>
    <option value="Parvulario">Parvulario</option>
    </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Grado*</label>
    <div class="col-md-6">
    <select name="traumaticos">
    <option value="Cuarto">Cuarto</option>
    <option value="Quinto">Quinto</option>
    <option value="Sexto">Sexto</option>
    </select>
    </div>
  </div>
  
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Clave</label>
    <div class="col-md-6">
      <input type="text" name="alergico" value="<?php echo $user->alergico;?>" class="form-control"  id="alergico" placeholder="Clave">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar Paciente</button>
    </div>
  </div>
</form>
</div>
</div>
	</div>
</div>