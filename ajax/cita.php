<?php 
	$conex = include_once("conexion.php");

	$nombre = $_GET['nombre'];
	$correo = $_GET['correo'];
	$numero = $_GET['numero'];
	$comentario = $_GET['comentario'];
	

	$insert = "INSERT INTO cita 
	(nombre, correo, numero, comentario) VALUES ('$nombre','$correo','$numero','$comentario')";
	$result = $conex->query($insert);

	echo "nice";
 ?>