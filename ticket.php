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
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,300i,400,400i,500,500i,600,800,900" rel="stylesheet">
	<script type="text/javascript" src="js/funciones.js"></script>
	<script src="barcode/dist/JsBarcode.all.min.js"></script> 
	<script src="barcode/dist/JsBarcode.all.js"></script>
</head>
<body onload="total(<?php echo$var ?>); window.print()">

	<div class="fila1">
		<img src="img/logo.png">
		<br>
		<h1>PecaFood, S.A. de C.V.</h1>
		<h2>Querétaro, Qro., <script type="text/javascript">
			var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
			// var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
			var f=new Date();
			document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
		</script></h2>
		<br>

		<p id="hora">
			Expedición de ticket a las <script type="text/javascript">
				var d = new Date();
				hora = document.getElementById('hora');
				hora = document.write(d.getHours()+":"+d.getMinutes()+":"+d.getSeconds());
			</script>
		</p>
		<b id="orden">
			Orden no. <script type="text/javascript">
				orden = document.getElementById('orden');
				orden = document.write(Math.floor(Math.random() * 3 + 18907));
			</script>
		</b>
	</div>

	<div id="mostrar" style="display: none;"></div>

	<div class="fila2">
		<table id="ticket"></table>
	 	<div class="titulo3" id="total"></div>
	</div>

 	<div class="fila-bar">
	 	<img id="barcode">

		<script type="text/javascript">
			JsBarcode("#barcode", "8296721");
		</script>

		<p>Pasar debajo del lector de código de barras, en caso de no ser reconocido, capturar.</p>
 	</div>

	<div class="fila4">
		<p>Av. de las Ciencias S/N, Juriquilla,<br>76230 Santiago de Querétaro, Qro.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>




</body>
</html>
<?php 
} 
else{
	header("Location: https://fernandaj22.github.io/pecafood/index.php");
} 
?>