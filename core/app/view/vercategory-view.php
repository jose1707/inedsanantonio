<?php $user = pacientData::getById($_GET["id"]);?>
<div class="row">
	<div class="col-md-12">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="<?php echo $user->name;?>">Editar Consulta</h4>
  </div>
  <div class="card-content table-responsive">


		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatecategory" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Motivo de la Consulta</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
       
    </div>
  </div>

<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Historia de la Enfermedad Actual</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div>

  <div class="card-header" data-background-color="blue">
      <h4 class="title">Examen Fisico</h4>
  </div>


<table class="table table-bordered table-hover">
      <thead>
        <div>
      <tr>
      <td>

      
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">P / A</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
  </div></div>
</td>
    
    <td>
      
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">FC</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div></td>
</tr>
<tr>
<td>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Pulso</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div></td>

<td>
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">T</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div>
</td></tr>


<tr>
  <td>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">W</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div>
</td>
<td>
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Frec. Resp</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div>
</td>
  </tr>
<tr>
  <td>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Detalle</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div>
</td>
<td>
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Diagnostico</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div>
</td>
</tr>
<tr>
  <td>
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Tratamiento</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div>
</td>
</tr>
</div>
</thead></table>


<table class="table table-bordered table-hover">
      <thead>
        
      <tr>

<div class="card-header" data-background-color="blue">
      <h3 class="title">Laboratorios</h3>
      <h4 class="title">Hematologia Completa </h4>
  </div></tr>
<div>
  <tr>
    <td>

<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">RGB</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div></td>
<td>
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">PLT</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div>
</td></tr>


<tr>
  <td>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">HTo</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div></td>
<td>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">VSE</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div>
</td></tr>

<tr>
  <td>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">seg</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div></td>
<td>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Linf</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div>
</td></tr>

<tr>
  <td>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Mon</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div>
</td>
<td>
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">EOS</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div>
</td></tr>
<tr>
  <td>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">TP</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div></td>
<td>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">TPT</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div>
</td></tr>
<tr><td>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">FR</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div></td>
<td>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">ASO</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div>
</td></tr>
<tr><td>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">PCR</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div></td>
<td>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Ag Prostatico</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="">
    </div>
  </div></td></tr>
</div></thead></table>
 
</form>
</div>
</div>
	</div>
</div>