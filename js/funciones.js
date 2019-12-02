function mensaje(msj){
	document.querySelector('.mensaje').style.transition=".2s all";
	document.querySelector('.mensaje').style.top="0";
	document.querySelector('#mensaje').innerHTML = msj;
	setTimeout(function(){
		document.querySelector('.mensaje').style.top="-40px";
	},1000)
}

function agregado(agr){
	document.querySelector('.agregado').style.transition=".2s all";
	document.querySelector('.agregado').style.top="0";
	document.querySelector('#agregado').innerHTML = agr;
	setTimeout(function(){
		document.querySelector('.agregado').style.top="-40px";
	},3000)
}

function registrar(){
	nombre = document.getElementById('nombre').value;
	apellidos = document.getElementById('apellidos').value;
	usu = document.getElementById('usu').value;
	email = document.getElementById('email').value;
	pass = document.getElementById('pass').value;
	
	if(nombre != "" && apellidos != "" && usu != "" && email != "" && pass != ""){
		registroAJAX = new XMLHttpRequest();
		registroAJAX.open('GET', 'ajax/registro.php?nom='+nombre+'&ap='+apellidos+'&us='+usu+'&e='+email+'&p='+pass);
		registroAJAX.send();
		registroAJAX.onreadystatechange = function(){
			if(registroAJAX.readyState == 4 && registroAJAX.status == 200){
				if (registroAJAX.responseText == 'registro'){
					mensaje('Bienvenido, has sido registrado :)');
					setTimeout(function(){
						location.href ="/pecafood/principal.php";
					},1000)
				}
				else if(registroAJAX.responseText == 'yaregistrado'){
					mensaje('¡Usuario ya registrado, escoge uno nuevo!');
					setTimeout(function(){
						location.href ="/pecafood/registro.php";
					},1000)
				}
				else{
					mensaje('Ocurrió un error :(');
				}
			}
		}	
	}
	else{
		mensaje('Debes completar todos los campos.');
	}
}

function iniciar(){
	usuario = document.getElementById('usuario').value;
	password = document.getElementById('pass').value;
	if (usuario != "" && password != ""){
		loginAJAX = new XMLHttpRequest();
		loginAJAX.open('GET', 'ajax/iniciar.php?u='+usuario+'&p='+password);
		loginAJAX.send();
		loginAJAX.onreadystatechange = function(){
			if(loginAJAX.readyState == 4 && loginAJAX.status == 200){
				if(loginAJAX.responseText == 'mal'){
					mensaje('¡Error! Los datos son incorrectos o no coiciden :(')
				}
				else{
					location.href ="http://localhost/pecafood/principal.php";
				}
			}
		}
	}
	else{
		mensaje('Debes completar todos los campos.');
	}

}

function frutas(){
	document.querySelector('.frutas').classList.remove('verfrutas');
	document.querySelector('.lacteos').classList.remove('verlacteos');
	document.querySelector('.harina').classList.remove('verharina');
	document.querySelector('.bebida').classList.remove('verbebida');
	document.querySelector('.limpieza').classList.remove('verlimpieza');
	document.querySelector('.vinos').classList.remove('vervinos');
	document.querySelector('.tecnologia').classList.remove('vertecnologia');
}

function lacteos(){
	document.querySelector('.frutas').classList.add('verfrutas');
	document.querySelector('.lacteos').classList.add('verlacteos');
	document.querySelector('.harina').classList.remove('verharina');
	document.querySelector('.bebida').classList.remove('verbebida');
	document.querySelector('.limpieza').classList.remove('verlimpieza');
	document.querySelector('.vinos').classList.remove('vervinos');
	document.querySelector('.tecnologia').classList.remove('vertecnologia');
}

function harina(){
	document.querySelector('.frutas').classList.add('verfrutas');
	document.querySelector('.lacteos').classList.remove('verlacteos');
	document.querySelector('.harina').classList.add('verharina');
	document.querySelector('.bebida').classList.remove('verbebida');
	document.querySelector('.limpieza').classList.remove('verlimpieza');
	document.querySelector('.vinos').classList.remove('vervinos');
	document.querySelector('.tecnologia').classList.remove('vertecnologia');
}

