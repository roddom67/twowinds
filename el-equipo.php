<?php
	
	include('data/data-el-equipo.php');	

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
   				<h1><?php echo $textoDestacado['titulo']; ?></h1>
   				<span class="spanImg">
   					<img src="<?php echo $textoDestacado['logo']['imagen']; ?>" alt="<?php echo $textoDestacado['logo']['titulo']; ?>" title="<?php echo $textoDestacado['logo']['titulo']; ?>" >
   				</span>
  					<h2 class="txtBold"><?php echo $textoDestacado['subtitulo']; ?></h2>
  					<p><?php echo $textoDestacado['texto']; ?></p>
  					<span><a href="<?php echo $textoDestacado['link']['href']; ?>" title="<?php echo $textoDestacado['link']['title']; ?>" target="_blank" class="link"><?php echo $textoDestacado['link']['title']; ?></a></span>
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