(function(){
	'use strict'
	var regalo = document.querySelector('#regalo');

	document.addEventListener('DOMContentLoaded', function(){

/////////mapa
		if (document.querySelector('.mapa')){
			var map = L.map('mapa').setView([19.687082, -98.990507], 18);
			L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	    	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
			}).addTo(map);
			L.marker([19.687082, -98.990507]).addTo(map);
		}

////Variables
		
	//var Registro
		var nombre = document.querySelector('#nombre');
		var apellido = document.querySelector('#apellido');
		var email = document.querySelector('#email');

	//Var Pases Día
		var pase_dia = document.querySelector('#pase_dia')
		var pase_dosdias = document.querySelector('#pase_dosdias');
		var pase_completo = document.querySelector('#pase_completo');

		var viernes = document.querySelector('#viernes');
		var sabado = document.querySelector('#sabado');
		var domingo = document.querySelector('#domingo');

	//botones Divs
		var calcular = document.querySelector('#calcular');
		var errorDiv = document.querySelector('#error');
		var botonRegistro = document.querySelector('#btnRegistro');
		var lista_productos = document.querySelector('#lista-producto');
		var suma = document.querySelector('#suma-total');	

	// Extras
		var etiquetas = document.querySelector('#etiquetas_evento');
		var camisetas =document.querySelector('#camisa_evento');

		botonRegistro.disabled = true;




////Eventos		

	//Formulario
		if (document.querySelector('.formulario-registro')) {
			nombre.addEventListener('blur', validarCampos);
			apellido.addEventListener('blur', validarCampos);
			email.addEventListener('blur', validarCampos);
			email.addEventListener('blur', validarMail);
			
			//Calcular
			calcular.addEventListener('click', calcularMontos);

			// Seleccionar conferencias
			pase_dia.addEventListener('blur', mostrarDias);
			pase_dosdias.addEventListener('blur', mostrarDias);
			pase_completo.addEventListener('blur', mostrarDias);
		}
////Funciones
		
	//validar CAMPOs
		function validarCampos(){
			if (this.value == '') {
				errorDiv.style.display = 'inline-block';
				errorDiv.innerHTML = "Este campo es obligatorio";
				this.style.border = '1px solid red';
				errorDiv.style.border = '1px solid red';
			}else{
				errorDiv.style.display = 'none';
				this.style.border = '1px solid #1e1e1e';
			}
		}
	//validar E-Mail

		function validarMail(){
			if (this.value.indexOf("@") > -1) {
				errorDiv.style.display = 'none';
				this.style.border = '1px solid #1e1e1e';				
			}
			else{
				errorDiv.style.display = 'inline-block';
				errorDiv.innerHTML = "Ingresa una dirección de E-mail valida";
				this.style.border = '1px solid red';
				errorDiv.style.border = '1px solid red';
			}
		}

	// Funcion calcular Total a Pagar  
		function calcularMontos(event){
			event.preventDefault();
			if (regalo.value === '') {
				alert('Debes elegir un regalo');
				regalo.focus();
			}else {
				var boletosDia = parseInt(pase_dia.value, 10) ||0,
					boletosDosDia = parseInt(pase_dosdias.value, 10) ||0,
					boletosCompleto = parseInt(pase_completo.value, 10) ||0,
					cantidadCamisas = parseInt(camisetas.value, 10) ||0,
					cantidadEtiquetas = parseInt(etiquetas.value, 10) ||0;

				var totalPagar = (boletosDia * 30 ) + (boletosDosDia * 45) + (boletosCompleto * 50) 
								+((cantidadCamisas * 10) *.93 ) +(cantidadEtiquetas * 2);

				var listadoProductos = [];

				if (boletosDia >= 1) {
					listadoProductos.push(boletosDia + ' Pases un día');
				}	
				if (boletosDosDia >= 1) {	
					listadoProductos.push(boletosDosDia + ' Pases por dos días');
				}
				if (boletosCompleto >= 1) {
					listadoProductos.push(boletosCompleto + ' Pases de todo el evento');
				}
				if (cantidadCamisas >= 1) {
					listadoProductos.push(cantidadCamisas + ' Camisas Evento');
				}
				if (cantidadEtiquetas >= 1) {				
					listadoProductos.push(cantidadEtiquetas + ' Paquete de Etiquetas');
				}

				lista_productos.style.display = 'block';
				lista_productos.innerHTML = '';	
				for (var i = 0; i < listadoProductos.length; i++) {
					lista_productos.innerHTML += listadoProductos[i] + '<br>';
				}
				suma.innerHTML = "$ " + totalPagar.toFixed(2);
			}
			botonRegistro.disabled = false;
			botonRegistro.style.background = '#fe4918';
			document.getElementById('total_pedido').value = totalPagar;
		}

///////Validar Calcular y PAgar
		





	///	Funcion Mostrar Días
		function mostrarDias(){
			var boletosDia = parseInt(pase_dia.value, 10) ||0,
				boletosDosDia = parseInt(pase_dosdias.value, 10) ||0,
				boletosCompleto = parseInt(pase_completo.value, 10) ||0;

			document.getElementById('viernes').style.display = 'none';
			document.getElementById('sabado').style.display = 'none';
			document.getElementById('domingo').style.display = 'none';

			if (boletosDia > 0) {
				document.getElementById('viernes').style.display = 'block';
			}
			if (boletosDosDia > 0) {
				document.getElementById('viernes').style.display = 'block';
				document.getElementById('sabado').style.display = 'block';
			}
			if (boletosCompleto) {
				document.getElementById('viernes').style.display = 'block';
				document.getElementById('sabado').style.display = 'block';
				document.getElementById('domingo').style.display = 'block';
			}
		}
 	})//DOM CONTENT LOADED
})();




