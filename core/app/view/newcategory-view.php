<?php $user = PacientData::getById($_GET["id"]);?>
<div class="row">
	<div class="col-md-12">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h3 class="title"> Consulta <h4><p> <?php echo $user->nombre." ".$user->apellido; ?></p></h4></h3>

  </div>
  <div class="card-content table-responsive">

		<form class="form-horizontal" method="post" id="addcategory" action="index.php?view=addcategory" role="form">







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



<table class="table table-bordered table-hover">
      <thead>
        
      

<div class="card-header" data-background-color="blue">
      <h3 class="title">Laboratorios</h3>
      
 </div>

<tr>
  <td>
    <label class="col-lg-8"><h4>Examen Solicitado</h4></label>
  </td>
  <td>
    <label class="col-lg-8"><h4>Resultado</h4></label>
  </td>
  <td>
    <label class="col-lg-8"><h4>Valor Normal</h4></label>
  </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Glucosa en Ayunas</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > Mg/dl</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">65-110 Mg/dl</label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Glucosa Post-prandia</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > Mg/dl</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">75-115</label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Nitrogeno de urea</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > Mg/dl</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">7-18 Mg/dl</label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Creatinina</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > Mg/dl</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">M 0.6-0.9 Mg/dl <br>H 0.7-1.1 Mg/dl</br></label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Bilirrubina Total</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > Mg/dl</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">Hasta 1.2 Mg/dl </label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Bilirrubina Directa</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > Mg/dl</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">Hasta o.5 Mg/dl </label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Bilirrubina Indirecta</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > Mg/dl</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">Hasta 0.75 Mg/dl </label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Proteina Total</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > Mg/dl</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">6.7-8.7 g/dl </label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Albumina</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > G/dl</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">3.5-5.3 g/dl </label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Globulina</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > G/dl</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">2.4-3.6 g/dl </label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Relacion A/G</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > Mg/dl</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">Menor de 1.0 </label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Acido Urico</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > Mg/dl</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">M 2.4-5.7 Mg/d <br>H 3.4-7.0 Mg/d</br></label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">LDH</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > Mg/dl</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">160-320</label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Transaminasa G Oxalacetica</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > U/l</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">H 37, M 31</label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Transaminasa G Piruvica</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > U/l</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">H 42, M 32</label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Fosfatasa Alcalina</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > U/l</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">61-232 U/L</label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Colesterol Total</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > Mg/dl</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">140-200 Mg/dl</label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Colesterol HDL</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > Mg/dl</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">44-76 Mg/gl</label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Colesterol LDL</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > Mg/dl</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">64-92 Mg/gl</label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Trigliceridos</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > Mg/dl</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">36-165 Mg/gl</label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Lipasa</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > U/L</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">60</label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">Amilasa</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > Ul/L</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">190 Ul/L</label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">CK Total</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > U/l</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">H 15-125 <br>M 15-110</br></label> 
    </td>
</tr>

<tr>
  <td>
    <label for="inputEmail1" class="col-lg-8 ">CK-MB</label>
  </td>
  <td>
     <input class="col-lg-10 " type="text" name="name" required  id="name" > <label > U/l</label>
    </td>
    <td>
     <label for="inputEmail1" class="col-lg-8 ">16</label> 
    </td>
</tr>




</thead>
</table>







  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Consulta</button>
    </div>
  </div>
</form>
</div>
</div>
	</div>
</div>