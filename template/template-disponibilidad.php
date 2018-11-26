
<?php
	if(isset($disponibilidad[$pagina])){

		$disponibilidadContent = '
			<section class="disponibilidadArea">
 				<div class="container-fluid">
 					<div class="row">
  						<article class="col-12 col-md-4 plantaArea">
  							<ul class="pisos">';

  		$cant = sizeof($disponibilidad[$pagina]);

  		for($c=$cant; $c >= 0 ;$c--){
  			$piso = isset($disponibilidad[$pagina][$c]['titulo']);
  			$planos = isset($disponibilidad[$pagina][$c]['planos']);
  			$show = '';
  			if(isset($disponibilidad[$pagina][$c]['show']) && $disponibilidad[$pagina][$c]['show']){ 
  				$show = $disponibilidad[$pagina][$c]['show'];
  			}
  			if($planos){
  				$disponibilidadContent .= '<li>
  					<a href="#planta_'.$c.'" title="'.$piso.'"';
  				if( $show != ''){
  					$disponibilidadContent .= ' class="activo piso'.$c.'"';
  				}else{
  					$disponibilidadContent .= ' class="piso'.$c.'"';
  				}
  				$disponibilidadContent .= '><span>'.$piso.'</span></a></li>';
  			}else{
  				$disponibilidadContent .= '<li class="desktop"><span>'.$piso.'</span></li>';
  			}
  		}
  		
  		$disponibilidadContent .= '</ul>
  								<h4>Seleccioná el piso</h4>
  						</article>
  						<article class="col-12 col-md-8 plantas">';
 		
  		$h = 0;				
  		for($a=0;$a < $cant; $a++){
  		
  			$show = '';
  			$hidden = ' hidden';	
  			if(isset($disponibilidad[$pagina][$a]['show'])){ 
  				$show = $disponibilidad[$pagina][$a]['show'];
  			}
 			if($show!=''){
				$hidden = '';
			}
			
			$disponibilidadContent .= '<div class="accordion'.$hidden.'" id="planta_'.$a.'">';
			$h++;

  			$dept = sizeof($disponibilidad[$pagina][$a]['deptos']);
  			
  			if(isset($disponibilidad[$pagina][$a]['planos'])){
  				$planos = $disponibilidad[$pagina][$a]['planos'];
  			}
  			
  			for($d = 0; $d<$dept;$d++){
  			
  				if(isset($disponibilidad[$pagina][$a]['deptos'][$d][0])){
  					$titulo = $disponibilidad[$pagina][$a]['deptos'][$d][0];
  				}
  				if(isset($disponibilidad[$pagina][$a]['deptos'][$d][1])){
  					$descripcion 	= $disponibilidad[$pagina][$a]['deptos'][$d][1];
  				}
  				if(isset($disponibilidad[$pagina][$a]['deptos'][$d][2])){ 
  					$pdf	= $disponibilidad[$pagina][$a]['deptos'][$d][2];
  				}
  				if(isset($disponibilidad[$pagina][$a]['deptos'][$d][3])){ 
  					$superficie = $disponibilidad[$pagina][$a]['deptos'][$d][3]; 
  				}
  				if(isset($disponibilidad[$pagina][$a]['deptos'][$d][4])){ 
  					$terraza = $disponibilidad[$pagina][$a]['deptos'][$d][4]; 
  				}
  				if(isset($disponibilidad[$pagina][$a]['deptos'][$d][5])){
  					$patio = $disponibilidad[$pagina][$a]['deptos'][$d][5]; 
  				}
  				if(isset($disponibilidad[$pagina][$a]['deptos'][$d][6])){
  					$superficieT = $disponibilidad[$pagina][$a]['deptos'][$d][6]; 
  				}
  				if($planos){
  					$plano = 'images/planos/planta_'.$a.'/'.$a.'0'.($d+1).'.png';
  				}
   				
				if(isset($titulo) && isset($descripcion)){
 					$disponibilidadContent .= '<h2>'. $titulo;
					$disponibilidadContent .= '<span>'.$descripcion.'</span>';
					$disponibilidadContent .= '<strong>Planta</strong>';
					$disponibilidadContent .= '</h2>';
				}
				$disponibilidadContent .= '<div>';
				$disponibilidadContent .= '<ul class="row">
											<li class="col-8 col-md-6 superficieArea">';
				if( isset($superficie) || isset($terraza) || isset($patio) || isset($superficieT)){
					$disponibilidadContent .= '<ul>';
					if( isset($superficie)){
						$disponibilidadContent .= '<li>'.$superficie.'</li>';
					}
					if( isset($terraza) || isset($patio) ){
						$disponibilidadContent .= '<li>'.$terraza;
						if($patio!=''){
							$disponibilidadContent .= '  /  '.$patio;
						}
						$disponibilidadContent .= '</li>';
					}
					if( isset($superficieT)){
						$disponibilidadContent .= '<li><strong>'.$superficieT.'</strong></li>';
					}
					$disponibilidadContent .= '</ul>';
				}
				
				$disponibilidadContent .= '</li>';
				
				if(isset($pdf) && $pdf != ''){ 	
					$disponibilidadContent .= '<li class="col-4 col-md-6 linksArea">
												<ul class="row">
													<li>
														<p><a href="plantas/'.$pdf.'" title="Bajar Planta" target="_blank">> Bajar PDF</a></p>
													</li>
													<!--li>
														<p><a href="#" title="Enviar Planta por email">Enviar</a></p>
													</li-->
												</ul>
											</li>';
				}
				$disponibilidadContent .= '</ul>';
				
				if($planos){
					$disponibilidadContent .= '<span class="imgArea">
												<img src="'.$plano.'" alt="Depto '.$disponibilidad[$pagina][$a]['piso'].'0'.($d+1).'">
											</span>'
											;
				}						
				$disponibilidadContent .= '</div>';
  			}
  			$disponibilidadContent .= '</div><!-- accordion -->';
  		}
  		
  		$disponibilidadContent .= '</article>
  					</div>
  				</div>
  			</section>
		
		';
	}
?>
