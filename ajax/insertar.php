<?php 
	$conex = include_once("conexion.php");

	$idP = $_GET['p'];
	$user = $_GET['u'];

	


	

	$iniciar = "SELECT producto, precio, img FROM productos WHERE idProducto = '$idP'";
	$resultados = $conex->query($iniciar);

	if ($resultados->num_rows > 0){     
		$row = $resultados->fetch_assoc();

	    $producto = $row['producto'];
	    $precio = $row['precio'];
	    $img = $row['img'];
	    /*echo $producto;
	    echo $precio;
	    echo $img;*/

	    $insert = "INSERT INTO bolsa (user, productoBolsa, precioBolsa, imgBolsa) VALUES ('$user','$producto','$precio','$img')";
	    $result = $conex->query($insert);

	    echo "nice";
	}




	/*$insert = "INSERT INTO usuarios (nombreUsuario, apellidoUsuario, userUsuario, correoUsuario, passUsuario) VALUES ('$nombre','$apellidos','$usuario', '$email', '$pass')";
*/

 ?>