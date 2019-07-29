	  	<h2>Nuestros Invitados</h2>
	  	<?php
	  		try{
	  			require_once('includes/funciones/bd_conexion.php');
	  			$sql = " SELECT * FROM `invitados` ";
	  			$resultado = $conn->query($sql);
	  		} catch(\exception $e){
	  			echo $e->getMessage();
	  		} 
	  	?>

		<section class="invitados contenedor seccion">
			<ul class="lista-invitados">
			<?php while($invitados = $resultado->fetch_assoc() ) {?>

			      <li>
			        <div class="invitado">
			        	<a class="invitado-info" href="#invitado<?php echo $invitados['invitado_id']; ?>">
			        		<img src="img/<?php echo $invitados['url_imagen']?>" alt="invitado-1">
			          		<p><?php echo $invitados['nombre_invitado'] ." " .$invitados['apellido_invitado'] ?></p>
			        	</a>

			        </div><!--Inivitado1--> 
			      </li>
			      <div style="display: none;">
			      	<div class="invitado-info" id="invitado<?php echo $invitados['invitado_id'];?>">
			      		<h2><?php echo $invitados['nombre_invitado'] ." " .$invitados['apellido_invitado'] ?></h2>
			      		<img src="img/<?php echo $invitados['url_imagen']?>" alt="invitado-1">
			      		<p><?php echo $invitados['descripcion_invitado']; ?></p>			      		
			      	</div>
			      	
			      </div>
	  		<?php } ?>
	  		</ul>  
		</section><!--Sección Inivitados--> 
	  	<?php 
	  		$conn->close(); 
	  	?>
