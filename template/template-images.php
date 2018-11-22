<?php
	if(isset($threeImagesArea[$pagina])){
		$threeImagesContent = '
		<section class="threeImagesArea">
 			<div class="">
 				<ul class="row">';

		$cant = sizeof($threeImagesArea[$pagina]['imagenes']);
		for($a = 0; $a < $cant; $a++){

 			$threeImagesContent .= '<li class="col-12 col-md-4">';
 			
 			if(isset($threeImagesArea[$pagina]['imagenes'][$a]['video'])){
 				$threeImagesContent .= '<a href="#video'.$a.'" title="'.$threeImagesArea[$pagina]['imagenes'][$a]['titulo'].'" class="showVideo"><span class="playVideo"></span>';
 			}
 			
 			if(isset($threeImagesArea[$pagina]['imagenes'][$a]['youtube'])){
 				$threeImagesContent .= '<a href="#video'.$a.'" title="'.$threeImagesArea[$pagina]['imagenes'][$a]['titulo'].'" class="showVideo"><span class="playVideo"></span>';
 			}
 			
 			$threeImagesContent .= '<span class="imgArea">
 							<img src="images/'.$threeImagesArea[$pagina]['imagenes'][$a]['imagen'].'" alt="'.$threeImagesArea[$pagina]['imagenes'][$a]['titulo'].'">
 						</span>';
 			if( isset($threeImagesArea[$pagina]['imagenes'][$a]['video']) || isset($threeImagesArea[$pagina]['imagenes'][$a]['youtube']) ){
 				$threeImagesContent .= '</a>';	
 			}
 			$threeImagesContent .= '</li>';
		}

 		$threeImagesContent .= '</ul>
 			</div>
 		</section>
		';
	}
?>
<?php
	if(isset($oneImagesArea[$pagina])){
		$oneImagesContent = '
		<section class="oneImagesArea">
 			<div class="">
 				<ul class="row">';
		$oneImagesContent .= '<li class="col-12">';
 			
		$oneImagesContent .= '<span class="imgArea">
						<img src="images/'.$oneImagesArea[$pagina]['imagen'].'" alt="'.$oneImagesArea[$pagina]['titulo'].'">
					</span>';
		$oneImagesContent .= '</li>';

 		$oneImagesContent .= '</ul>
 			</div>
 		</section>
		';
	}
?>
<?php
	if(isset($imagenMobile[$pagina])){
		$imagenMobileContent = '
		<section class="imagenMobileArea">
 			<div class="">
 				<ul class="row">';
		$imagenMobileContent .= '<li class="col-12">';
 			
		$imagenMobileContent .= '<span class="imgArea">
						<img src="images/'.$imagenMobile[$pagina]['imagen'].'" alt="'.$imagenMobile[$pagina]['titulo'].'">
					</span>';
		$imagenMobileContent .= '</li>';

 		$imagenMobileContent .= '</ul>
 			</div>
 		</section>
		';
	}
?>
<?php
	if(isset($galeriaArea[$pagina])){
		$galeriaContent = '
		<section class="galeriaArea">
 			<div class="container-fluid">
 				<article class="slider">';
 		if(isset($galeriaArea[$pagina]['titulo'])){
 			$galeriaContent .= '<p>'.$galeriaArea[$pagina]['titulo'].'</p>';
 		}
 		$galeriaContent .= '<ul class="sliderArea">';

		$cant = sizeof($galeriaArea[$pagina]['imagenes']);
		for($a = 0; $a < $cant; $a++){
			if(isset($galeriaArea[$pagina]['imagenes'][$a]['360'])){
 				$galeriaContent .= '<li><div class="embed-container">
 							 <iframe width="960" height="540" src="';
				$galeriaContent .= $galeriaArea[$pagina]['imagenes'][$a]['360'].'" alt="'.$galeriaArea[$pagina]['imagenes'][$a]['titulo'].'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
 						</li>';
 			}

			if(isset($galeriaArea[$pagina]['imagenes'][$a]['imagen'])){
 				$galeriaContent .= '<li>
 							<img src="images/';
 				if(isset($galeriaArea[$pagina]['directorio'])){
 					$galeriaContent .= $galeriaArea[$pagina]['directorio'].'/';
 				}
				$galeriaContent .= $galeriaArea[$pagina]['imagenes'][$a]['imagen'].'" alt="'.$galeriaArea[$pagina]['imagenes'][$a]['titulo'].'">
 						</li>';
 			}
		}
 		$galeriaContent .= '	</ul>
 				</article>
 			</div>
 		</section> 
		';
	}
