<?php

	include('data/data-el-proyecto.php');	
	
	//$navGris = true;
	include("head.php");
	
?>
	<body class="<?php echo $proyecto.' '.$pagina; if($pagina != 'index'){ echo ' internal' ;} if(isset($navGris)){ echo ' navGris' ;} ?>">
	<main>
		<section class="header headerImage internas">
  			<div class="container-fluid">
  				<?php
					include("nav.php")
				?>
  				<article class="mainBox">
  					<div>
  						<h1 class="hidden"><?php echo $textoDestacado['titulo']; ?></h1>
  						<h2 class="txtBold"><?php echo $textoDestacado['subtitulo']; ?></h2>
  						<a href="<?php echo $textoDestacado['video']['href']; ?>" title="<?php echo $textoDestacado['video']['titulo']; ?>" class="video videoLink"><?php echo $textoDestacado['video']['titulo']; ?><i class="fas fa-play-circle"></i></a>
 						<p><?php echo $textoDestacado['texto']; ?></p>
 					</div>
  				</article>
 			</div>
 		</section>
 		
 		
	
		<section class="textGray frenteEdificio backPaua">
 			<div class="container-fluid">
  				<article class="edificioArea">
  					<ul>
  						<li class="col1">
  						<?php
  							if(isset($edificio['col1'])){
  							
  						?>
  							<ul>
  							<?php 
  								for($a =0;$a < sizeof($edificio['col1']); $a++){
  							?>
  								<li>
  									<small><?php echo $edificio['col1'][$a]['small']; ?></small>
  									<p><?php echo $edificio['col1'][$a]['p']; ?></p>
  								</li>
  							<?php
  								}
  							?>
  							</ul>
  						<?php
  							}
  						?>
  						</li>
  						<li class="col2">
  							<span class="spanImg">
  								<img src="images/elProyecto/edificio.png" alt="Edificio" title="Edificio">
  							</span>
  						</li>
  						<li class="col3">
   						<?php
  							if(isset($edificio['col3'])){
  							
  						?>
  							<ul>
  							<?php 
  								for($a =0;$a < sizeof($edificio['col3']); $a++){
  							?>
  								<li>
  									<small><?php echo $edificio['col3'][$a]['small']; ?></small>
  									<p><?php echo $edificio['col3'][$a]['p']; ?></p>
  								</li>
  							<?php
  								}
  							?>
  							</ul>
  						<?php
  							}
  						?>
  						</li>
  					</ul>
  					<h2 class="txtBold"><?php echo $edificio['titulo']; ?></h2>
  				</article>
  			</div>
 		</section>
 		
 		
 		<section class="galeriaArea backPaua backPauaTop">
 			<div class="container-fluid">
 				<article>
 					<ul>
 						<li class="slider">
 							<?php
								if(isset($galeria1)){
							?>
							<ul class="sliderArea">
							<?php
									for($a=0;$a<sizeof($galeria1);$a++){
							?>
 								<li>
 									<img src="<?php echo $galeria1[$a]['imagen'] ?>" alt="<?php echo $galeria1[$a]['titulo'] ?>" title="<?php echo $galeria1[$a]['titulo'] ?>">
 								</li>
							<?php
									}
							?>
							</ul>
							<?php
								}
							?>
 						</li>
 					</ul>
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