$(function(){

///////Menu Responsive
	$('.menu-movil').on('click', function(){
		$('.navegacion-principal').slideToggle();
	});

////Programa de conferencias
	$('.programa-evento .info-curso:first').show();
	$('.menu-programa a:first').addClass('activo');

	$('.menu-programa a').on('click', function(){
		$('.menu-programa a').removeClass('activo');
		$(this).addClass('activo')	;
		$('.ocultar').hide();

		var enlace = $(this).attr('href');
		$(enlace).fadeIn(600);
		return false;
	});

///////////MEnu fijo
	
	var windowHeight = $(window).height();
	var barraAltura = $('.barra').innerHeight();

	$(window).scroll(function(){
		var scroll = $(window).scrollTop();
		if (scroll > windowHeight) {
			$('.barra').addClass('fixed');
			$('body').css({'margin-top': barraAltura+'px!important'});
		}else{
			$('.barra').removeClass('fixed');
			$('body').css({'margin-top': '0px!important'});
		}
	});

////Animacion titulos
	$('.informacion-evento .nombre-sitio').lettering();


////Agregar clase menu
	$('body.conferencias .navegacion-principal a:contains("Conferencias")').addClass('activo');
	$('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
	$('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');

////Animaciones para los numeros eventos
	var resumenLista= $('.resumen-evento');
	if (resumenLista.length > 0){
		$('.resumen-evento').waypoint(function(){
			$('.resumen-evento .contador-num:nth-child(1) .numero').animateNumber({number:6}, 1200);
			$('.resumen-evento .contador-num:nth-child(2) .numero').animateNumber({number:15}, 1200);
			$('.resumen-evento .contador-num:nth-child(3) .numero').animateNumber({number:3}, 600);
			$('.resumen-evento .contador-num:nth-child(4) .numero').animateNumber({number:9}, 1200);
		}, {
			offset: '60%'

		});

	}

////Animaciones para el contador de fecha

	$('.resumen-fecha').countdown('2019/12/29 09:00:00', function(event){
		$('#dias').html(event.strftime('%D'));
		$('#horas').html(event.strftime('%H'));
		$('#minutos').html(event.strftime('%M'));
		$('#segundos').html(event.strftime('%S'));
	});

/////COLOR BOX
	$('.invitado-info').colorbox({inline:true, width: '50%'});
	$('.boton_newsletter').colorbox({inline:true, width: '50%'});
});





//var xhr = new XMLHttpRequest();
//xhr.open('POST', "crear_usuario.php", true);
//xhr.setRequestHeader("Content-Type", "aplication/x-www-form-urlencoded");
//xhr.send();





