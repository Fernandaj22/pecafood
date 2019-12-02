<?php 
	session_start();
	$conex = include_once("conexion.php");

	$usuario = $_GET['u'];
	$password = $_GET['p'];

	$iniciar = "SELECT * FROM usuarios WHERE userUsuario = '$usuario' AND passUsuario = '$password'";
	$resultados = $conex->query($iniciar);

	if ($resultados->num_rows > 0){     
		$row = $resultados->fetch_assoc();

		$_SESSION['loggedin'] = true;
	    $_SESSION['idUsuario'] = $row['idUsuario'];
	}
	else{
		echo "mal";
	}

 ?>