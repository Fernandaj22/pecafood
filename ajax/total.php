<?php 

$conex = include_once("conexion.php");

	$user = $_GET['u'];
	/*$user = 1;*/


	

	$iniciar = "SELECT sum(precioBolsa) as sumpb FROM bolsa WHERE user = '$user'";
	$resultados = $conex->query($iniciar);

	if ($resultados->num_rows > 0){     
		$row = $resultados->fetch_assoc();


	    $producto = $row['sumpb'];
	   /* echo $producto;*/
	    echo json_encode($producto);
	}


 ?>