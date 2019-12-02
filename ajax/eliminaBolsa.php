<?php 
	$conex = include_once("conexion.php");

	$delete = "DELETE FROM bolsa;";

	$resultados = $conex->query($delete);

	echo $resultados;

 ?>