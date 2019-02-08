<?php

	include('data/data-el-barrio.php');	

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
  					<h1><?php echo $textoDestacado['titulo'] ?></h1>
  					<h2 class="txtBold"><?php echo $textoDestacado['subtitulo'] ?></h2>
  					<p><?php echo $textoDestacado['texto'] ?></p>
  				</article>
 			</div>
 		</section>
 		
		<section class="textGray ">
 			<div class="container-fluid">
 				<article class="galeria-el-barrio">
 					<?php 
						if(isset($galeria)){
					?>
					<ul class="sliderArea">
						<?php 
						for( $a = 0; $a < sizeof($galeria)  ; $a++){
						?>
						<?php 
							switch( $galeria[$a]['tipo'] ) {
								case 'img':
						?>
							
							<li class="image<?php echo $galeria[$a]['data']['ubicacion'] ?>">
								<span class="spanImg">
									<img src="<?php echo $galeria[$a]['data']['imagen'] ?>" alt="<?php echo $galeria[$a]['data']['titulo'] ?>" title="<?php echo $galeria[$a]['data']['titulo'] ?>">
								</span>
							</li>
						<?php
								break;
							case 'txt':
						?>
  							<li class="texto<?php echo $galeria[$a]['data']['ubicacion'] ?>">
  								<h3><?php echo $galeria[$a]['data']['titulo'] ?></h3>
  							<?php 
  								if(isset($galeria[$a]['data']['texto'])){
  									for($b=0;$b< sizeof($galeria[$a]['data']['texto']); $b++){
  							?>
  								<p><?php echo $galeria[$a]['data']['texto'][$b]; ?></p>
  									
  							<?php
  									}
  								}
  							?>
						<?php 
								break;
							}
						} ?>
					</ul>
					<?php } ?>
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