function bebida(){
	document.querySelector('.frutas').classList.add('verfrutas');
	document.querySelector('.lacteos').classList.remove('verlacteos');
	document.querySelector('.harina').classList.remove('verharina');
	document.querySelector('.bebida').classList.add('verbebida');
	document.querySelector('.limpieza').classList.remove('verlimpieza');
	document.querySelector('.vinos').classList.remove('vervinos');
	document.querySelector('.tecnologia').classList.remove('vertecnologia');
}

function limpieza(){
	document.querySelector('.frutas').classList.add('verfrutas');
	document.querySelector('.lacteos').classList.remove('verlacteos');
	document.querySelector('.harina').classList.remove('verharina');
	document.querySelector('.bebida').classList.remove('verbebida');
	document.querySelector('.limpieza').classList.add('verlimpieza');
	document.querySelector('.vinos').classList.remove('vervinos');
	document.querySelector('.tecnologia').classList.remove('vertecnologia');
}

function vinos(){
	document.querySelector('.frutas').classList.add('verfrutas');
	document.querySelector('.lacteos').classList.remove('verlacteos');
	document.querySelector('.harina').classList.remove('verharina');
	document.querySelector('.bebida').classList.remove('verbebida');
	document.querySelector('.limpieza').classList.remove('verlimpieza');
	document.querySelector('.vinos').classList.add('vervinos');
	document.querySelector('.tecnologia').classList.remove('vertecnologia');
}

function tecnologia(){
	document.querySelector('.frutas').classList.add('verfrutas');
	document.querySelector('.lacteos').classList.remove('verlacteos');
	document.querySelector('.harina').classList.remove('verharina');
	document.querySelector('.bebida').classList.remove('verbebida');
	document.querySelector('.limpieza').classList.remove('verlimpieza');
	document.querySelector('.vinos').classList.remove('vervinos');
	document.querySelector('.tecnologia').classList.add('vertecnologia');
}

function supermercado(){
	location.href ="http://localhost/pecafood/super.php";
}

// function printExternal(url) {
// 	var printWindow = window.open(url, 'Print', 'left=200, top=200, width=950, height=500, toolbar=0, resizable=0');
// 		printWindow.addEventListener('load', function(){
// 		    printWindow.print();
// 		    printWindow.close();
// 		}, true);
// }

function ticket(){
	direccion = document.getElementById('direccion').value;
	telefono = document.getElementById('telefono').value;
	codigo = document.getElementById('codigo').value;
	user = document.getElementById('user').value;
	mostrar = document.getElementById('mostrar');
	console.log(user);

	if(direccion != "" && telefono != "" && codigo != ""){
		ticketAJAX = new XMLHttpRequest();
		ticketAJAX.open('GET', 'ajax/ticketCompra.php?dir='+direccion+'&tel='+telefono+'&co='+codigo+'&u='+user);
		ticketAJAX.send();
		ticketAJAX.onreadystatechange = function(){
			if(ticketAJAX.readyState == 4 && ticketAJAX.status == 200){
				if(ticketAJAX.responseText == 'bien'){
					location.href="http://localhost/pecafood/ticket.php";
					setTimeout(function(){ eliminarBolsa(); }, 3000);
				}
			}
		}
	}
	else{
		mensaje('Debe completar los campos faltantes');
	}
}

function insert(){
	user = document.getElementById('user').value;
	producto = document.getElementById('mango').value;
	console.log(user);
	console.log(producto);
		insertAJAX = new XMLHttpRequest();
		insertAJAX.open('GET', 'ajax/insertar.php?u='+user+'&p='+producto);
		insertAJAX.send();
		insertAJAX.onreadystatechange = function(){
			if(insertAJAX.readyState == 4 && insertAJAX.status == 200){
				if (insertAJAX.responseText == "nice") {
					agregado('Producto agregado');
				}
			}
		}
}

function insertP(){
	user = document.getElementById('user').value;
	producto = document.getElementById('piña').value;
	console.log(user);
	console.log(producto);
		insertAJAX = new XMLHttpRequest();
		insertAJAX.open('GET', 'ajax/insertar.php?u='+user+'&p='+producto);
		insertAJAX.send();
		insertAJAX.onreadystatechange = function(){
			if(insertAJAX.readyState == 4 && insertAJAX.status == 200){
				if (insertAJAX.responseText == "nice") {
					agregado('Producto agregado');
				}
			}
		}
}

