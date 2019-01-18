<?php
	
	$pagina = 'el-equipo';
	$proyecto = 'twowinds';
	$activoEB = true;
	
	$headTitulo[$pagina]='El Equipo | Two Winds | Urquiza';
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
  					<h1>El desarrollador</h1>
  					<h2 class="txtBold">Desarrollamos <br>proyectos de vida</h2>
  					<p>Nullam venenatis tristique leo, vitae finibus leo aliquam a. Integer egestas quam eget diam dignissim tempus. Vivamus ut porta arcu, aliquam convallis tortor. Praesent rutrum pellentesque lobortis. In vitae ligula sit amet nibh aliquet maximus. Fusce interdum dictum enim, vel vehicula augue ultricies eu. Integer vulputate mauris quis volutpat sollicitudin. Pellentesque aliquet felis ex, ac accumsan libero tristique a. Aliquam scelerisque, urna et rutrum porttitor, lectus neque rutrum est, sed consequat libero augue a ligula.</p>
  					<span><a href="" title="Visitar web" target="_blank" class="link">Visitar web</a></span>
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