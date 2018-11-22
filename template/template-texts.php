<?php
	if(isset($textGray[$pagina])){
		$textGrayContent = '
		<section class="textGray">
 			<div class="container-fluid">
  				<article>
  					'.$textGray[$pagina].'
  				</article>
  			</div>
 		</section>
		';
	}
?>

<?php
	if(isset($textImageArea['left'][$pagina])){
		$textImageLeftContent = '
		<section class="textImageArea imageBgLeft bgColor boxElProyecto">
 			<div class="container-fluid">
 				<div class="row">
  					<article class="col-12 col-md-6">';
  		if(isset($textImageArea['left'][$pagina]['imagenes']['youtube'])){
			$textImageLeftContent .= '<a href="#video1" title="'.$textImageArea['left'][$pagina]['imagenes']['titulo'].'" class="showVideo"><span class="playVideo"></span></a>';
		}
  		$textImageLeftContent .= '</article>
  					<article class="col-12 col-md-6">
  						<h2>'.$textImageArea['left'][$pagina]['titulo'].'</h2>
  						<p>'.$textImageArea['left'][$pagina]['parrafo'].'</p>
  						<a href="'.$textImageArea['left'][$pagina]['verMasLink'].'" title="'.$textImageArea['left'][$pagina]['verMasTitulo'].'">'.$textImageArea['left'][$pagina]['verMasTitulo'].' ></a>
  					</article>
 				</div>
  			</div>
 		</section>
		';
	}
?>
<?php
	if(isset($textImageArea['right'][$pagina])){
		$textImageRightContent ='
		<section class="textImageArea imageBgRight bgGray boxElBarrio">
 			<div class="container-fluid">
 				<div class="row">
   				<article class="col-12 col-md-6">
  						<h2>'.$textImageArea['right'][$pagina]['titulo'].'</h2>
  						<p>'.$textImageArea['right'][$pagina]['parrafo'].'</p>
  						<a href="'.$textImageArea['right'][$pagina]['verMasLink'].'" title="Ver más sobre '.$textImageArea['right'][$pagina]['verMasTitulo'].'">'.$textImageArea['right'][$pagina]['verMasTitulo'].' ></a>
  					</article>
 					<article class="col-12 col-md-6">
  					</article>
 				</div>
  			</div>
 		</section>
		';
	}
?>
<?php
	if(isset($textDosTresImageArea['left'][$pagina])){
		$textDosTresImageLeftContent = '
		<section class="text2_3ImageArea imageBgRight bgGray boxDosBarrio">
 			<div class="container-fluid">
 				<div class="row">
  					<article class="col-12 col-md-4">
  					</article>
  					<article class="col-12 col-md-8">
  						<p>'.$textDosTresImageArea['left'][$pagina]['parrafo'].'</p>';
  		if(isset($textDosTresImageArea['left'][$pagina]['verMasLink'])){
  			$textDosTresImageLeftContent .= '<a href="'.$textDosTresImageArea['left'][$pagina]['verMasLink'].'" title="'.$textDosTresImageArea['left'][$pagina]['verMasTitulo'].'">'.$textDosTresImageArea['left'][$pagina]['verMasTitulo'].' ></a>';
  		}
  		$textDosTresImageLeftContent .= '</article>
 				</div>
  			</div>
 		</section>
		';
	}
?>
<?php
	if(isset($textDosTresImageArea['right'][$pagina])){
		$textDosTresImageRightContent = '
		<section class="text2_3ImageArea imageBgLeft bgGray boxUnBarrio">
 			<div class="container-fluid">
 				<div class="row">
  					<article class="col-12 col-md-8">
  						<p>'.$textDosTresImageArea['right'][$pagina]['parrafo'].'</p>';
  		if(isset($textDosTresImageArea['right'][$pagina]['verMasLink'])){
  			$textDosTresImageRightContent .= '<a href="'.$textDosTresImageArea['right'][$pagina]['verMasLink'].'" title="'.$textDosTresImageArea['right'][$pagina]['verMasTitulo'].'">'.$textDosTresImageArea['left'][$pagina]['verMasTitulo'].' ></a>';
  		}
  		$textDosTresImageRightContent .= '</article>
  					<article class="col-12 col-md-4">
  					</article>
 				</div>
  			</div>
 		</section>
		';
	}
?>
<?php
	if(isset($caracteristicasArea[$pagina])){
		
		$caracteristicaContent = '
		<section class="textArea boxCaracteristicas">
 			<div class="container-fluid">
 				<div class="row">
 					<article class="col-12 col-md-6">
 						'.$caracteristicasArea[$pagina]['texto'].'
 					</article>';

  			$caracteristicaContent .= '<article class="col-12 col-md-6">
  						<h3>'.$caracteristicasArea[$pagina]['titulo'].'</h3>
  						<ul class="row">';
		$cant = sizeof($caracteristicasArea[$pagina]['caracteristicas']);
		for($a = 0; $a < $cant; $a++){
			$caracteristicaContent .= '<li>_'.$caracteristicasArea[$pagina]['caracteristicas'][$a].'</li>';
		}
 		$caracteristicaContent .= '</ul>
  					</article>
 				</div>
 				
  			</div>
 		</section>	
		';
	}
?>

<?php
	if(isset($textGray2[$pagina])){
		$textGray2Content = '
		<section class="textGray">
 			<div class="container-fluid">
  				<article>
  					'.$textGray2[$pagina].'
  				</article>
  			</div>
 		</section>
		';
	}
?>

<?php
	if(isset($elequipo[$pagina])){
		$elequipoContent = '<section class="elequipoArea">
			<div class="container-fluid">
				<ul class="row">';

		$cant = sizeof($elequipo[$pagina]);
		for($a = 0; $a < $cant; $a++){

			$elequipoContent .= '<li class="col-12 col-md-4 col'.($a + 1).'">
											<h2>'.$elequipo[$pagina][$a]['titulo'].'</h2>
											<span class="imgArea">
												<img src="../images/equipo/'.$elequipo[$pagina][$a]['logo'].'" alt="">
											</span>
											<div>'.$elequipo[$pagina][$a]['texto'].'</div>';
			$elequipoContent .= '</li>';
		}

		$elequipoContent .= '</ul>

 			</div>
 		</section>
		';
	}
?>