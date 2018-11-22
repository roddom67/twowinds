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
  				<article class="">
  					<h1>El Barrio</h1>
  					<h2 class="txtBold">El corazón de Villa Urquiza</h2>
  					<p>Lo diseñamos pensando en darte la clase de espacio que necesitás. Calix Barrancas te acerca a todo lo que te importa, para hacerte la vida más fácil, más cómoda.</p>
  				</article>
 			</div>
 		</section>
 		
		<section class="textGray backPaua">
 			<div class="container-fluid">
 				<article class="galeria-el-barrio">
  					<ul>
  						<li>
  							<span class="spanImg">
  								<img src="images/barrio/galeria1.jpg" alt="1" title="">
  							</span>
  						</li>
  						<li>
  							<span class="spanImg">
  								<img src="images/barrio/galeria1.jpg" alt="2" title="">
  							</span>
  						</li>
  						<li>
  							<span class="spanImg">
  								<img src="images/barrio/galeria1.jpg" alt="3" title="">
  							</span>
  						</li>
  						<li>
  							<span class="spanImg">
  								<img src="images/barrio/galeria1.jpg" alt="4" title="">
  							</span>
  						</li>
  						<li>
  							<span class="spanImg">
  								<img src="images/barrio/galeria1.jpg" alt="5" title="">
  							</span>
  						</li>
  						<li>
  							<span class="spanImg">
  								<img src="images/barrio/galeria1.jpg" alt="6" title="">
  							</span>
  						</li>
  						<li>
  							<span class="spanImg">
  								<img src="images/barrio/galeria1.jpg" alt="7" title="">
  							</span>
  						</li>
  						<li>
  							<span class="spanImg">
  								<img src="images/barrio/galeria1.jpg" alt="8" title="">
  							</span>
  						</li>
  						<li>
  							<h3>Villa Urquiza</h3>
  							<p>Two Winds Urquiza se eleva sobre la Av. Triunvirato, a un paso de las avenidas Congreso, Crisólogo Larralde y Galván. Esta cercanía permite a sus residentes acceder rápidamente a todos los puntos de la Ciudad. La zona también proporciona múltiples medios de transporte público como la Línea B de subterráneos y el Ferrocarril Mitre.</p>
  							<p>Poblada de espacios verdes y arboladas calles, Villa Urquiza se posiciona como un excelente lugar para gozar de la naturaleza. También, el barrio cuenta con diferentes opciones comerciales, educativas y gastronómicas.</p>
  						</li>
  						<li>
  							<span class="spanImg">
  								<img src="images/barrio/galeria1.jpg" alt="10" title="">
  							</span>
  						</li>
  						<li>
  							<span class="spanImg">
  								<img src="images/barrio/galeria1.jpg" alt="11" title="">
  							</span>
  						</li>
  						<li>
  							<span class="spanImg">
  								<img src="images/barrio/galeria1.jpg" alt="12" title="">
  							</span>
  						</li>
  						<li>
  							<span class="spanImg">
  								<img src="images/barrio/galeria1.jpg" alt="13" title="">
  							</span>
  						</li>
  					</ul>
  				</article>
  			</div>
 		</section>
 		
 		<section class="textGray">
 			<div class="container-fluid">
 				<article>
 					<h2 class="txtBold">Lugares de interés</h2>
 					<div>
 						Imagen MAPA
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