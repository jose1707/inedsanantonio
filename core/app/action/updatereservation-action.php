<?php


if(count($_POST)>0){
	$user = ReservationData::getById($_POST["id"]);
	$user->descripcion = $_POST["descripcion"];
$user->nota = $_POST["nota"];
$user->medic_id = $_POST["medic_id"];
$user->dia = $_POST["dia"];
$user->hora = $_POST["hora"];



	$user->update();

Core::alert("Actualizado exitosamente!");
print "<script>window.location='index.php?view=reservations';</script>";


}


?>