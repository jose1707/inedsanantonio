<?php

if(count($_POST)>0){
	$user = PacientData::getById($_POST["user_id"]);
	$user->nombre = $_POST["nombre"];
	$user->apellido = $_POST["apellido"];
	$user->edad = $_POST["edad"];
	$user->telefono = $_POST["telefono"];
	$user->direccion = $_POST["direccion"];
	$user->quirurgicos = $_POST["quirurgicos"];
	$user->traumaticos = $_POST["traumaticos"];
	$user->alergico = $_POST["alergico"];
	$user->genero = $_POST["genero"];
	$user->medico = $_POST["medico"];

	$user->update();

Core::alert("Actualizado exitosamente!");
print "<script>window.location='index.php?view=pacients';</script>";


}


?>