?>
<?php
	if(isset($textMapArea[$pagina])){
		$textMapContent = '
		<section class="textMapArea bgGray">
  			<div class="mapArea">
  				<iframe src="https://www.google.com/maps/d/embed?mid='.$textMapArea[$pagina]['coordenadas'].'&hl=es" width="100%" height="100%"></iframe>
  			</div>
			<div class="container-fluid">
 				<div class="row">
   				<article class="col-12 textos">
  						<h2>'.$textMapArea[$pagina]['titulo'].'</h2>';
  						
  		$cant = sizeof($textMapArea[$pagina]['listado']);
  		
  		$textMapContent .= '<ul class="row accordion">';
  		for($a = 0; $a < $cant; $a++){
  			$textMapContent .= '<li class="col-12 col-md-3">';
  			$textMapContent .= '<h4>'.$textMapArea[$pagina]['listado'][$a]['titulo'].'</h4>';
  			
  			$lug = sizeof($textMapArea[$pagina]['listado'][$a]['lugares']);
  			$textMapContent .= '<div><ul>';
  			for($l = 0; $l < $lug; $l++){
  				$textMapContent .= '<li>'.$textMapArea[$pagina]['listado'][$a]['lugares'][$l].'</li>';
  			}
  			
  			$textMapContent .= '</ul></div></li>';
  		}
  		$textMapContent .= '</ul>';			
  						
  		$textMapContent .= '';				
  		$textMapContent .= '</article>
 					</div>
  			</div>
 		</section>
		';
	}
?>
<?php
	if(isset($twoImagesMiddleTextArea[$pagina])){
		$twoImagesMiddleTextContent = '
		<section class="twoImagesMiddleTextArea">
 			<div class="">
 				<ul class="row">';

		$cant = sizeof($twoImagesMiddleTextArea[$pagina]['imagenes']);
		for($a = 0; $a < $cant; $a++){

 			$twoImagesMiddleTextContent .= '<li class="col-12 col-md-4">';
 			if(isset($twoImagesMiddleTextArea[$pagina]['imagenes'][$a]['text'])){
 				$twoImagesMiddleTextContent .= '<p>'.$twoImagesMiddleTextArea[$pagina]['imagenes'][$a]['text'].'</p>';
 			}else{
 				if(isset($twoImagesMiddleTextArea[$pagina]['imagenes'][$a]['video'])){
 					$twoImagesMiddleTextContent .= '<a href="#video'.$a.'" title="'.$twoImagesMiddleTextArea[$pagina]['imagenes'][$a]['titulo'].'" class="showVideo">';	
 				}
 			
 				$twoImagesMiddleTextContent .= '<span class="imgArea">
 								<img src="images/'.$twoImagesMiddleTextArea[$pagina]['imagenes'][$a]['imagen'].'" alt="'.$twoImagesMiddleTextArea[$pagina]['imagenes'][$a]['titulo'].'">
 							</span>';
 				if(isset($twoImagesMiddleTextArea[$pagina]['imagenes'][$a]['video'])){
 					$twoImagesMiddleTextContent .= '</a>';	
 				}
 			}
 			$twoImagesMiddleTextContent .= '</li>';
		}

 		$twoImagesMiddleTextContent .= '</ul>
 			</div>
 		</section>
		';
	}
?>
<?php
	if(isset($threeImagesArea_1[$pagina])){
		$threeImages1Content = '
		<section class="threeImagesArea">
 			<div class="">
 				<ul class="row">';

		$cant = sizeof($threeImagesArea_1[$pagina]['imagenes']);
		for($a = 0; $a < $cant; $a++){

 			$threeImages1Content .= '<li class="col-12 col-md-4">';
 			
 			if(isset($threeImagesArea_1[$pagina]['imagenes'][$a]['video'])){
 				$threeImages1Content .= '<a href="#video'.$a.'" title="'.$threeImagesArea_1[$pagina]['imagenes'][$a]['titulo'].'" class="showVideo"><span class="playVideo"></span>';	
 			}
 			
 			$threeImages1Content .= '<span class="imgArea">
 							<img src="images/'.$threeImagesArea_1[$pagina]['imagenes'][$a]['imagen'].'" alt="'.$threeImagesArea_1[$pagina]['imagenes'][$a]['titulo'].'">
 						</span>';
 			if(isset($threeImagesArea_1[$pagina]['imagenes'][$a]['video'])){
 				$threeImages1Content .= '</a>';	
 			}
 			$threeImages1Content .= '</li>';
		}

 		$threeImages1Content .= '</ul>
 			</div>
 		</section>
		';
	}
?>
<?php
	if(isset($threeImagesArea_2[$pagina])){
		$threeImages2Content = '
		<section class="threeImagesArea">
 			<div class="">
 				<ul class="row">';

		$cant = sizeof($threeImagesArea_2[$pagina]['imagenes']);
		for($a = 0; $a < $cant; $a++){

 			$threeImages2Content .= '<li class="col-12 col-md-4">';
 			
 			if(isset($threeImagesArea_2[$pagina]['imagenes'][$a]['video'])){
 				$threeImages2Content .= '<a href="#video'.$a.'" title="'.$threeImagesArea_2[$pagina]['imagenes'][$a]['titulo'].'" class="showVideo"><span class="playVideo"></span>';	
 			}
 			
 			$threeImages2Content .= '<span class="imgArea">
 							<img src="images/'.$threeImagesArea_2[$pagina]['imagenes'][$a]['imagen'].'" alt="'.$threeImagesArea_2[$pagina]['imagenes'][$a]['titulo'].'">
 						</span>';
 			if(isset($threeImagesArea_2[$pagina]['imagenes'][$a]['video'])){
 				$threeImages2Content .= '</a>';	
 			}
 			$threeImages2Content .= '</li>';
		}

 		$threeImages2Content .= '</ul>
 			</div>
 		</section>
		';
	}
?>