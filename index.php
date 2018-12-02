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
  						<span class="logo"><img src="images/twowinds-logo.png" alt="Two Winds" title="Two Winds"></span>
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
  					<p><strong>El desarrollo y la transformación que buscabas están más cerca tuyo de lo que creías, pronto vas a poder disfrutar eso que tanto amás de Villa Urquiza en una experiencia barrial mejorada, enriquecida por el confort y los atributos de un complejo residencial moderno, seguro, funcional y excelentemente ubicado.</strong></p>
  					<h4><a href="" title="El proyecto" class="link">El proyecto</a></h4>
  					<h5><a href="" title="Ver video" class="video videoLink">Ver video<i class="fas fa-play-circle"></i></a></h5>
  				</article>
  			</div>
 		</section>
 		
 		<section class="galeriaArea">
 			<div class="container-fluid">
 				<article>
 					<ul>
 						<li class="sliderLeft">
 							<h2>Mi lugar en el mundo</h2>
 							<p>Este no es sólo un desarrollo inmobiliario, es un proyecto ideado especialmente para realzar el valor de las cosas que más apreciás: tu ciudad, pero más que nada tu barrio, tu edificio, pero más bien tu espacio, tu departamento, pero principalmente ese sitio al que llamás Mi Lugar en el Mundo.</p>
 							<a href="" title="Unidades" class="link">Unidades</a>
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
 					<div class="boxOverImage">
 						<h2>Preparate para experimentar la comodidad en su estado más completo</h2>
 						<a href="" title="Unidades" class="link">Unidades</a>
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
 							<h2>Un barrio único</h2>
 							<p>Villa Urquiza en una experiencia barrial insuperable. Su atmósfera cálida y relajada se enriquece con múltiples espacios verdes, una variada oferta gastronómica, educativa y comercial, y accesos rápidos a todos los medios de transporte. </p>
 							<a href="" title="El barrio" class="link">El barrio</a>
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

