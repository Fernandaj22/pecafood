<!DOCTYPE html>
<html>
<head>
	<title>PecaFood</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,300i,400,400i,500,500i,600,800,900" rel="stylesheet">
	<script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>

	<div class="mensaje col-xs-12">
		<h1 id="mensaje"></h1>
	</div>

	<div class="container-fluid altura nopadding">
		<div class="logo col-xs-12">
			<img src="img/logo.png">
		</div>

		<div class="contenido-login col-xs-12">
			<div class="campos col-xs-12 col-sm-3 col-md-4">
				<p>Inicio de Sesión</p>
				<i class="fa fa-user"></i> <input type="text" placeholder="Usuario" id="usuario">
				<br>
				<i class="fa fa-unlock-alt"></i> <input type="password" placeholder="Contraseña" id="pass">
				<br>
				<button onclick="iniciar()">Ingresar</button>
				<br>
				<a href="registro.php">¿No estás registrado? Hazlo aquí</a>
			</div>
		</div>
	</div>

</body>
</html>