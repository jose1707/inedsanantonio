<?php



$rx = ReservationData::getRepeated($_POST["medic_id"],$_POST["dia"],$_POST["hora"]);
if($rx==null){
$r = new ReservationData();
$r->descripcion = $_POST["descripcion"];
$r->nota = $_POST["nota"];
$r->medic_id = $_POST["medic_id"];
$r->dia = $_POST["dia"];
$r->hora = $_POST["hora"];

$r->add();

Core::alert("Agregado exitosamente!");
}else{
Core::alert("Error al agregar, Cita Repetida!");
}
Core::redir("./index.php?view=reservations");
?>