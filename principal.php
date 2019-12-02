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
 </head>
 <body>

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

 		<div class="medio parte1 col-xs-12 col-sm-6 col-md-6">
 			<p>La mejor variedad en frutas frescas</p>
 		</div>

	 	<div class="medio parte2 col-xs-12 col-sm-6 col-md-6">
	 		<p>Encuentra la marca de pasta de tu preferencia</p>
	 	</div>

	 	<div class="encabezado col-xs-12">
	 		<h2>¡Hazlo desde tu casa!</h2>
	 		<p>Realiza tu super en cuestión de segundos, sólo agrega a tu bolsa los artículos que necesites y genera un ticket que puedes pagar en las siguientes tiendas: </p>
	 	</div>

	 	<div class="pagos col-xs-12">
	 		<img src="img/superama.png">
	 		<img src="img/aurrera.png">
	 		<img src="img/banamex.png">
	 		<img src="img/santander.png">
	 		<img src="img/oxxo.png">
	 	</div>
	 	<div class="pagos col-xs-12">
	 		<img src="img/bancomer.png">
	 		<img src="img/walmart.png">
	 		<img src="img/soriana.png">
	 		<img src="img/ahorro.png">
	 	</div>

	 	<div class="promociones col-xs-12">
	 		<h3><b>50%</b> de descuento en<br>frutas y verduras</h3>
	 		<img src="img/frutas.png">
	 		<button class="descuento col-xs-4 col-md-2" onclick="supermercado()">Consíguelo</button>
	 		<img src="img/sabritas.jpg">
	 		<h3><b>20%</b> de descuento en<br>sabritas</h3>
	 	</div>
 	</div> 
 </body>
 </html>
<?php 
} 
else{
	header("Location: https://fernandaj22.github.io/pecafood/index.php");
} 
?>