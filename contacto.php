<?php
	
	$pagina = 'contacto';
	$proyecto = 'twowinds';
	$activoEB = true;
	
	$headTitulo[$pagina]='Contacto | Two Winds | Urquiza';
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
  					<h1>Contacto</h1>
  					<h2 class="txtBold">In hac habitasse platea dictumst. Quisque lorem arcu, laoreet vel bibendum sed, vulputate non eros.</h2>
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
								<li class="col-12">
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
											<label for="message">Enter Message:</label> <br>
											<textarea name="message"></textarea>
										</li>
									</ul>
								</li>
								<li class="col-12 col-md-8 buttonArea">
									<input type="submit" name="submit" value="Enviar">
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
 							<h4>Información</h4>
 							<p>Sales CenterHolberg 1770T. (+5411) 5354.8000Buenos Aires, Argentina</p>
 						</li>
 						<li>
 						mapa
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