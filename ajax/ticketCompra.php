<?php 
	session_start();
	$conex = include_once("conexion.php");

	$direccion = $_GET['dir'];
	$telefono = $_GET['tel'];
	$codigo = $_GET['co'];
	$user = $_GET['u'];

	$generar = "INSERT INTO compras (direccionComprador, telefonoComprador, codigoComprador,  nombreComprador) VALUES ('$direccion','$telefono','$codigo','$user')";
	$resultados = $conex->query($generar);

	if ($resultados){
		echo "bien";
	}
	else{
		echo "mal";
	}

?>