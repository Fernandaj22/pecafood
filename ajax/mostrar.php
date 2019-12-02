<?php 
	
	$conex = include_once("conexion.php");

	$user = $_GET['u'];
	/*$user = 1;*/


	

	$iniciar = "SELECT * FROM bolsa WHERE user = '$user'";
	$resultados = $conex->query($iniciar);

	/*if ($resultados->num_rows > 0){     
		$row = $resultados->fetch_assoc();


	    $producto = $row['productoBolsa'];
	    $precio = $row['precioBolsa'];
	    $img = $row['imgBolsa'];
*/	  /*  echo $producto;
	    echo $precio;
	    echo $img;*/

	   /* echo json_encode($row);*/
	/*}*/

	if($resultados->num_rows > 0) {
		            	while($row = $resultados->fetch_assoc()){
		                $response[] = $row;

			        }
			        echo json_encode($response);
			    }



 ?>