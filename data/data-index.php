<?php

/* 
 * titulo HOME 
 *
 ***/
 	$pagina = 'index';
	$proyecto = 'twowinds';
	$activoH = true;
	
	$headTitulo[$pagina]='Two Winds | Urquiza';
	$headDesc[$pagina]='Two Winds - Urquiza. Mi lugar en el mundo. 54 11 5354.8000';
	$headKeywords[$pagina] = 'barrancas, barrio, luminosos, ambientees, edificio, moderno, ciudad, departamentos, inmobiliaria, arquitecto, desarrollo, gestión, inmobiliarios, gerenciamiento,edificios, vivienda, oficinas, concursos, construcción, planificación, obras, dirección, urquiza, two winds';
	
	$mainBox = array(
		"titulo" => "URQUIZA",
		"subtitulo" => "Mi lugar en el mundo"
	);
	$textoDestacado = array (
		'texto' => "El desarrollo y la transformación que buscabas están <br>más cerca tuyo de lo que creías, pronto vas a poder <br>disfrutar eso que tanto amás de Villa Urquiza en una <br>experiencia barrial mejorada, enriquecida por el confort <br>y los atributos de un complejo residencial moderno, <br>seguro, funcional y excelentemente ubicado.",
		'h4' => array(
			'titulo' => 'El proyecto',
			'href' => 'el-proyecto.php'
		),
		'verVideo' => array(
			'titulo' => 'Ver video',
			'youtube' => '<iframe width="960" height="540" src="https://www.youtube.com/embed/bdwZODNzWqM?rel=0&amp;controls=0&amp;showinfo=0&amp;enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
		)
	);
	
	$sliderLeft = array(
		'titulo' => 'Mi lugar en el mundo',
		'texto' => 'Este no es sólo un desarrollo inmobiliario, es un proyecto ideado especialmente para realzar el valor de las cosas que más apreciás: tu ciudad, pero más que nada tu barrio, tu edificio, pero más bien tu espacio, tu departamento, pero principalmente ese sitio al que llamás Mi Lugar en el Mundo.',
		'link' => array(
			'titulo' => 'Unidades',
			'href' => 'unidades.php'
		),
		'slider' => array(
			array(
				'imagen' => 'images/unidades/galeria1.jpg',
				'titulo' => 'Unidades'
			),
			array(
				'imagen' => 'images/unidades/galeria2.jpg',
				'titulo' => 'Unidades'
			),
			array(
				'imagen' => 'images/unidades/galeria3.jpg',
				'titulo' => 'Unidades'
			),
			array(
				'imagen' => 'images/unidades/galeria4.jpg',
				'titulo' => 'Unidades'
			)
		)
	);
	
	$amenities = array(
		'imagen' => 'images/amenities/amenities.jpg',
		'tituloImg' => 'Amenities',
		'h2' => 'Preparate para <br>experimentar la comodidad <br>en su estado más completo',
		'link' => array(
			'titulo' => 'Amenities',
			'href' => 'amenities.php'
		)
	);
	
	$sliderRight = array(
		'titulo' => 'Un barrio único',
		'texto' => 'Villa Urquiza en una experiencia barrial insuperable. Su atmósfera cálida y relajada se enriquece con múltiples espacios verdes, una variada oferta gastronómica, educativa y comercial, y accesos rápidos a todos los medios de transporte.',
		'link' => array(
			'titulo' => 'El barrio',
			'href' => 'el-barrio.php'
		),
		'slider' => array(
			array(
				'imagen' => 'images/unidades/galeria1.jpg',
				'titulo' => 'Unidades'
			),
			array(
				'imagen' => 'images/unidades/galeria2.jpg',
				'titulo' => 'Unidades'
			),
			array(
				'imagen' => 'images/unidades/galeria3.jpg',
				'titulo' => 'Unidades'
			),
			array(
				'imagen' => 'images/unidades/galeria4.jpg',
				'titulo' => 'Unidades'
			)
		)
	);
	

?>