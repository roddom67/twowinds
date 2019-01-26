<?php
	
	include('data/data-contacto.php');	

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
  					<h2 class="txtBold"><?php echo $textoDestacado['subtitulo']; ?></h2>
  				</article>
 			</div>
 		</section>
 		
 		<section class="contactoArea textArea">
 			<div class="container-fluid">
  			<?php
  			if(isset($_GET['ok'])){
  			?>
  				<article class="contactGraciasArea">
  						<p>Gracias por contactarse con nosotros.</p>
  				</article>
  			<?php
  			}else{
  			?>
  					
      		<article class="contactFormArea">
      			<form method="post" name="contactoForm" action="form-to-email.php">
      				<fieldset>
							<ul class="row">
								<li class="col-3 col-xs-0 col-sm-3">
								</li>
								<li class="col-6">
									<ul>
										<li>
											<label for="name">Nombre</label>
											<input type="text" name="name">
											<span id="myform_Name_errorloc"></span>
										</li>
										<li>
											<label for="email">Email</label>
											<input type="text" name="email">
											<span id="myform_Name_errorloc"></span>
										</li>
										<li>
											<label for="phone">Teléfono</label>
											<input type="text" name="phone">
											<span id="myform_Name_errorloc"></span>
										</li>
										<li>
											<label for="message">Mensaje</label>
											<input type="text" name="message">
										</li>
										<li>
											<button type="submit" name="submit">Enviar</button>
										</li>
									</ul>
								</li>
								<li class="col-3 col-xs-0 col-sm-3">
								</li>
							</ul>
      				</fieldset>
					</form>
				</article>
			<?php
  			}
  			?>
  			</div>
 		</section>
 		
 		<section class="informacionArea">
 			<div class="container-fluid">
 				<article>
 					<ul>
 						<li>
 							<div>
 								<h4><?php echo $informacion['titulo'] ?></h4>
 								<p><?php echo $informacion['texto'] ?></p>
 							</div>
 						</li>
 						<li>
 							<img src="<?php echo $informacion['mapa'] ?>" alt="">
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