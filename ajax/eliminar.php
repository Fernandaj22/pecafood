<?php 
	$conex = include_once("conexion.php");

	$producto = $_GET['p'];

	/*$producto = 20;*/
	$delete = "DELETE FROM bolsa WHERE idBolsa = '$producto';";

	$resultados = $conex->query($delete);

	echo $resultados;

 ?>