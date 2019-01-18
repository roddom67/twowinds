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
 								<img src="images/amenities/piscina.png" alt="Pileta" title="Pileta">
 							</span>
 							<h3>Piscina</h3>
 							<p>Para disfrutar del aire libre en los días de  <br>calor, el edificio cuenta con una piscina <br>descubierta en la última planta.</p>
 						</li>
 						<li>
 							<span class="spanImg">
 								<img src="images/amenities/parrilla.png" alt="Parrilla" title="Parrilla">
 							</span>
 							<h3>Parrilla</h3>
 							<p>En la terraza del edificio <br>se pueden encontrar parrillas <br>listas para usar a disposición <br>de todos los residentes.</p>
 						</li>
 						<li>
 							<span class="spanImg">
 								<img src="images/amenities/gym.png" alt="Gym" title="Gym">
 							</span>
 							<h3>Gym</h3>
 							<p>Totalmente equipado, <br>el gimnasio de Two Winds Urquiza es un <br>espacio ideal para mantenerse en forma. </p>
 						</li>
 						<li>
 							<span class="spanImg">
 								<img src="images/amenities/sum.png" alt="Sum" title="Sum">
 							</span>
 							<h3>Sum</h3>
 							<p>El edificio cuenta con un salón de usos <br>múltiples que puede ser reservado para <br>distintos eventos.</p>
 						</li>
 						<li>
 							<span class="spanImg">
 								<img src="images/amenities/sum.png" alt="Laundry" title="Laundry">
 							</span>
 							<h3>Laundry</h3>
 							<p>Disponible las 24 horas, <br>el Laundry de Two Winds Urquiza tiene <br>todo lo necesario para brindar un servicio <br>de gran valor. </p>
 						</li>
 						<li>
 							<span class="spanImg">
 								<img src="images/amenities/cocheras.png" alt="Cocheras" title="Cocheras">
 							</span>
 							<h3>Cocheras</h3>
 							<p>Two Winds Urquiza tiene <br>105 espacios dedicados de estacionamiento <br>ubicados en la planta baja y los tres <br>subsuelos del edificio. </p>
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
 						</li>
 						<li>
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