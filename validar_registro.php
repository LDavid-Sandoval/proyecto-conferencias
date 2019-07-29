<?php ?>


<?php include_once 'includes/templates/header.php'; ?>
<section class="seccion contenedor">
	  	<h2>Resumen de Registro</h2>
	  	<?php 
	  		if (isset($_GET['exitoso'])) {
	  			if ($_GET['exitoso'] == "1"){
	  				echo "<h3>Registro Exitoso</h3>";
	  			}
	  		} 
	  	?>
</section>
<?php include_once 'includes/templates/footer.php'; ?>