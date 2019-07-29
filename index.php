<?php include_once 'includes/templates/header.php'; ?>

	  <section class="seccion contenedor">
	    <h2>La mejor conferencia de diseño web</h2>
	    <p class="description">
	      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus aspernatur recusandae eveniet unde perferendis ad soluta consectetur voluptate, facere esse dolorum laudantium aliquam temporibus accusantium voluptas ut alias nulla quae.
	    </p>
	  </section><!--Seccion-->


	  <section class="programa">
	    <div class="contenedor-video">
	      <video autoplay="" loop="" poster="img/bg-talleres-jpg">
	        <source src="video/video.mp4" type="video/mp4">
	        <source src="video/video.webm" type="video/webm"> 
	        <source src="video/video.ogv" type="video/ogv">   
	      </video>
	    </div><!--Contenedor Video-->

	    <div class="contenido-programa">
	      <div class="contenedor">
	        <div class="programa-evento clearfix">
	          <h2>Programa del Evento</h2>
	          <?php 
		          try{
		  			require_once('includes/funciones/bd_conexion.php');
		  			$sql = " SELECT * FROM `categoria_evento` ";
		  			$resultado = $conn->query($sql);
		  		} catch(\exception $e){
		  			echo $e->getMessage();
		  		}  
		  		?>
	          <nav class="menu-programa">
	          	<?php while( $cat = $resultado->fetch_array(MYSQLI_ASSOC)){?>
	          		<?php $categoria_evento = $cat['cat_evento']; ?>
	            	<a href="#<?php echo strtolower($categoria_evento);?>">
	            	<i class="<?php echo $cat['icono'];?>"></i><?php echo $categoria_evento; ?></a> 
	            <?php  }?>             
	          </nav>
			  <?php
			  	try{
			  		require_once('includes/funciones/bd_conexion.php');
			  		$sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
			  		$sql .= " FROM eventos ";
			  		$sql .= " INNER JOIN categoria_evento ";
			  		$sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
			  		$sql .= " INNER JOIN invitados ";
			  		$sql .= " ON eventos.id_inv = invitados.invitado_id ";
			  		$sql .= " AND eventos.id_cat_evento = 3 ";
			  		$sql .= " ORDER BY `evento_id` LIMIT 2; ";
			  		$sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
			  		$sql .= " FROM eventos ";
			  		$sql .= " INNER JOIN categoria_evento ";
			  		$sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
			  		$sql .= " INNER JOIN invitados ";
			  		$sql .= " ON eventos.id_inv = invitados.invitado_id ";  
			  		$sql .= " AND eventos.id_cat_evento = 2 ";
			  		$sql .= " ORDER BY `evento_id` LIMIT 2; ";
			  		$sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
			  		$sql .= " FROM eventos ";
			  		$sql .= " INNER JOIN categoria_evento ";
			  		$sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
			  		$sql .= " INNER JOIN invitados ";
			  		$sql .= " ON eventos.id_inv = invitados.invitado_id ";
			  		$sql .= " AND eventos.id_cat_evento = 1 ";
			  		$sql .= " ORDER BY `evento_id` LIMIT 2; ";
			  	} catch(\exception $e){
			  		echo $e->getMessage();
				} 
				?>

				<?php $conn->multi_query($sql); ?>
				<?php  
					do {
						$resultado = $conn->store_result();
						$row = $resultado->fetch_all(MYSQLI_ASSOC);?>
						<?php $i = 0; ?>
						<?php  foreach($row as $evento){?>
						<?php if ($i % 2 == 0) {?>
			          		<div id="<?php echo strtolower($evento['cat_evento']); ?>" class="info-curso ocultar">
						<?php } ?>
								<div class="detalle-evento">
									<h3><?php echo $evento['nombre_evento']; ?></h3>
									<p><i class="far fa-clock"></i><?php echo $evento['hora_evento']; ?></p>
									<p><i class="far fa-calendar-alt"></i><?php echo $evento['fecha_evento']; ?></p>
									<p><i class="fa fa-user"></i><?php echo $evento['nombre_invitado'] . " " .$evento['apellido_invitado']; ?></p>
								</div>
						<?php if ($i % 2 == 1) :?>
							<a href="calendario.php" class="boton"> Ver Todos</a>
							</div><!--#talleres-->
						<?php endif; ?>
			      		<?php $i++; ?>
			      		<?php }; ?>
			      		

					<?php } while ($conn->more_results() && $conn->next_result());?>
	        </div><!--Programa Evento--> 
	      </div><!--contenedor--> 
	    </div><!--contenido Programa--> 
	  </section><!--Programa--> 
	  

	<?php include_once 'includes/templates/invitados.php'; ?>


	  <div class="contador parallax">
	    <div class="contenedor">
	      <div class="resumen-evento">
	        <div class="contador-num">
	          <p class="numero">0</p>
	          <p class="texto">Invitados</p>
	        </div><!--Contador--> 
	        <div class="contador-num">
	          <p class="numero">0</p>
	          <p class="texto">Talleres</p>
	        </div><!--Contador--> 
	        <div class="contador-num">
	          <p class="numero">0</p>
	          <p class="texto">Días</p>
	        </div><!--Contador--> 
	        <div class="contador-num">
	          <p class="numero">0</p>
	          <p class="texto">Conferencias</p>
	        </div><!--Contador--> 
	      </div><!--resumen evento--> 
	    </div><!--Contenedor--> 
	  </div><!--Parallax--> 


	  <section class="precios seccion">
	    <h2>Precios</h2>
	    <div class="contenedor">
	      <div class="lista-precios">
	        <div class="tabla-precio">
	          <h3>Pase por 1 día</h3>
	          <p class="numero">$ 30</p>
	          <div>
	            <div class="li">
	              <p><i class="fas fa-check"></i>Bocadillos Gratis</p>
	              <p><i class="fas fa-check"></i>Todas las conferencias</p>
	              <p><i class="fas fa-check"></i>Todos los talleres</p>
	            </div><!--Lista--> 
	            <a href="" class="boton hollow">Comprar</a>
	          </div><!--Contenedor lista--> 
	        </div><!--contenedor Precio--> 
	        <div class="tabla-precio">
	          <h3>Todos los días</h3>
	          <p class="numero">$ 50</p>
	          <div>
	            <div class="li">
	              <p><i class="fas fa-check"></i>Bocadillos Gratis</p>
	              <p><i class="fas fa-check"></i>Todas las conferencias</p>
	              <p><i class="fas fa-check"></i>Todos los talleres</p>
	            </div><!--Lista--> 
	            <a href="" class="boton">Comprar</a>
	          </div><!--Contenedor lista--> 
	        </div><!--contenedor Precio--> 
	        <div class="tabla-precio">
	          <h3>Pase por 2 días</h3>
	          <p class="numero">$ 45</p>
	          <div>
	            <div class="li">
	              <p><i class="fas fa-check"></i>Bocadillos Gratis</p>
	              <p><i class="fas fa-check"></i>Todas las conferencias</p>
	              <p><i class="fas fa-check"></i>Todos los talleres</p>
	            </div><!--Lista-->
	            <a href="" class="boton hollow">Comprar</a>
	          </div><!--Contenedor lista--> 
	        </div><!--contenedor Precio--> 
	      </div><!--contenedores precios-->
	    </div><!--Contenedor-->
	  </section>

	  <div id="mapa" class="mapa">
	    
	  </div><!--Mapa-->
	  <section class="seccion">
	    <h2>Testimoniales</h2>
	    <div class="testimoniales contenedor">
	      <div class="testimonial">
	        <blockquote>
	          <p>
	            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, placeat, fuga. Veritatis, quisquam iure voluptatum. 
	          </p>
	          <footer class="info-testimonial">
	            <img src="img/testimonial.jpg" alt="img testimonal">
	            <div class="autor">
	              <cite>David Sandoval</cite>
	              <span>Diseñador WEB en TooLAb</span>
	            </div>
	          </footer>
	        </blockquote>
	      </div><!--Testimonnial-->
	      <div class="testimonial">
	        <blockquote>
	          <p>
	            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, placeat, fuga. Veritatis, quisquam iure voluptatum. 
	          </p>
	          <footer class="info-testimonial">
	            <img src="img/testimonial.jpg" alt="img testimonal">
	            <div class="autor">
	            <cite>David Sandoval</cite>
	            <span>Diseñador WEB en TooLAb</span>
	            </div>
	          </footer>
	        </blockquote>
	      </div><!--Testimonnial-->
	      <div class="testimonial">
	         <blockquote>
	          <p>
	            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, placeat, fuga. Veritatis, quisquam iure voluptatum.
	          </p>
	          <footer class="info-testimonial">
	            <img src="img/testimonial.jpg" alt="img testimonal">
	            <div class="autor">
	            <cite>David Sandoval</cite>
	            <span>Diseñador WEB en TooLAb</span>
	            </div>
	          </footer>
	        </blockquote>
	      </div><!--Testimonnial-->
	    </div> <!--testimoniales-->
	  </section><!--seccion-->
	  
	  <div class="newsletter parallax">
	    <div class="contenido contenedor">
	      <div>
	        <p>registrate al newsletter: </p>
	        <h3 class="nombre-sitio">GDLWEBCAMP</h3>  
	      </div>
	      <div>
	        <a href="#mc_embed_signup" class="boton_newsletter boton transparente">Registro</a>
	      </div>
	    </div><!--contenido-->
	  </div><!--newsletter-->

	  <div class="contenedor-1">
	    <h2>Faltan</h2>
	     <div class="resumen-fecha">
	       <div class="contador-fecha">
	         <p id="dias" class="numero"></p>
	         <p class="texto-negro">Días</p>
	       </div><!--Contador fecha--> 
	       <div class="contador-fecha">
	         <p id="horas" class="numero"></p>
	         <p class="texto-negro">horas</p>
	       </div><!--Contador fecha--> 
	       <div class="contador-fecha">
	         <p id="minutos" class="numero"></p>
	         <p class="texto-negro">minutos</p>
	       </div><!--Contador fecha--> 
	       <div class="contador-fecha">
	         <p id="segundos" class="numero"></p>
	         <p class="texto-negro">segundos</p>
	       </div><!--Contador fecha--> 
	     </div><!--resumen Fecha--> 
	   </div><!--Contenedor--> 

