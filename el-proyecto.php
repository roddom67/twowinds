<?php

	$pagina = 'el-proyecto';
	$proyecto = 'twowinds';
	$activoEP = true;

	$headTitulo[$pagina]='El Proyecto | Two Winds | Urquiza';
	$headDesc[$pagina]='Two Winds - Urquiza. Mi lugar en el mundo. 54 11 5354.8000';
	$headKeywords[$pagina] = 'barrancas, barrio, luminosos, ambientees, edificio, moderno, ciudad, departamentos, inmobiliaria, arquitecto, desarrollo, gestión, inmobiliarios, gerenciamiento,edificios, vivienda, oficinas, concursos, construcción, planificación, obras, dirección, urquiza, two winds';

	//$navGris = true;
	include("head.php");
	
?>
	<body class="<?php echo $proyecto.' '.$pagina; if($pagina != 'index'){ echo ' internal' ;} if(isset($navGris)){ echo ' navGris' ;} ?>">
	<main>
		<section class="header headerImage internas">
  			<div class="container-fluid">
  				<?php
					include("nav.php")
				?>
  				<article class="mainBox">
  					<div>
   					<h1 class="hidden">El Proyecto</h1>
   					<h2 class="txtBold">Two Winds te eleva</h2>
  						<a href="" title="Ver video" class="video videoLink">Ver video<i class="fas fa-play-circle"></i></a>
  						<p>Sus 8.336 m2 de confort y estética se encuentran repartidos a lo alto en una moderna estructura de 13 pisos. </p>
 					</div>
  				</article>
 			</div>
 		</section>
 		
 		
	
		<section class="textGray frenteEdificio backPaua">
 			<div class="container-fluid">
  				<article class="">
  					<div>
  						IMAGEN EDIFICIO
  					</div>
  					<h2 class="txtBold">Una experiencia de altura</h2>
  				</article>
  			</div>
 		</section>
 		
 		
 		<section class="galeriaArea backPaua">
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