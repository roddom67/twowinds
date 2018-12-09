<?php
	
	$pagina = 'unidades';
	$proyecto = 'twowinds';
	$activoEB = true;
	
	$headTitulo[$pagina]='Unidades | Two Winds | Urquiza';
	$headDesc[$pagina]='Two Winds - Urquiza. Mi lugar en el mundo. 54 11 5354.8000';
	$headKeywords[$pagina] = 'barrancas, barrio, luminosos, ambientees, edificio, moderno, ciudad, departamentos, inmobiliaria, arquitecto, desarrollo, gestión, inmobiliarios, gerenciamiento,edificios, vivienda, oficinas, concursos, construcción, planificación, obras, dirección, urquiza, two winds';

	$navGris = true;
	include("head.php");
	
?>
	<body class="<?php echo $proyecto.' '.$pagina; if($pagina != 'index'){ echo ' internal' ;} if(isset($navGris)){ echo ' navGris' ;} ?>">
	<main>
		<section class="header">
  			<div class="container-fluid">
  				<?php
					include("nav.php")
				?>
  				<article class="">
  					<h1>Unidades</h1>
  					<h2 class="txtBold">Espacios a tu medida</h2>
  					<p>La arquitectura moderna y versátil de Two Winds le brinda la flexibilidad para adaptarse a diferentes necesidades de espacio. El edificio propone amplias y luminosas unidades de uno, dos, tres ambientes y dúplex.</p>
  				</article>
 			</div>
 		</section>
 		
		
 		<section class="galeriaArea backPaua backPauaBottom">
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
 		<section class="serviciosArea backPaua">
 			<div class="container-fluid">
 				<article>
 					<ul>
 						<li>
 							<h3>Tu espacio personal</h3>
 						</li>
 						<li>
 							<p>Moderno y versátil el interior de Two Winds fue especialmente ideado y construido para coincidir con una amplia gama de necesidades de espacio. </p>
 						</li>
 						<li>
 							<h4>90 unidades funcionales,<br>conformadas por:</h4>
 							<ul class="listadoPunto"> 
 								<li>24 monoambientes.</li>
 								<li>38 departamentos de 2 Ambientes.</li>
 								<li>25 departamentos de 3 Ambientes.</li>
 								<li>4 dúplex.</li>
 							</ul>
 						</li>
 					</ul>
 				</article>
 			</div>
 		</section>
 		
 		<section class="detallesArea backPaua">
 			<div class="container-fluid">
 				<article>
 					<h2>Detalles</h2>
 					<p>La diferencia está en los detalles. En TwoWinds las terminaciones son de la más alta calidad</p>
 				</article>
 			</div>
 		</section>
 		
 		<section class="galeriaArea backPaua backPauaTop pdBotton">
 			<div class="container-fluid">
 				<article>
 					<ul>
 						<li class="slider">
 							<ul class="sliderArea">
 								<li>
 									<img src="images/unidades/unidades1.png" alt="Unidades" title="Unidades">
 								</li>
 								<li>
 									<img src="images/unidades/unidades1.png" alt="Unidades" title="Unidades">
 								</li>
 								<li>
 									<img src="images/unidades/unidades1.png" alt="Unidades" title="Unidades">
 								</li>
 								<li>
 									<img src="images/unidades/unidades1.png" alt="Unidades" title="Unidades">
 								</li>
 							</ul>
 						</li>
 					</ul>
 				</article>
 			</div>
 		</section>
 		
 		<?php
 			include('template/template-disponibilidad-banner.php');
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