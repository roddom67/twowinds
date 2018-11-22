<?php
	if(isset($textHeaderForm[$pagina])){
		$textHeaderFormContent = '
		<section class="textArea">
 			<div class="container-fluid">
 				<div class="row">
					<article class="contactTextArea col-sm-12 col-md-6">
						<p>'.$textHeaderForm[$pagina]['parrafo'].'</p>
						<h4>'.$textHeaderForm[$pagina]['titulo'].'</h4>
						<p><a href="mailto:'.$textHeaderForm[$pagina]['email'].'" title="Email de '.$textHeaderForm[$pagina]['titulo'].'">'.$textHeaderForm[$pagina]['email'].'</a></p>
						<p>'.$textHeaderForm[$pagina]['telefono'].'</p>
					</article>
 					<article class="contactFormArea col-sm-12">
 						<form method="post" action="send_contacto.php" name="commentForm" id="commentForm">
      					<fieldset>
								<ul class="row">
									<li class="col col-md-8">
 										<ul class="row">
											<li class="col-12 col-md-6">
												<label for="name">Nombre</label>
												<input type="text" name="name" minlength="4" required>
											</li>
											<li class="col-12 col-md-6">
												<label for="surname">Apellido</label>
												<input type="text" name="surname" required>
											</li>
											<li class="col-12 col-md-6">
												<label for="email">Email</label>
												<input type="text" name="email" required>
											</li>
											<li class="col-12 col-md-6">
												<label for="phone">Teléfono</label>
												<input type="text" name="phone" required>
											</li>
											<!--<li class="col-12 col-md-6">
												<label for="depto">Tipo de departamento</label>
												<select type="text" name="depto" required>
													<option value="">Seleccione un departamento</option>';

				// $cant = sizeof($tipoDepto[$pagina]);
				// for($t=0;$t<$cant;$t++){
					// $textHeaderFormContent .= '<option value="'.$tipoDepto[$pagina][$t].'">'.$tipoDepto[$pagina][$t].'</option>';
				// }
				$textHeaderFormContent .= '</select>
											</li> -->
											<!-- li class="col-12 col-md-6">
												<label for="price">Rango de precio</label>
												<select type="text" name="price" required>
													<option value="">Seleccione un rango</option>
													<option value="1">mayor a us$ 100.000</option>
													<option value="2">mayor a us$200.000</option>
												</select>
											</li -->
											<li class="col-12 col-md-6">
												<label for="medios">¿Cómo se enteró de Calix?</label>
												<select type="text" name="medios" required>
													<option value="">Seleccione un medio</option>';
				$cant = sizeof($medio[$pagina]);
				for($t=0;$t<$cant;$t++){
					$textHeaderFormContent .= '<option value="'.$medio[$pagina][$t].'">'.$medio[$pagina][$t].'</option>';
				}
				$textHeaderFormContent .= '</select>
											</li>
											<li class="col-12 col-md-12">
												<label for="message">Enter Message:</label> <br>
												<textarea name="message" required></textarea>
											</li>
										</ul>
									</li>
									<li class="col-12 col-md-8 buttonArea">
										<input type="hidden" name="proyecto" value="'.$proyectoNombre.'">
										<input type="submit" name="submit" value="Enviar">
									</li>
								</ul>
      					</fieldset>
						</form>
                </article>
            </div>
        </div>
        ';
      $textHeaderFormContent .= '</section>';
  	}
  	if(isset($_GET['sent'])){
		if(($_GET['sent']== 'ok')){
  			$textHeaderFormContent .= '<div class="modal modalContact">
				<div class="envio-ok boxArea">
					<p>Su mensaje ha sido enviado exitosamente</p>
					<p>Muchas gracias</p>
					<a href="index.php" title="Volver al inicio" class="logo"><span>Calix Néñez</span></a>
				</div>
  			</div>';
		}
		if(($_GET['sent']== 'bad')){
  			$textHeaderFormContent .= '<div class="modal modalContact">
				<div class="envio-bad boxArea">
					<p>No se pudo procesar su envío.</p>
					<p>Inténtelo más tarde.</p>
					<p>Disculpe las molestias ocasionadas.</p>
					
					
					<a href="index.php" title="Volver al inicio" class="logo"><span>Calix Néñez</span></a>
				</div>
  			</div>';
		}
	}

?>