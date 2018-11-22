<?php

	$pagina = 'index';
	$proyecto = 'twowinds';
	$activoH = true;
	
	$headTitulo[$pagina]='Two Winds | Urquiza';
	$headDesc[$pagina]='Two Winds - Urquiza. Mi lugar en el mundo. 54 11 5354.8000';
	$headKeywords[$pagina] = 'barrancas, barrio, luminosos, ambientees, edificio, moderno, ciudad, departamentos, inmobiliaria, arquitecto, desarrollo, gestión, inmobiliarios, gerenciamiento,edificios, vivienda, oficinas, concursos, construcción, planificación, obras, dirección, urquiza, two winds';
	
	include("head.php");
?>
	<body class="<?php echo $proyecto.' '.$pagina; if($pagina != 'index'){ echo ' internal' ;} if(isset($navGris)){ echo ' navGris' ;} ?>">
	<main>
		<section class="headerImage">
  			<div class="container-fluid">
  				<?php
					include("nav.php")
				?>
  				<article class="mainBox">
  					<div>
  						<span><img src="images/twowinds-logo.png" alt="Two Winds" title="Two Winds"></span>
   					<h1>URQUIZA</h1>
  						<p>Mi lugar en el mundo</p>
 					</div>
  				</article>
 			</div>
 			<a href="" title="" class="goDown">goDown</a>
 		</section>
	
		<section class="textGray">
 			<div class="container-fluid">
  				<article class="textoDestacado">
  					<p>Lo diseñamos pensando en darte la clase de espacio que necesitás. Calix Barrancas te acerca a todo lo que te importa, para hacerte la vida más fácil, más cómoda.</p>
  					<h4><a href="" title="El proyecto">El proyecto</a></h4>
  				</article>
  			</div>
 		</section>
 		
 		<section class="galeriaArea">
 			<div class="container-fluid">
 				<article>
 					<ul>
 						<li class="sliderLeft">
 							<h2>Lorem ipsum dolor sit amet lorem ipsum</h2>
 							<p>Lo diseñamos pensando en darte la clase de espacio que necesitás. Calix Barrancas te acerca a todo lo que te importa, para hacerte la vida más fácil, más cómoda.</p>
 							<a href="" title="Unidades">Unidades</a>
 						</li>
 			
 						<li class="slider">
 							<ul class="sliderArea">
 								<li>
 									<img src="images/unidades/galeria1.jpg" alt="Unidades" title="Unidades">
 								</li>
 								<li>
 									<img src="images/unidades/galeria2.jpg" alt="Unidades" title="Unidades">
 								</li>
 								<li>
 									<img src="images/unidades/galeria1.jpg" alt="Unidades" title="Unidades">
 								</li>
 								<li>
 									<img src="images/unidades/galeria2.jpg" alt="Unidades" title="Unidades">
 								</li>
 							</ul>
 						</li>
 					</ul>
 				</article>
 			</div>
 		</section>
 		
 		<section class="imageWithBoxWhite">
 			<div class="">
 				<article>
 					<span class="spanImg">
 						<img src="images/amenities/amenities.jpg" alt"Amenities" title="Amenities">
 					</span>
 					<div class="boxWhite">
 						<h2>Lo diseñamos pensando en darte la clase de espacio que necesitás. Calix Barrancas </h2>
 						<a href="" title="Unidades">Unidades</a>
 					</div>
 				</article>
 			</div>
 		</section>
 		
 		<section class="galeriaArea">
 			<div class="container-fluid">
 				<article>
 					<ul>
 						<li class="slider">
 							<ul class="sliderArea">
 								<li>
 									<img src="images/unidades/galeria1.jpg" alt="Unidades">
 								</li>
 								<li>
 									<img src="images/unidades/galeria2.jpg" alt="Unidades">
 								</li>
 								<li>
 									<img src="images/unidades/galeria1.jpg" alt="Unidades">
 								</li>
 								<li>
 									<img src="images/unidades/galeria2.jpg" alt="Unidades">
 								</li>
 							</ul>
 						</li>
 						
 						<li class="sliderRight">
 							<h2>Lorem ipsum dolor sit amet lorem ipsum</h2>
 							<p>Lo diseñamos pensando en darte la clase de espacio que necesitás. Calix Barrancas te acerca a todo lo que te importa, para hacerte la vida más fácil, más cómoda.</p>
 							<a href="" title="Unidades">Unidades</a>
 						</li>
 					</ul>
 				</article>
 			</div>
 		</section>
 		
 		<?php
 			include('template/template-descargar-brochure.php');
 		?>

	</main>
<?php 
	include("footer.php");

	include('template/template-modal.php');
?>

</body>
</html>

