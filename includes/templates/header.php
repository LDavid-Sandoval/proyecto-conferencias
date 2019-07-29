<!doctype html>
<html class="no-js" lang="es">
	<head>
		<meta charset="utf-8">
	  	<meta http-equiv="x-ua-compatible" content="ie=edge">
	  	<title>GDL WEBCAMP</title>
	  	<meta name="description" content="">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">

	  	<link rel="manifest" href="site.webmanifest">
	 	<link rel="apple-touch-icon" href="icon.png">
	  <!-- Place favicon.ico in the root directory -->
	  	<link rel="stylesheet" href="css/all.css">
	  	<link rel="stylesheet" href="css/fontawesome.min.css">
	  	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">   
	  	<link rel="stylesheet" href="css/normalize.css">
	  	<link rel="stylesheet" href="css/main.css">
		<?php  	
			$archivo = basename($_SERVER['PHP_SELF']);
			$pagina = str_replace(".php", "", $archivo);
			if ($pagina == 'invitados' || $pagina == 'index') {
				# code...
				echo '<link rel="stylesheet" href="css/colorbox.css">';
			}else if ($pagina == 'conferencias') {
				# code...
				echo '<link rel="stylesheet" href="css/lightbox.css">';
			}
		?>

		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
		integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
		crossorigin=""/>
		<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
   		integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
   		crossorigin=""></script>

	  <meta name="theme-color" content="#fafafa">
	</head>

	<body class="<?php echo $pagina; ?>">
	  <!--[if IE]>
	    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	  <![endif]-->

	  <!-- Add your site or application content here -->
	  <header class="site-header ">
	    <div class="hero">
	      <div class="contenido-header ">
	        <nav class="redes-sociales">
	          <a href=""><i class="fab fa-facebook-f"></i></a>
	          <a href=""><i class="fab fa-twitter"></i></a>
	          <a href=""><i class="fab fa-pinterest-p"></i></a>
	          <a href=""><i class="fab fa-youtube"></i></a>
	          <a href=""><i class="fab fa-instagram"></i></a>
	        </nav>
	        <div class="informacion-evento">
	          <div class="fecha-ciudad">
	            <p class="fecha"><i class="far fa-calendar-alt"></i>10-12 Dic</p>
	            <p class="ciudad"><i class="fas fa-map-marker-alt"></i>Guadalajara, MX</p>
	          </div><!--Información Evento-->
	          <h1 class="nombre-sitio">GDLWEBCAMP</h1>
	          <p class="eslogan">La mejor conferencia de <span>Diseño Web</span></p>          
	        </div><!--Informacion evento-->
	      </div><!--Contenedor Header-->
	    </div> <!--Hero-->   
	  </header>


	  <div class="barra">
	      <div class="flex-barra contenedor">
	        <div class="logo-movil">
	            <div class="logo">
	            	<a href="index.php">
		            	<img src="img/logo.svg" alt="GDLWEBCAMP">
		            </a>
	            </div>
	            <div class="menu-movil">
	              <span></span>
	              <span></span>
	              <span></span>
	            </div>
	           </div>  
	          <nav class="navegacion-principal">
	              <a href="conferencias.php">Conferencias</a>
	              <a href="calendario.php">Calendario</a>
	              <a href="invitados.php">Invitados</a>
	              <a href="registro.php">Reservaciones</a>
	          </nav>   
	      </div><!--Navegación Principal-->
	  </div><!--barra-->