function insertL(){
	user = document.getElementById('user').value;
	producto = document.getElementById('leche').value;
	console.log(user);
	console.log(producto);
		insertAJAX = new XMLHttpRequest();
		insertAJAX.open('GET', 'ajax/insertar.php?u='+user+'&p='+producto);
		insertAJAX.send();
		insertAJAX.onreadystatechange = function(){
			if(insertAJAX.readyState == 4 && insertAJAX.status == 200){
				if (insertAJAX.responseText == "nice") {
					agregado('Producto agregado');
				}
			}
		}
}

function insertQ(){
	user = document.getElementById('user').value;
	producto = document.getElementById('queso').value;
	console.log(user);
	console.log(producto);
		insertAJAX = new XMLHttpRequest();
		insertAJAX.open('GET', 'ajax/insertar.php?u='+user+'&p='+producto);
		insertAJAX.send();
		insertAJAX.onreadystatechange = function(){
			if(insertAJAX.readyState == 4 && insertAJAX.status == 200){
				if (insertAJAX.responseText == "nice") {
					agregado('Producto agregado');
				}
			}
		}
}
function insertC(){
	user = document.getElementById('user').value;
	producto = document.getElementById('corn').value;
	console.log(user);
	console.log(producto);
		insertAJAX = new XMLHttpRequest();
		insertAJAX.open('GET', 'ajax/insertar.php?u='+user+'&p='+producto);
		insertAJAX.send();
		insertAJAX.onreadystatechange = function(){
			if(insertAJAX.readyState == 4 && insertAJAX.status == 200){
				if (insertAJAX.responseText == "nice") {
					agregado('Producto agregado');
				}
			}
		}
}
function insertH(){
	user = document.getElementById('user').value;
	producto = document.getElementById('harina').value;
	console.log(user);
	console.log(producto);
		insertAJAX = new XMLHttpRequest();
		insertAJAX.open('GET', 'ajax/insertar.php?u='+user+'&p='+producto);
		insertAJAX.send();
		insertAJAX.onreadystatechange = function(){
			if(insertAJAX.readyState == 4 && insertAJAX.status == 200){
				if (insertAJAX.responseText == "nice") {
					agregado('Producto agregado');
				}
			}
		}
}
function insertJ(){
	user = document.getElementById('user').value;
	producto = document.getElementById('jugo').value;
	console.log(user);
	console.log(producto);
		insertAJAX = new XMLHttpRequest();
		insertAJAX.open('GET', 'ajax/insertar.php?u='+user+'&p='+producto);
		insertAJAX.send();
		insertAJAX.onreadystatechange = function(){
			if(insertAJAX.readyState == 4 && insertAJAX.status == 200){
				if (insertAJAX.responseText == "nice") {
					agregado('Producto agregado');
				}
			}
		}
}
function insertA(){
	user = document.getElementById('user').value;
	producto = document.getElementById('agua').value;
	console.log(user);
	console.log(producto);
		insertAJAX = new XMLHttpRequest();
		insertAJAX.open('GET', 'ajax/insertar.php?u='+user+'&p='+producto);
		insertAJAX.send();
		insertAJAX.onreadystatechange = function(){
			if(insertAJAX.readyState == 4 && insertAJAX.status == 200){
				if (insertAJAX.responseText == "nice") {
					agregado('Producto agregado');
				}
			}
		}
}
function insertJa(){
	user = document.getElementById('user').value;
	producto = document.getElementById('jabon').value;
	console.log(user);
	console.log(producto);
		insertAJAX = new XMLHttpRequest();
		insertAJAX.open('GET', 'ajax/insertar.php?u='+user+'&p='+producto);
		insertAJAX.send();
		insertAJAX.onreadystatechange = function(){
			if(insertAJAX.readyState == 4 && insertAJAX.status == 200){
				if (insertAJAX.responseText == "nice") {
					agregado('Producto agregado');
				}
			}
		}
}
function insertCh(){
	user = document.getElementById('user').value;
	producto = document.getElementById('champu').value;
	console.log(user);
	console.log(producto);
		insertAJAX = new XMLHttpRequest();
		insertAJAX.open('GET', 'ajax/insertar.php?u='+user+'&p='+producto);
		insertAJAX.send();
		insertAJAX.onreadystatechange = function(){
			if(insertAJAX.readyState == 4 && insertAJAX.status == 200){
				if (insertAJAX.responseText == "nice") {
					agregado('Producto agregado');
				}
			}
		}
}
function insertHe(){
	user = document.getElementById('user').value;
	producto = document.getElementById('heineken').value;
	console.log(user);
	console.log(producto);
		insertAJAX = new XMLHttpRequest();
		insertAJAX.open('GET', 'ajax/insertar.php?u='+user+'&p='+producto);
		insertAJAX.send();
		insertAJAX.onreadystatechange = function(){
			if(insertAJAX.readyState == 4 && insertAJAX.status == 200){
				if (insertAJAX.responseText == "nice") {
					agregado('Producto agregado');
				}
			}
		}
}
function insertV(){
	user = document.getElementById('user').value;
	producto = document.getElementById('vino').value;
	console.log(user);
	console.log(producto);
		insertAJAX = new XMLHttpRequest();
		insertAJAX.open('GET', 'ajax/insertar.php?u='+user+'&p='+producto);
		insertAJAX.send();
		insertAJAX.onreadystatechange = function(){
			if(insertAJAX.readyState == 4 && insertAJAX.status == 200){
				if (insertAJAX.responseText == "nice") {
					agregado('Producto agregado');
				}
			}
		}
}
function insertU(){
	user = document.getElementById('user').value;
	producto = document.getElementById('usb').value;
	console.log(user);
	console.log(producto);
		insertAJAX = new XMLHttpRequest();
		insertAJAX.open('GET', 'ajax/insertar.php?u='+user+'&p='+producto);
		insertAJAX.send();
		insertAJAX.onreadystatechange = function(){
			if(insertAJAX.readyState == 4 && insertAJAX.status == 200){
				if (insertAJAX.responseText == "nice") {
					agregado('Producto agregado');
				}
			}
		}
}
function insertE(){
	user = document.getElementById('user').value;
	producto = document.getElementById('estufa').value;
	console.log(user);
	console.log(producto);
		insertAJAX = new XMLHttpRequest();
		insertAJAX.open('GET', 'ajax/insertar.php?u='+user+'&p='+producto);
		insertAJAX.send();
		insertAJAX.onreadystatechange = function(){
			if(insertAJAX.readyState == 4 && insertAJAX.status == 200){
				if (insertAJAX.responseText == "nice") {
					agregado('Producto agregado');
				}
			}
		}
}

