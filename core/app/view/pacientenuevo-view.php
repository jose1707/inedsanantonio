<div class="row">
	<div class="col-md-12">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Nuevo Estudiante</h4>
  </div>
  <div class="card-content table-responsive">

		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addpacient" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Carné</label>
    <div class="col-md-6">
      <input type="Quiru" name="quirurgicos" class="form-control"  id="quirurgicos" placeholder="Carné">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" required class="form-control" id="nombre" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido</label>
    <div class="col-md-6">
      <input type="text" name="apellido"  class="form-control" id="apellido" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Nacimiento*</label>
    <div class="col-md-6">
      <input type="date" name="edad" required class="form-control" id="edad" placeholder="edad">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
    <div class="col-md-6">
      <input type="text" name="telefono" class="form-control" id="phone1" placeholder="Telefono">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <input type="text" name="direccion" class="form-control"  id="address1" placeholder="Direccion">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Genero*</label>
    <div class="col-md-6">
<label class="checkbox-inline">
  <input type="radio" id="inlineCheckbox1" name="genero" required value="Hombre" onclick="ocultar()"> Hombre
</label>
<label class="checkbox-inline">
  <input type="radio" id="inlineCheckbox2" name="genero" required value="Mujer" onclick="mostrar()"> Mujer
</label>

    </div>
  </div>

<div class="form-group">    
  </div>  
<div class="card-header" data-background-color="blue">
      <h4 class="title">Asignatura</h4>
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
    <select name="traumaticos" >
    <option value="Cuarto">Cuarto</option>
    <option value="Quinto">Quinto</option>
    <option value="Sexto">Sexto</option>
    </select>
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Clave</label>
    <div class="col-md-6">
      <textarea name="alergico" class="form-control" id="alergico" placeholder="Clave"></textarea>
    </div>
  </div>

  <div class="form-group" >
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary" data-background-color="blue">Agregar Estudiante</button>
    </div>
  </div>
</form>
</div>
</div>
	</div>
</div>