<?php
	
	include('data/data-disponibilidad.php');	

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
   				<h1><?php echo $textoDestacado['titulo'] ?></h1>
  					<h2 class="txtBold"><?php echo $textoDestacado['subtitulo'] ?></h2>
  					<p><?php echo $textoDestacado['texto'] ?></p>
  				</article>
 			</div>
 		</section>
 		
		
 		<section class="disponibilidadArea">
 			<div class="container-fluid">
 				<article>
 					<?php
 						include('data/data-departamentos.php');
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