<?php

	include('data/data-index.php');
	
	include("head.php");
?>
	<body class="<?php echo $proyecto.' '.$pagina; if($pagina != 'index'){ echo ' internal' ;} if(isset($navGris)){ echo ' navGris' ;} ?>">
	<main>
		<section class="headerImage fixedTop">
  			<div class="container-fluid">
  				<?php
					include("nav.php")
				?>
  				<article class="mainBox">
  					<div>
  						<span class="logo"><img src="images/twowinds-logo.png" alt="Two Winds" title="Two Winds"></span>
   					<h1><?php echo $mainBox['titulo']; ?></h1>
  						<p><?php echo $mainBox['subtitulo']; ?></p>
 					</div>
  				</article>
 			</div>
 			<a href="" title="" class="goDown">goDown</a>
 		</section>
 		
 		<div class="parallax pagina" data-movimiento="10">
			<section class="textGray">
 				<div class="container-fluid">
  					<article class="textoDestacado">
  						<p><strong><?php echo $textoDestacado['texto'] ?></strong></p>
  						<h4><a href="<?php echo $textoDestacado['h4']['href'] ?>" title="<?php echo $textoDestacado['h4']['titulo'] ?>" class="link"><?php echo $textoDestacado['h4']['titulo'] ?></a></h4>
  						<h5><a href="#video1" title="<?php echo $textoDestacado['verVideo']['titulo'] ?>" class="video videoLink showVideo"><?php echo $textoDestacado['verVideo']['titulo'] ?><i class="fas fa-play-circle"></i></a></h5>
  					</article>
  				</div>
 			</section>
 		
 			<section class="galeriaArea">
 				<div class="container-fluid">
 					<article>
 						<ul>
 							<li class="sliderLeft">
 								<h2><?php echo $sliderLeft['titulo'] ?></h2>
 								<p><?php echo $sliderLeft['texto'] ?></p>
 								<a href="<?php echo $sliderLeft['link']['href'] ?>" title="<?php echo $sliderLeft['link']['titulo'] ?>" class="link"><?php echo $sliderLeft['link']['titulo'] ?></a>
 							</li>
 			
 							<li class="slider">
 								<?php 
									if(isset($sliderLeft['slider'])){
								?>
 								<ul class="sliderArea">
 									<?php 
 										for( $a = 0; $a < sizeof($sliderLeft['slider'])  ; $a++){
 									?>
 									<li>
 										<img src="<?php echo $sliderLeft['slider'][$a]['imagen'] ?>" alt="<?php echo $sliderLeft['slider'][$a]['titulo'] ?>" title="<?php echo $sliderLeft['slider'][$a]['titulo'] ?>">
 									</li>
 									<?php } ?>
 								</ul>
 								<?php } ?>
 							</li>
 						</ul>
 					</article>
 				</div>
 			</section>
 		
 			<section class="imageWithBoxWhite">
 				<div class="">
 					<article>
 						<span class="spanImg">
 							<img src="<?php echo $amenities['imagen'] ?>" alt"<?php echo $amenities['tituloImg'] ?>" title="<?php echo $amenities['tituloImg'] ?>">
 						</span>
 						<div class="boxOverImage">
 							<h2><?php echo $amenities['h2'] ?></h2>
 							<a href="<?php echo $amenities['link']['href'] ?>" title="<?php echo $amenities['link']['titulo'] ?>" class="link"><?php echo $amenities['link']['titulo'] ?></a>
 						</div>
 					</article>
 				</div>
 			</section>
 		
 			<section class="galeriaArea">
 				<div class="container-fluid">
 					<article>
 						<ul>
 							<li class="slider">
 								<?php 
									if(isset($sliderRight['slider'])){
								?>
 								<ul class="sliderArea">
 									<?php 
 										for( $a = 0; $a < sizeof($sliderRight['slider'])  ; $a++){
 									?>
 									<li>
 										<img src="<?php echo $sliderRight['slider'][$a]['imagen'] ?>" alt="<?php echo $sliderRight['slider'][$a]['titulo'] ?>" title="<?php echo $sliderRight['slider'][$a]['titulo'] ?>">
 									</li>
 									<?php } ?>
 								</ul>
 								<?php } ?>

 							</li>
 						
 							<li class="sliderRight">
 								<h2><?php echo $sliderRight['titulo'] ?></h2>
 								<p><?php echo $sliderRight['texto'] ?></p>
 								<a href="<?php echo $sliderRight['link']['href'] ?>" title="<?php echo $sliderRight['link']['titulo'] ?>" class="link"><?php echo $sliderRight['link']['titulo'] ?></a>
 							</li>
 						</ul>
 					</article>
 				</div>
 			</section>
 		
 			<?php
 				include('template/template-descargar-brochure.php');
				include("footer.php");
 			?>

 		</div>
	

	</main>
<?php 
//	include("footer.php");

	if(isset($textoDestacado['verVideo']['youtube'])){
		$youtube = $textoDestacado['verVideo']['youtube'];
		include('template/template-modal.php');
	}
?>

</body>
</html>