function eliminar(num, user){
	
	eliminarAjax = new XMLHttpRequest();
	eliminarAjax.open('GET','ajax/eliminar.php?p='+num);
	eliminarAjax.send();
		eliminarAjax.onreadystatechange = function(){
			if(eliminarAjax.readyState == 4 && eliminarAjax.status == 200){
				if(eliminarAjax.responseText == 1){
					mensaje('Producto eliminado');
					all(user);
					setTimeout(function(){ location.reload(); }, 500);

				}
				else{
					mensaje('Fatal Error');
				}
			}
		}	
}

function eliminarBolsa(){
	eliminarAjax = new XMLHttpRequest();
	eliminarAjax.open('GET','ajax/eliminaBolsa.php');
	eliminarAjax.send();
		eliminarAjax.onreadystatechange = function(){
			if(eliminarAjax.readyState == 4 && eliminarAjax.status == 200){

				if(eliminarAjax.responseText == 1){
					all(user);
				}
				else{
					mensaje('Fatal Error');
				}
			}
		}	
}

function mostrar(user){
	document.getElementById('mostrar').innerHTML ="";
	document.getElementById('mostrarT').innerHTML ="";
	mostrarAjax = new XMLHttpRequest();
	mostrarAjax.open('GET','ajax/mostrar.php?u='+user);
	mostrarAjax.send();
	mostrarAjax.onreadystatechange = function(){
		if (mostrarAjax.readyState == 4 && mostrarAjax.status == 200) {
			var mostra = JSON.parse(mostrarAjax.responseText);		
			/*console.log(mostra);	*/
			if(mostra != ""){
				var ev="Hola";
				for (var i = 0; i < mostra.length; i++){
						var ev = 
							"<div class='articulo'>"+
							"<img src='"+mostra[i].imgBolsa+"'>"+
							"<h3>"+mostra[i].productoBolsa+"</h3>"+
		 					"<p class='especial'>Precio: $ "+mostra[i].precioBolsa+"</p>"+
		 					/*"<p>Cantidad a comprar:</p><br><input type='number' name='' placeholder='Ej. 10' min='1'><br><br>"+*/
		 					/*"<a href='' id='"+mostra[i].idBolsa+"'>Eliminar de la bolsa <i class='fa fa-times'></i></a>"+*/
		 					"<br>"+"<a onclick='eliminar("+mostra[i].idBolsa+","+user+")';>Eliminar de la bolsa <i class='fa fa-times'></i></a>"+
		 					"</div>";
		
						document.getElementById('mostrar').innerHTML += ev;

						var eve = 
							"<tr>"+
		 						"<td id='articulo'>"+mostra[i].productoBolsa+"</td>"+
		 						"<td >"+mostra[i].precioBolsa+"</td>"+
		 					"</tr>";
		
						document.getElementById('mostrarT').innerHTML += eve;
				}
			}
			else{
				var ev = 
					"<div class='articulo'>"+
					"<p>No hay artículos para mostrar</p>"+
					"</div>";
			}
		}

	}
}


