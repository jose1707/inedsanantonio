<?php
$thejson=null;
$events = ReservationData::getEvery();
foreach($events as $event){
	$thejson[] = array("title"=>$event->descripcion,"url"=>"./?view=editreservacion&id=".$event->id,"start"=>$event->dia."T".$event->hora);
}
?>
<script>
	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '<?php echo date('Y-m-d');?>',
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			events: <?php echo json_encode($thejson); ?>
		});
		
	});

</script>


<div class="row">
<div class="col-md-12">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Calendario de Publicaciones</h4>
  </div>
  <div class="card-content table-responsive">
<div id="calendar"></div>
</div>
</div>
</div>
</div>
