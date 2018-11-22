<?php

	$pagina = 'el-proyecto';
	$proyecto = 'twowinds';
	$activoEP = true;

	$headTitulo[$pagina]='Two Winds | Urquiza';
	$headDesc[$pagina]='Two Winds - Urquiza. Mi lugar en el mundo. 54 11 5354.8000';
	$headKeywords[$pagina] = 'barrancas, barrio, luminosos, ambientees, edificio, moderno, ciudad, departamentos, inmobiliaria, arquitecto, desarrollo, gestión, inmobiliarios, gerenciamiento,edificios, vivienda, oficinas, concursos, construcción, planificación, obras, dirección, urquiza, two winds';

	//$navGris = true;
	include("head.php");
	
?>
	<body class="<?php echo $proyecto.' '.$pagina; if($pagina != 'index'){ echo ' internal' ;} if(isset($navGris)){ echo ' navGris' ;} ?>">
	<main>
		<section class="headerImage internas">
  			<div class="container-fluid">
  				<?php
					include("nav.php")
				?>
  				<article class="mainBox">
  					<div>
   					<h1>El Proyecto</h1>
  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum maximus arcu vel lectus accumsan, ut cursus diam volutpat. In id ipsum posuere, dapibus sem sed, rhoncus elit. Ut vitae ullamcorper nibh.</p>
  						<a href="" title="Ver video" class="videoLink">Ver video <i class="fas fa-play-circle"></i></a>
 					</div>
  				</article>
 			</div>
 		</section>
 		
 		
	
		<section class="textGray">
 			<div class="container-fluid">
  				<article class="">
  					<h2>El proyecto</h2>
  					<p>Lo diseñamos pensando en darte la clase de espacio que necesitás. Calix Barrancas te acerca a todo lo que te importa, para hacerte la vida más fácil, más cómoda.</p>
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
 		
 		<?php
 			include('template/template-nav-sections.php');
 		?>

 		
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