/*function mostrarT(user){
	var total = 0;
	document.getElementById('mostrarT').innerHTML ="";
	mostrarAjax = new XMLHttpRequest();
	mostrarAjax.open('GET','ajax/mostrarT.php?u='+user);
	mostrarAjax.send();
	mostrarAjax.onreadystatechange = function(){

		if (mostrarAjax.readyState == 4 && mostrarAjax.status == 200) {

			var mostra = JSON.parse(mostrarAjax.responseText);		
			console.log(mostra);	

			for (var i = 0; i < mostra.length; i++){

					
					var ev = 
									"<tr>"+
	 									"<td>"+mostra[i].productoBolsa+"</td>"+
	 									"<td>"+mostra[i].precioBolsa+"</td>"+
	 								"</tr>";
	

					
					document.getElementById('mostrarT').innerHTML += ev;

				}


			}

	}
}*/

function total(user){
	document.getElementById('total').innerHTML = "";
	mostrarAjax = new XMLHttpRequest();
	mostrarAjax.open('GET','ajax/total.php?u='+user);
	mostrarAjax.send();
	mostrarAjax.onreadystatechange = function(){

		if (mostrarAjax.readyState == 4 && mostrarAjax.status == 200) {
			var mostra = JSON.parse(mostrarAjax.responseText);		
			console.log(mostra);
			if(mostra != null){
				var ev = 
						"<h3>Total a pagar</h3>"+
			 			"<p id='precioT'>$ "+mostra+"</p>";
			}
			else{
				var ev = 
						"<h3>No hay artículos agregados</h3><br>";
			}						
			document.getElementById('total').innerHTML += ev;
		}
	}
}

function cita(){
	nombre = document.getElementById('nombre').value;
	correo = document.getElementById('correo').value;
	numero = document.getElementById('numero').value;
	comentario = document.getElementById('comentario').value;

	if(nombre!="" && correo!="" && numero!="" && comentario!=""){
		citaAJAX = new XMLHttpRequest();
		citaAJAX.open('GET', 'ajax/cita.php?nombre='+nombre+'&correo='+correo+'&numero='+numero+'&comentario='+comentario);
		citaAJAX.send();
		citaAJAX.onreadystatechange=function(){
			if(citaAJAX.readyState==4 && citaAJAX.status==200){
				mensaje('Comentario enviado');

				var template_params = {
				   "reply_to": 'ferjuareztirado@gmail.com',
				   "to_name": "PecaFood",
				   "message_html": comentario
				}

				var service_id = "pecafood";
				var template_id = "template_rEZEmqc1";
				emailjs.send(service_id,template_id,template_params);


			}
		}
	}
	else{
		mensaje('Rellene todos los campos')
	}
}

function all(user){
	total(user);
	mostrar(user);
}