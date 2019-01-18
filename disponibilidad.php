<?php
	
	$pagina = 'disponibilidad';
	$proyecto = 'twowinds';
	$activoEB = true;
	
	$headTitulo[$pagina]='Disponibilidad | Two Winds | Urquiza';
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
  					<h1>Disponibilidad</h1>
  					<h2 class="txtBold">El confort deseado</h2>
  					<p>TwoWinds Urquiza ofrece toda clase de <br>comodidades pensadas especialmente para <br>hacer más sencillas las experiencias del <br>mundo moderno.</p>
  				</article>
 			</div>
 		</section>
 		
		
 		<section class="disponibilidadArea">
 			<div class="container-fluid">
 				<article>
 					<?php
 						include('data-departamentos.php');
 						include('template/template-disponibilidad.php');
 					?>
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