<?php include_once 'includes/templates/footer.php'; ?>
	<div style="display: none;">	
<section class="seccion contenedor">
		<!-- Begin Mailchimp Signup Form -->
	<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
		/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
		   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
	</style>
	

		<div id="mc_embed_signup">
			<form action="https://outlook.us20.list-manage.com/subscribe/post?u=788da31af6d5ba999260c4454&amp;id=abf14140c9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    <div id="mc_embed_signup_scroll">
					<h2>Suscribéte</h2>
					<div class="indicates-required">
						<span class="asterisk">*</span> Campos obligatorios
					</div>
					<div class="mc-field-group">
						<label for="mce-FNAME">Nombre(S)<span class="asterisk">*</span> </label>
						<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
					</div>
					<div class="mc-field-group">
						<label for="mce-LNAME">Primer Apellido </label>
						<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
					</div>
					<div class="mc-field-group">
						<label for="mce-EMAIL"> Correo electronico  <span class="asterisk">*</span></label>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
					</div>
					
					<div class="mc-field-group size1of2">
						<label for="mce-BIRTHDAY-month">BCumpleaños </label>
						<div class="datefield">
							<span class="subfield monthfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="BIRTHDAY[month]" id="mce-BIRTHDAY-month"></span> / 
							<span class="subfield dayfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="BIRTHDAY[day]" id="mce-BIRTHDAY-day"></span> 
							<span class="small-meta nowrap">( mm / dd )</span>
						</div>
					</div>	
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true">
						<input type="text" name="b_788da31af6d5ba999260c4454_abf14140c9" tabindex="-1" value="">
					</div>
					 <div class="clear">
					 	<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
					 </div>
			    </div>
			</form>
		</div>

	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
	<!--End mc_embed_signup-->	


</section>	</div>