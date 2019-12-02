<?php 
	$conex = include_once("conexion.php");

	$nombre = $_GET['nom'];
	$apellidos = $_GET['ap'];
	$usuario = $_GET['us'];
	$email = $_GET['e'];
	$pass = $_GET['p'];

    $nuevo_usu = "SELECT * FROM usuarios WHERE userUsuario = '$usuario'";
    $valida = $conex->query($nuevo_usu);

    if($valida->num_rows > 0)
    {
        echo "yaregistrado";
    }
    else{
    	$registro = "INSERT INTO usuarios (nombreUsuario, apellidoUsuario, userUsuario, correoUsuario, passUsuario) VALUES ('$nombre','$apellidos','$usuario', '$email', '$pass')";
		$result = $conex->query($registro);

		if ($result){
			echo "registro";
		}
		else{
			echo "noregistro";
		}
    }

 ?>