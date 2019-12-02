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
 <body>

 	<div class="mensaje col-xs-12">
		<h1 id="mensaje"></h1>
	</div>

	<div class="agregado col-xs-12">
		<h1 id="agregado"></h1>
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
	 		<h2>Categorías</h2>
	 		<p>Disfruta de los productos más increíbles y encuéntralos fácilmente a través de nuestras categorias.</p>
	 	</div>

	 	<div class="categorias col-xs-12 nopadding">
	 		<div class="botones col-xs-12" id="volver">
		 		<button class="col-xs-6 col-md-1" onclick="frutas()">Frutas y verduras</button>
		 		<button class="col-xs-6 col-md-1" onclick="lacteos()">Lácteos</button>
		 		<button class="col-xs-6 col-md-1" onclick="harina()">Harina y semillas</button>
		 		<button class="col-xs-6 col-md-1" onclick="bebida()">Bebidas</button>
		 		<button class="col-xs-6 col-md-1" onclick="limpieza()">Artículos de limpieza</button>
		 		<button class="col-xs-6 col-md-1" onclick="vinos()">Vinos y licores</button>
		 		<button class="col-xs-6 col-md-1" onclick="tecnologia()">Tecnología</button>
		 	</div>

		 	<div class="frutas col-xs-12">
		 		<div class="articulo">
		 			<img src="img/articulos/mango.png">
		 			<h3>Mango manila</h3>
		 			<p>$ 5.50</p>
		 			<p class="es">Agregar a la bolsa:</p><button class="boton" onclick="insert()"><i class="fa fa-suitcase"></i></button>
		 			<input type="hidden" name="" id="user" value="<?php echo $var?>">
		 			<input type="hidden"  id="mango" value="1">
		 		</div>
		 		<div class="articulo">
		 			<img src="img/articulos/piña.png">
		 			<h3>Piña mediana</h3>
		 			<p>$ 5.50</p>
		 			<p class="es">Agregar a la bolsa:</p><button class="boton" id="2" onclick="insertP()"><i class="fa fa-suitcase"></i></button>
		 			<input type="hidden"  id="piña" value="2">
		 		</div>	
		 	</div>

		 	<div class="lacteos col-xs-12">
		 		<div class="articulo">
		 			<img src="img/articulos/lecherosa.png">
		 			<h3>Leche Alpura</h3>
		 			<p>$ 23.50</p>
		 			<p class="es">Agregar a la bolsa:</p><button class="boton" onclick="insertL()"><i class="fa fa-suitcase"></i></button>
		 			<input type="hidden"  id="leche" value="3">
		 		</div>
		 		<div class="articulo">
		 			<img src="img/articulos/quesopa.png">
		 			<h3>Queso Panela</h3>
		 			<p>$ 15.50</p>
		 			<p class="es">Agregar a la bolsa:</p><button class="boton" onclick="insertQ()"><i class="fa fa-suitcase"></i></button>
		 			<input type="hidden"  id="queso" value="4">
		 		</div>	
		 	</div>

		 	<div class="harina col-xs-12">
		 		<div class="articulo">
		 			<img src="img/articulos/cornflakes.png">
		 			<h3>Corn Flakes</h3>
		 			<p>$ 20</p>
		 			<p class="es">Agregar a la bolsa:</p><button class="boton" onclick="insertC()"><i class="fa fa-suitcase"></i></button>
		 			<input type="hidden"  id="corn" value="5">
		 		</div>
		 		<div class="articulo">
		 			<img src="img/articulos/harinat.jpg">
		 			<h3>Harina de Trigo</h3>
		 			<p>$ 32.25</p>
		 			<p class="es">Agregar a la bolsa:</p><button class="boton" onclick="insertH()"><i class="fa fa-suitcase"></i></button>
		 			<input type="hidden"  id="harina" value="6">
		 		</div>	
		 	</div>

		 	<div class="bebida col-xs-12">
		 		<div class="articulo">
		 			<img src="img/articulos/jugobida.png">
		 			<h3>Jugo Bida</h3>
		 			<p>$ 9</p>
		 			<p class="es">Agregar a la bolsa:</p><button class="boton" onclick="insertJ()"><i class="fa fa-suitcase"></i></button>
		 			<input type="hidden"  id="jugo" value="7">
		 		</div>
		 		<div class="articulo">
		 			<img src="img/articulos/ciel600.png">
		 			<h3>Agua ciel</h3>
		 			<p>$ 6</p>
		 			<p class="es">Agregar a la bolsa:</p><button class="boton" onclick="insertA()"><i class="fa fa-suitcase"></i></button>
		 			<input type="hidden"  id="agua" value="8">
		 		</div>	
		 	</div>

		 	<div class="limpieza col-xs-12">
		 		<div class="articulo">
		 			<img src="img/articulos/dove.jpg">
		 			<h3>Jabón Dove</h3>
		 			<p>$ 120</p>
		 			<p class="es">Agregar a la bolsa:</p><button class="boton" onclick="insertJa()"><i class="fa fa-suitcase"></i></button>
		 			<input type="hidden"  id="jabon" value="9">
		 		</div>
		 		<div class="articulo">
		 			<img src="img/articulos/tresseme.png">
		 			<h3>Champú</h3>
		 			<p>$ 170</p>
		 			<p class="es">Agregar a la bolsa:</p><button class="boton" onclick="insertCh()"><i class="fa fa-suitcase"></i></button>
		 			<input type="hidden"  id="champu" value="10">
		 		</div>	
		 	</div>

		 	<div class="vinos col-xs-12">
		 		<div class="articulo">
		 			<img src="img/articulos/heinekensix.png">
		 			<h3>Heineken</h3>
		 			<p>$ 200</p>
		 			<p class="es">Agregar a la bolsa:</p><button class="boton" onclick="insertHe()"><i class="fa fa-suitcase"></i></button>
		 			<input type="hidden"  id="heineken" value="11">
		 		</div>
		 		<div class="articulo">
		 			<img src="img/articulos/vinotrump.png">
		 			<h3>Vino Tinto</h3>
		 			<p>$ 250</p>
		 			<p class="es">Agregar a la bolsa:</p><button class="boton" onclick="insertV()"><i class="fa fa-suitcase"></i></button>
		 			<input type="hidden"  id="vino" value="12">
		 		</div>	
		 	</div>

		 	<div class="tecnologia col-xs-12">
		 		<div class="articulo">
		 			<img src="img/articulos/sandisk.png">
		 			<h3>Usb</h3>
		 			<p>$ 85</p>
		 			<p class="es">Agregar a la bolsa:</p><button class="boton" onclick="insertU()"><i class="fa fa-suitcase"></i></button>
		 			<input type="hidden"  id="usb" value="13">
		 		</div>
		 		<div class="articulo">
		 			<img src="img/articulos/acrosses.png">
		 			<h3>Estufa</h3>
		 			<p>$ 4500</p>
		 			<p class="es">Agregar a la bolsa:</p><button class="boton" onclick="insertE()"><i class="fa fa-suitcase"></i></button>
		 			<input type="hidden"  id="estufa" value="14">
		 		</div>	
		 	</div>

		 	<div class="volver"><a href="#volver">Volver arriba</a></div>
		</div>
	</div>
 
 </body>
 </html>
<?php 
} 
else{
	header("Location: http://localhost/pecafood/index.php");
} 
?>