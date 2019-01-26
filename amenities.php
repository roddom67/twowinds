<?php
	
	include('data/data-amenities.php');	

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
 		
 		<section class="textGray">
 			<div class="container-fluid">
 				<article>
 					<?php
						if(isset($listaAmenities)){
					?>
					<ul class="listAmenities">
					<?php
							for($a=0;$a<sizeof($listaAmenities);$a++){
					?>
						<li>
							<span class="spanImg">
								<img src="<?php echo $listaAmenities[$a]['imagen'] ?>" alt="<?php echo $listaAmenities[$a]['titulo'] ?>" title="<?php echo $listaAmenities[$a]['titulo'] ?>">
							</span>
							<h3><?php echo $listaAmenities[$a]['titulo'] ?></h3>
							<p><?php echo $listaAmenities[$a]['texto'] ?></p>
						</li>
						
 					<?php
							}
					?>
					</ul>
					<?php
						}
					?>
 				</article>
 			</div>
 		</section>
 		
 		<section class="galeriaArea backPaua backPauaBottom">
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
 		<section class="serviciosArea backPaua">
 			<div class="container-fluid">
 				<article>
 					<ul>
 						<li>
 							<h3><?php echo $serviciosArea['titulo'] ?></h3>
 						</li>
 						<li>
 							<p><?php echo $serviciosArea['parrafo'] ?></p>
 						</li>
 						<li>
 							<?php
								if(isset($serviciosArea['listado'])){
							?>
							<ul class="listadoPunto">
							<?php
									for($a=0;$a<sizeof($serviciosArea['listado']);$a++){
							?>
 								<li><?php echo $serviciosArea['listado'][$a] ?></li>
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
 		
 		<section class="galeriaArea backPaua backPauaTop">
 			<div class="container-fluid">
 				<article>
 					<ul>
 						<li class="slider">
 							<?php
								if(isset($galeria2)){
							?>
							<ul class="sliderArea">
							<?php
									for($a=0;$a<sizeof($galeria2);$a++){
							?>
 								<li>
 									<img src="<?php echo $galeria2[$a]['imagen'] ?>" alt="<?php echo $galeria2[$a]['titulo'] ?>" title="<?php echo $galeria2[$a]['titulo'] ?>">
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
 			include('template/template-descargar-brochure.php');
 		?>

	</main>
<?php
	include("footer.php");

	include('template/template-modal.php');
?>

</body>
</html>