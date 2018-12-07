<?php
	
	$pagina = 'amenities';
	$proyecto = 'twowinds';
	$activoEB = true;
	
	$headTitulo[$pagina]='Amenities | Two Winds | Urquiza';
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
  					<h1>Amenities</h1>
  					<h2 class="txtBold">El confort deseado</h2>
  					<p>TwoWinds Urquiza ofrece toda clase de <br>comodidades pensadas especialmente <br>para hacer más sencillas las experiencias <br>del mundo moderno.</p>
  				</article>
 			</div>
 		</section>
 		
 		<section class="textGray">
 			<div class="container-fluid">
 				<article>
 					<ul class="listAmenities">
 						<li>
 							<span class="spanImg">
 								<img src="" alt="Pileta" title="Pileta">
 							</span>
 							<h3>Pileta</h3>
 							<p>Para disfrutar del aire libre en los días de calor, el edificio cuenta con una pis cina descubierta en la última planta.</p>
 						</li>
 						<li>
 							<span class="spanImg">
 								<img src="" alt="Pileta" title="Pileta">
 							</span>
 							<h3>Pileta</h3>
 							<p>Para disfrutar del aire libre en los días de calor, el edificio cuenta con una pis cina descubierta en la última planta.</p>
 						</li>
 						<li>
 							<span class="spanImg">
 								<img src="" alt="Pileta" title="Pileta">
 							</span>
 							<h3>Pileta</h3>
 							<p>Para disfrutar del aire libre en los días de calor, el edificio cuenta con una pis cina descubierta en la última planta.</p>
 						</li>
 						<li>
 							<span class="spanImg">
 								<img src="" alt="Pileta" title="Pileta">
 							</span>
 							<h3>Pileta</h3>
 							<p>Para disfrutar del aire libre en los días de calor, el edificio cuenta con una pis cina descubierta en la última planta.</p>
 						</li>
 						<li>
 							<span class="spanImg">
 								<img src="" alt="Pileta" title="Pileta">
 							</span>
 							<h3>Pileta</h3>
 							<p>Para disfrutar del aire libre en los días de calor, el edificio cuenta con una pis cina descubierta en la última planta.</p>
 						</li>
 						<li>
 							<span class="spanImg">
 								<img src="" alt="Pileta" title="Pileta">
 							</span>
 							<h3>Pileta</h3>
 							<p>Para disfrutar del aire libre en los días de calor, el edificio cuenta con una pis cina descubierta en la última planta.</p>
 						</li>
 					</ul>
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
 							<h3>Servicios</h3>
 							<p>Preparate<br>para experimentar<br>la comodidad en su<br>estado más completo. </p>
 						</li>
 						<li>
 							<ul class="listadoPunto"> 
 								<li>Vigilancia 24hs</li>
 								<li>Alarma</li>
 								<li>Cochera cubierta</li>
 								<li>Pet friendly</li>
 								<li>Solarium</li>
 								<li>Hall principal doble altura</li>
 								<li>Instalacion de servicios subterranea</li>
 								<li>Dos ascensores de alta velocidad</li> 							
 							</ul>
 						</li>
 					</ul>
 				</article>
 			</div>
 		</section>
 		
 		<section class="galeriaArea backPaua backPauaTop">
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
 			include('template/template-descargar-brochure.php');
 		?>

	</main>
<?php
	include("footer.php");

	include('template/template-modal.php');
?>

</body>
</html>