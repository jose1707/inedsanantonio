<?php
$pacients = PacientData::getAll();
$medics = MedicData::getAll();

$statuses = StatusData::getAll();
$payments = PaymentData::getAll();

?>

<div class="row">
  <div class="col-md-12">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h3 class="title">Nuevo Aviso</h3>
  </div>
<form class="form-horizontal" role="form" method="post" action="./?action=addreservation">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Asunto</label>
    <div class="col-lg-10">
      <input type="text" name="descripcion" required class="form-control" id="inputEmail1" placeholder="Asunto">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Publicado</label>
    <div class="col-lg-10">
<select name="medic_id" class="form-control" required>
<option value="">-- SELECCIONE --</option>
  <?php foreach($medics as $m):?>
    <option value="<?php echo $m->id; ?>"><?php echo $m->id." - ".$m->nombre." ".$m->apellido; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha/Hora</label>
    <div class="col-lg-5">
      <input type="date" name="dia" required class="form-control" id="inputEmail1" placeholder="Fecha">
    </div>
    <div class="col-lg-5">
      <input type="time" name="hora" required class="form-control" id="inputEmail1" placeholder="Hora">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripción</label>
    <div class="col-lg-10">
    <textarea class="form-control" name="nota" placeholder="Descripción"></textarea>
    </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Publicar</button>
    </div>
  </div>
</form>

</div>
</div>
