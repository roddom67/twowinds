<?php
	
	$pagina = 'el-barrio';
	$proyecto = 'twowinds';
	$activoEB = true;
	
	$headTitulo[$pagina]='El Barrio | Two Winds | Urquiza';
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
  				<article class="textoDestacado">
  					<h1>El Barrio</h1>
  					<h2 class="txtBold">El corazón de Villa Urquiza</h2>
  					<p>Two Winds Urquiza, por supuesto, está ubicado en el palpitante centro de Villa Urquiza, un lugar especial en donde se conjuga lo más tradicional de la zona con elementos y facilidades de tinte más moderno y cosmopolita. </p>
  				</article>
 			</div>
 		</section>
 		
		<section class="textGray backPaua">
 			<div class="container-fluid">
 				<article class="galeria-el-barrio">
  					<ul>
  						<li class="image1">
  							<span class="spanImg">
  								<img src="images/barrio/imagen_barrio_1.jpg" alt="1" title="">
  							</span>
  						</li>
  						<li class="image2">
  							<span class="spanImg">
  								<img src="images/barrio/imagen_barrio_2.jpg" alt="2" title="">
  							</span>
  						</li>
  						<li class="image3">
  							<span class="spanImg">
  								<img src="images/barrio/imagen_barrio_3.jpg" alt="3" title="">
  							</span>
  						</li>
  						<li class="image4">
  							<span class="spanImg">
  								<img src="images/barrio/imagen_barrio_4.jpg" alt="4" title="">
  							</span>
  						</li>
  						<li class="image5">
  							<span class="spanImg">
  								<img src="images/barrio/imagen_barrio_5.jpg" alt="5" title="">
  							</span>
  						</li>
  						<li class="image6">
  							<span class="spanImg">
  								<img src="images/barrio/imagen_barrio_6.jpg" alt="6" title="">
  							</span>
  						</li>
  						<li class="image7">
  							<span class="spanImg">
  								<img src="images/barrio/imagen_barrio_7.jpg" alt="7" title="">
  							</span>
  						</li>
  						<li class="image8">
  							<span class="spanImg">
  								<img src="images/barrio/imagen_barrio_8.jpg" alt="8" title="">
  							</span>
  						</li>
  						<li class="texto1">
  							<h3>Villa Urquiza</h3>
  							<p>Two Winds Urquiza se eleva sobre la Av. Triunvirato, a un paso de las avenidas Congreso, Crisólogo Larralde y Galván. Esta cercanía permite a sus residentes acceder rápidamente a todos los puntos de la Ciudad. La zona también proporciona múltiples medios de transporte público como la Línea B de subterráneos y el Ferrocarril Mitre.</p>
  							<p>Poblada de espacios verdes y arboladas calles, Villa Urquiza se posiciona como un excelente lugar para gozar de la naturaleza. También, el barrio cuenta con diferentes opciones comerciales, educativas y gastronómicas.</p>
  						</li>
  						<li class="image9">
  							<span class="spanImg">
  								<img src="images/barrio/imagen_barrio_9.jpg" alt="10" title="">
  							</span>
  						</li>
  						<li class="image10">
  							<span class="spanImg">
  								<img src="images/barrio/imagen_barrio_10.jpg" alt="11" title="">
  							</span>
  						</li>
  						<li class="image11">
  							<span class="spanImg">
  								<img src="images/barrio/imagen_barrio_11.jpg" alt="12" title="">
  							</span>
  						</li>
  						<li class="image12">
  							<span class="spanImg">
  								<img src="images/barrio/imagen_barrio_12.jpg" alt="13" title="">
  							</span>
  						</li>
  					</ul>
  				</article>
  			</div>
 		</section>
 		
 		<section class="textGray">
 			<div class="">
 				<article>
 					<h2 class="txtBold">Lugares de interés</h2>
 					<div>
 						<span class="spanImg">
  							<img src="images/barrio/mapa.jpg" alt="" title="">
  						</span>
 					</div>
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