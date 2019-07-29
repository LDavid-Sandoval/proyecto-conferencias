
	  <footer class="site-footer">
	    <div class="contenido-footer contenedor">
	      <div class="informacion-footer">
	        <p class="titulo-footer">Sobre <span>GDLWECAMP</span></p>
	        <p>
	          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi inventore iste nesciunt modi non culpa voluptate explicabo, ipsum dolorem suscipit natus quidem ex vel eum asperiores ipsam facilis recusandae. Ut?
	        </p>
	      </div><!--Informacion Footer--> 
	      <div class="informacion-footer">
	        <p class="titulo-footer">últimos <span>tweets</span></p>
	        <div>
	          <p>
	            Lorem ipsum dolor sit amet, <span>consectetur</span> adipisicing elit. Sequi inventore iste nesciunt modi non culpa voluptate <span>suscipit</span> explicabo, ipsum dolorem.
	          </p>
	        </div>
	        <div>
	          <p>
	            Lorem ipsum dolor sit amet, <span>consectetur</span> adipisicing elit. Sequi inventore iste nesciunt modi non culpa voluptate <span>suscipit</span> explicabo, ipsum dolorem.
	          </p>
	        </div>
	        <div>
	          <p>
	            Lorem ipsum dolor sit amet, <span>consectetur</span> adipisicing elit. Sequi inventore iste nesciunt modi non culpa voluptate <span>suscipit</span> explicabo, ipsum dolorem.
	          </p>
	        </div>

	      </div><!--Informacion Footer--> 
	      <div class="informacion-footer">
	        <p class="titulo-footer">Redes <span>sociales</span></p>
	        <nav class="redes-sociales aling-right">
	          <a href=""><i class="fab fa-facebook-f"></i></a>
	          <a href=""><i class="fab fa-twitter"></i></a>
	          <a href=""><i class="fab fa-pinterest-p"></i></a>
	          <a href=""><i class="fab fa-youtube"></i></a>
	          <a href=""><i class="fab fa-instagram"></i></a>
	        </nav>
	      </div><!--Informacion Footer-->    
	    </div><!--Contenido Footer--> 
	    <div class="derechos-reservados">
	      <p>Todos los Derechos reservados GDLWECAMP 2016</p>  
	    </div>
	  </footer>
		<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
	  	<script src="js/vendor/modernizr-3.7.1.min.js"></script>
	 	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	  	<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
	  	<script src="js/plugins.js"></script>
	  	<script src="js/jquery.lettering.js"></script>
	  	<script src="js/jquery.animateNumber.js"></script>
	  	<script src="js/jquery.countdown.min.js"></script>	  	
	  	
	  	<?php  	
			$archivo = basename($_SERVER['PHP_SELF']);
			$pagina = str_replace(".php", "", $archivo);
			if ($pagina == 'invitados' || $pagina == 'index') {
				echo '<script src="js/jquery.colorbox-min.js"></script>';
			}else if ($pagina == 'conferencias') {
				echo '<script src="js/lightbox.js"></script>';
			}
		?>
	  	<script src="js/jquery.waypoints.min.js"></script>		
	  	<script src="js/main.js"></script>



	  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
	  	<script>
	    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
	    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
	  	</script>
	  	<script src="https://www.google-analytics.com/analytics.js" async="" defer=""></script>
	  	<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us20.list-manage.com","uuid":"788da31af6d5ba999260c4454","lid":"abf14140c9","uniqueMethods":true}) })</script>
	</body>
</html>