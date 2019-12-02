<?php 
  session_start();
  if(isset($_SESSION['idUsuario'])) {
  	$var = $_SESSION['idUsuario'];
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
 </head>
 <body onload="total(<?php echo$var ?>)">

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
	 		<h2>Mi bolsa</h2>
	 		<p>Todos los artículos que has arrojado a tu bolsa <br><b>¿Qué esperas para comprarlos?</b></p>
	 	</div>

	 	<div class="bolsa col-xs-12">
	 		<div class="cont col-xs-12 col-md-6">
		 		<div class="titulo">
		 			<h2><i class="fa fa-check"></i> Artículos añadidos</h2>
		 		</div>

		 		<div class="artañadido" id="mostrar"></div>	
	 		</div>

	 		<!-- parte pago -->
	 		<div class="pago col-xs-12 col-md-6" id="pago">
	 			<div class="titulo">
		 			<h2><i class="fa fa-ticket"></i> Generar ticket de pago</h2>
		 			<p class="especial">Deberá ingresar el domicilio dónde será entregado su paquete de supermercado, sea específico en cada dato.</p>
		 		</div>
		 		<div class="formas col-xs-12">
		 			<input type="hidden" name="" id="user" value="<?php echo $var?>">
		 			<p class="col-xs-12 col-md-2">Dirección</p>
		 			<input type="text" name="" placeholder="Escribe aquí tu dirección" id="direccion" class="col-xs-12 col-md-10">
		 			<p class="col-xs-12 col-md-2">Teléfono</p>
		 			<input type="text" name="" placeholder="Escribe aquí tu teléfono" id="telefono" class="col-xs-12 col-md-10">
		 			<p class="col-xs-12 col-md-3">Código Postal</p>
		 			<input type="number" name="" placeholder="Escribe aquí tu código postal" id="codigo" class="col-xs-12 col-md-9">
	 			</div>

	 		<div class="preticket">
		 		<table id="ticket col-xs-12">
		 			<tr>
		 				<th>Productos</th>
						<th>Total</th>
	 				</tr>
	 				<table id="mostrarT"></table>
		 		</table>

		 		<div class="titulo3" id="total"></div>

		 		<div class="flex col-xs-12">
		 			<button onclick="ticket()">Generar ticket</button>
		 		</div>
	 		</div>


	 	</div>
	</div>
 	
 	
 	<script type="text/javascript">
 		 		window.addEventListener('load',mostrar(<?php echo$var ?>),true);
 				/*window.addEventListener('load',mostrarT(<?php echo$var ?>),true);*/
 	</script>
 </body>
 </html>
<?php 
} 
else{
	header("Location: https://fernandaj22.github.io/pecafood/index.php");
} 
?>