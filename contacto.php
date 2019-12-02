<?php 
  session_start();
  if(isset($_SESSION['loggedin'])) {
 ?>
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
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.3.2/dist/email.min.js"></script>
	<script type="text/javascript">
	   (function(){
	      emailjs.init("user_9tD6CfEZbOAndyzo3WylK");
	   })();
	</script>

 </head>
 <body>

 	<div class="mensaje col-xs-12">
		<h1 id="mensaje"></h1>
	</div>

	<div class="container-fluid altura nopadding">
		<nav class="navegador col-xs-12">
	 		<a href="#" class="dif"><img src="img/logo.png"></a>
	 		<a href="principal.php">
	 			<i class="fa fa-home"></i>&nbsp;
	 			<span class="hidden-xs">Inicio</span>
	 		</a>
	 		<a href="super.php">
	 			<i class="fa fa-shopping-cart"></i>&nbsp;
	 			<span class="hidden-xs">Supermercado</span>
	 		</a>
	 		<a href="bolsa.php">
	 			<i class="fa fa-suitcase"></i>&nbsp;
	 			<span class="hidden-xs">Mi Bolsa</span>
	 		</a>
	 		<a href="contacto.php">
	 			<i class="fa fa-phone"></i>&nbsp;
	 			<span class="hidden-xs">Contacto</span>
	 		</a>
	 		<a href="cerrar.php" class="dif bo">
	 			<i class="fa fa-sign-out"></i>&nbsp;
	 			<span class="hidden-xs">Cerrar sesión</span>
	 		</a>
 		</nav>

 		<div class="encabezado col-xs-12">
	 		<h2>Contacto</h2>
	 		<p>Envíanos un correo electrónico <br><b> y nos pondremos en contacto contigo</b></p>
	 	</div>

	 	<div class="back">
		 	<div class="formas form col-xs-6">
			 	<input type="hidden" name="" id="user" value="<?php echo $var?>">
			 	<p class="col-xs-12 col-md-2">Nombre:</p>
			 	<input type="text" name="" placeholder="Escribe aquí el nombre" id="nombre" required class="col-xs-12 col-md-10">
			 	<p class="col-xs-12 col-md-2">Correo:</p>
			 	<input type="text" name="" placeholder="Escrie aquí tu correo electrónico" id="correo" required class="col-xs-12 col-md-10">
			 	<p class="col-xs-12 col-md-2">Teléfono:</p>
			 	<input type="number" name="" placeholder="Escribe aquí tu número telefónico" id="numero" required class="col-xs-12 col-md-10">
			 	<p class="col-xs-12 col-md-2">Comentario:</p>
			 	<input type="text" name="" placeholder="Escribe aquí tu comentario" id="comentario" required class="col-xs-12 col-md-10">
			 	<button onclick="cita()">Enviar comentario</button>
		 	</div>
		</div>
	</div>

 
 </body>
 </html>
<?php 
} 
else{
	header("Location: https://fernandaj22.github.io/pecafood");
} 
?>