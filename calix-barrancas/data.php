<?php

/* 
 * titulo Proyecto 
 *
 ***/
	$proyecto = 'calix-barrancas';
	$proyectoNombre = 'Calix Barrancas';
	
	/* Paginas */
	/* Home */
	$headTitulo['index'] = 'Vivir a mano, vivir cómodo, vivir bien. | Calix Barrancas';
	$headDesc['index'] = 'Calix Barrancas - Vivir a mano, vivir cómodo, vivir bien. Departamentos en el barrio de Barrancas. 54 11 4788 2412';
	$headKeywords['index'] = 'barrancas, barrio, luminosos, ambientees, edificio, moderno, ciudad, departamentos, inmobiliaria, arquitecto, desarrollo, gestión, inmobiliarios, gerenciamiento,edificios, vivienda, oficinas, concursos, construcción, planificación, obras, dirección';
	
	$titulo['index'] = 'Vivir a mano,<br>vivir cómodo,<br>vivir bien.';
	$textGray['index'] = '<p>Lo diseñamos pensando en darte la clase de espacio que necesitás. <br>Calix Barrancas te acerca a todo lo que te importa, <br>para hacerte la vida más fácil, más cómoda.</p>';
	$textImageArea['left']['index'] = array(
		'titulo' => 'El Proyecto',
		'parrafo' => 'Ambientes luminosos y versátiles <br>en un edificio de impecable estética <br>y moderna arquitectura',
		'verMasLink' => 'el-proyecto.php',
		'verMasTitulo' => 'Ver más del proyecto',
		'imagenes' => array (
			'titulo' => 'El barrio',
			'youtube' => '<iframe width="960" height="540" src="https://www.youtube.com/embed/bdwZODNzWqM?rel=0&amp;controls=0&amp;showinfo=0&amp;enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
		)
	);
	$textImageArea['right']['index'] = array(
		'titulo' => 'Barrancas',
		'parrafo' => 'Clásico y moderno. <br>Descubrí los beneficios de un barrio <br>conectado tanto con la naturaleza <br>como con la vida de ciudad',
		'verMasLink' => 'el-barrio.php',
		'verMasTitulo' => 'Conocer más del barrio'			
	);
	
	$galeriaArea['index'] = array(
		'titulo' => 'Calix',
		'imagenes' => array (
			array (
				'imagen' => 'galeria_0.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'galeria_1.jpg',
				'titulo' => ''
			)
		)
	);
		
	$position['index'] = array('textGrayContent','textImageLeftContent','textImageRightContent');

/* 
 * El proyecto
 *
 ***/
 
	$headTitulo['el-proyecto'] = 'El Proyecto | Calix Barrancas';
	$headDesc['el-proyecto'] = 'Calix Barrancas - El Proyecto. Departamentos en el barrio de Barrancas. 54 11 4788 2412';
	$headKeywords['el-proyecto'] = 'proyecto, espacios, barrancas, barrio, luminosos, ambientees, edificio, moderno, ciudad, departamentos, inmobiliaria, arquitecto, desarrollo, gestión, inmobiliarios, gerenciamiento, edificios, vivienda, oficinas, concursos, construcción, planificación, obras, dirección';

	$titulo['el-proyecto'] = 'Un diseño moderno, <br>ambientes luminosos, <br>una vida muy cómoda';
	$textGray['el-proyecto'] = '<p>En Calix Barrancas ningún detalle fue librado al azar, <br>los espacios comunes y privados fueron cuidadosamente planeados.</p>';
	$threeImagesArea['el-proyecto']= array(
		'imagenes' => array (
			array (
				'imagen' => 'el-proyecto-3f.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'el-proyecto-planta1.png',
				'titulo' => ''
			),
			array (
				'imagen' => 'el-proyecto-planta2.jpg',
				'titulo' => ''
			)
		)
	);
	$galeriaArea['el-proyecto'] = array(
		'imagenes' => array (
			array (
				'imagen' => 'galeria_0.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'galeria_1.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'galeria_2.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'PB_piso1.png',
				'titulo' => ''
			),
			array (
				'imagen' => 'piso2_piso3.png',
				'titulo' => ''
			),
			array (
				'imagen' => 'piso4_piso5.png',
				'titulo' => ''
			),
			array (
				'imagen' => 'piso6_piso7.png',
				'titulo' => ''
			),
			array (
				'imagen' => 'piso8.png',
				'titulo' => ''
			),
			array (
				'360' => 'https://roundme.com/embed/143840/363611',
				'titulo' => ''
			)
		)
	);

	$caracteristicasArea['el-proyecto'] = array(
		'titulo' => 'Características generales',
		
		'texto' => '<p>Su moderno diseño optimiza las cualidades naturales de su entorno, ofreciendo cómodos y agradables espacios de 1 y 2 dormitorios para disfrutar de un mejor estilo de vida.</p>',
		'caracteristicas' => array(
			'20 metros de frente',
			'Vista abierta al Frente y Contrafrente',
			'Edificio de 7 plantas',
			'Acceso de doble altura',
			'Ventanas de piso a techo',
			'Todos los ambientes externos',
			'Unidades de 2 y 3 ambientes',
			'Cocheras y espacio para motos y bicicletas',
			'Terminaciones de calidad',
			'Excelente iluminación',
			'Salón de usos múltiples',
			'Solarium con duchones de refresco',
			
			'Bauleras',
			'Laundry',
			
			'Bajas expensas'
		),
		'sep' => false
	);
	$imagenMobile['el-proyecto'] = array(
		'imagen' => 'mobile/el_proyecto_img.jpg',
		'titulo' => ''
	);
	$position['el-proyecto'] = array('textGrayContent','threeImagesContent','caracteristicaContent','galeriaContent','imagenMobileContent');

/* 
 * EL Barrio 
 *
 ****/
 
	$headTitulo['el-barrio'] = 'El Barrio | Calix Barrancas';
	$headDesc['el-barrio'] = 'Calix Barrancas - El Barrio. Departamentos en el barrio de Barrancas. 54 11 4788 2412';
	$headKeywords['el-barrio'] = 'residencial, gastronómicas, paseos, comerciales, proyecto, espacios, barrancas, barrio, luminosos, ambientees, edificio, moderno, ciudad, departamentos, inmobiliaria, arquitecto, desarrollo, gestión, inmobiliarios, gerenciamiento, edificios, vivienda, oficinas, concursos, construcción, planificación, obras, dirección';

	$titulo['el-barrio'] = 'Vivir a mano,<br>cerca de todo.';
	$textGray['el-barrio'] = '<p>Barrancas es un barrio en transformación, está re inventandose. Es un nuevo polo gastronómico con restaurantes y bares, zonas comerciales y de entretenimiento. Cuenta con un sólido centro de educación primario, secundaria y universitaria. En Buenos Aires no hay otro lugar como este. Sumale las zonas verdes, los extensos enlaces de transporte, los famosos mercados de alimentos, transforman este barrio en un destino tan atractivo y conveniente. Todo esto a solo 5 minutos.</p>';
	
	$threeImagesArea['el-barrio']= array(
		'imagenes' => array (
			array (
				'imagen' => 'praline.jpg',
				'titulo' => '',
				'youtube' => '<iframe width="960" height="540" src="https://www.youtube.com/embed/bdwZODNzWqM?rel=0&amp;controls=0&amp;showinfo=0&amp;enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
			),
			array (
				'imagen' => 'nunez-buenos-aires.png',
				'titulo' => 'Barrancas Buenos Aires'
			),
			array (
				'imagen' => 'chico-bar.jpg',
				'titulo' => ''
			)
		)
	);
	$textDosTresImageArea['right']['el-barrio'] = array(
		'parrafo' => '<span>El barrio que lo tiene todo</span>Barrancas, además de ser una zona residencial, es un distrito reconocido por su amplia variedad de ofertas gastronómicas, espacios verdes y paseos comerciales. También, reconocidas instituciones educativas, médicas y financieras se encuentran en la zona.'
	);

	$textDosTresImageArea['left']['el-barrio'] = array(
		'parrafo' => '<span>Proximidad insuperable</span>La ubicación del proyecto es inmejorable. Calix Barrancas tiene una conveniente cercanía a las vías más rápidas de acceso, tanto al centro de la ciudad como a la Zona Norte. Además, está a sólo unos pasos de múltiples medios de transporte.'
	);
	
	$textMapArea['el-barrio'] = array(
		'titulo' => 'Cerca de todo lo que te gusta',
		'listado' => array(
			array(
				'titulo' => 'Restaurantes y bares',
				'lugares' => array(
					'1_Dashi Barrio Chino',
					'2_Buddah BA',
					'3_Muu Lechería',
					'4_Luccianos Heladería',
					'5_MAD',
					'6_Cherry Sushi',
					'7_Muni',
					'8_Las Carnitas',
					'9_Pobre Luis',
					'10_La Parolaccia',
					'11_El Quinto',
					'12_Tea Connection',
					'13_MOOI'
				)
			),
			array(
				'titulo' => 'Interés general',
				'lugares' => array(
					'14_Plaza Aberti',
					'15_Plaza Barrancas',
					'16_Plaza Manuel Belgrano',
					'17_Farmacity',
					'18_Barrio Chino',
					'19_Multiplex Belgrano',
					'20_Showcase Nuñez / Carrefour',
					'21_Megatlon Belgrano'
				)
			),
			array(
				'titulo' => 'Educación',
				'lugares' => array(
					'22_Universidad Di Tella',
					'23_Escuela Ort Escuela Normal',
					'24_UHS United High School',
					'25_Instituto Santa Ana y San Joaquín',
					'26_Belgrano Uno',
					'27_Jacarandá',
					'28_UAI'
				)
			),
			array(
				'titulo' => 'Salud',
				'lugares' => array(
					'29_Fundación Fleni',
					'30_CBA Inst. Cardiovascular de BA',
					'31_Stamboulian Servicio Medico',
					'31_Cemic Belgrano',
					'31_Centro Médico Luis Pasteur'
				)
			)
		),
		'parrafo' => '',
		'coordenadas' => '1SdtQ6l6plzFhyCBwZ54tO35WT8Z39slj'	
	);
	
	$twoImagesMiddleTextArea['el-barrio']= array(
		'imagenes' => array (
			array (
				'imagen' => 'tres-cafe.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'mural.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'big-party.jpg',
				'titulo' => ''
			)
		)
	);
	$threeImagesArea_1['el-barrio']= array(
		'imagenes' => array (
			array (
				'imagen' => 'cruce.jpg',
				'titulo' => '',
			),
			array (
				'imagen' => 'transporte.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'todo-a.jpg',
				'titulo' => ''
			)
		)
	);
	$threeImagesArea_2['el-barrio']= array(
		'imagenes' => array (
			array (
				'imagen' => 'subte.jpg',
				'titulo' => '',
			),
			array (
				'imagen' => 'frutas.jpg',
				'titulo' => ''
			),
			array (
				'imagen' => 'cerveza.jpg',
				'titulo' => ''
			)
		)
	);
	
	$position['el-barrio'] = array('threeImagesContent','textDosTresImageRightContent','textMapContent','twoImagesMiddleTextContent','textDosTresImageLeftContent','threeImages1Content','threeImages2Content');

/* 
 * Disponibilidad 
 *
 ****/
	
	$headTitulo['disponibilidad'] = 'Disponibilidad | Calix Barrancas';
	$headDesc['disponibilidad'] = 'Calix Barrancas - Disponibilidad. Departamentos en el barrio de Barrancas. 54 11 4788 2412';
	$headKeywords['disponibilidad'] = 'disponibilidad, proyecto, espacios, barrancas, barrio, luminosos, ambientees, edificio, moderno, ciudad, departamentos, inmobiliaria, arquitecto, desarrollo, gestión, inmobiliarios, gerenciamiento, edificios, vivienda, oficinas, concursos, construcción, planificación, obras, dirección';

	$tituloG['disponibilidad'] = 'Disponibilidad';
	$textGray['disponibilidad'] = '<p></p>';
	
	$disponibilidad['disponibilidad'] = array(
			array(
				'piso' => 0,
				'titulo' => 'Planta Baja / Cocheras',
				'planos' => true,
				'deptos' => array(
					array(
						'Planta Baja / Cocheras',
						'12 + 1 Cocheras',
						'Cocheras.pdf'
					)
				)
			),
			array(
				'piso' => 1,
				'titulo' => 'Primer Piso / Cocheras',
				'planos' => true,
				'deptos' => array(
					array(
						'Primer piso / Cocheras',
						'10 + 1 Cocheras',
						'Cocheras.pdf'
					)
				)
			),
			array(
				'piso' => 2,
				'titulo' => 'Piso 2',
				'planos' => true,
				'deptos' => array(
					array(
						'Depto 201 - Frente',
						'1 dormitorio / 2 baños / Terraza',
						'201.pdf',
						'Superficie Cubierta 50,2 m2',
						'Terraza 10,2 m2',
						'',
						'Superficie total: 60,4 m2'
					),
					array(
						'Depto 202 - Frente',
						'1 dormitorio / 2 baños / Terraza',
						'202.pdf',
						'Superficie Cubierta 50,2 m2',
						'Terraza 10,2 m2',
						'',
						'Superficie total: 60,4 m2'
					),
					array(
						'Depto 203 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'203.pdf',
						'Superficie Cubierta 49,6 m2',
						'Terraza 10,2 m2',
						'',
						'Superficie total: 59,8 m2'
					),
					array(
						'Depto 204 - Contrafrente',
						'2 Dormitorios / 2 Baños Completos / Terraza',
						'204.pdf',
						'Superficie Cubierta 66,5 m2',
						'Terraza 78 m2',
						'',
						'Superficie total: 144,5 m2'
					),
					array(
						'Depto 205 - Contrafrente',
						'Monoambiente Divisible / 2 Baños / Terraza',
						'205.pdf',
						'Superficie Cubierta 41,3 m2',
						'Terraza 79,6 m2',
						'',
						'Superficie total: 121 m2'
					)
				),
				'show' => true
			),
			array(
				'piso' => 3,
				'titulo' => 'Piso 3',
				'planos' => true,
				'deptos' => array(
					array(
						'Depto 301 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'301.pdf',
						'Superficie Cubierta 50,2  m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 55,4 m2'
					),
					array(
						'Depto 302 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'302.pdf',
						'Superficie Cubierta 50,2  m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 55,4 m2'
					),
					array(
						'Depto 303 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'303.pdf',
						'Superficie Cubierta 49,6 m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 54,8 m2'
					),
					array(
						'Depto  304 - Contrafrente',
						'2 Dormitorios / 2 Baños Completos / Terraza',
						'304.pdf',
						'Superficie Cubierta 66,5 m2',
						'Terraza 5,1 m2',
						'',
						'Superficie total: 71,6 m2'
					),
					array(
						'Depto  305 - Contrafrente',
						'Monoambiente Divisible / 2 Baños / Terraza',
						'305.pdf',
						'Superficie Cubierta 41,3 m2',
						'Terraza 10,2 m2',
						'',
						'Superficie total: 51,5 m2'
					)
				)
			),
			array(
				'piso' => 4,
				'titulo' => 'Piso 4',
				'planos' => true,
				'deptos' => array(
					array(
						'Depto 401 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'401.pdf',
						'Superficie Cubierta 50,2 m2',		
						'Terraza 5,2 m2',
						'',
						'Superficie total: 55,4 m2'					
					),
					array(
						'Depto 402 - Frente',
						'3 Dormitorios / 2 Baños Completos / Terraza',
						'402.pdf',
						'Superficie Cubierta 99,7 m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 104,9 m2',
					),
					array(
						'Depto 403 - Contrafrente',
						'2 Dormitorios / 2 Baños Completos / Terraza',
						'403.pdf',
						'Superficie Cubierta 66,5 m2',
						'Terraza 5,1 m2',
						'',
						'Superficie total: 71,6 m2'
					),
					array(
						'Depto 404 - Contrafrente',
						'Monoambiente Divisible / 2 Baños / Terraza',
						'404.pdf',
						'Superficie Cubierta 41,3 m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 46,5 m2'
					)
				)
			),
			array(
				'piso' => 5,
				'titulo' => 'Piso 5',
				'planos' => true,
				'deptos' => array(
					array(
						'Depto 501 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'501.pdf',
						'Superficie Cubierta 50,2 m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 55,4 m2'
					),
					array(
						'Depto 502 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'502.pdf',
						'Superficie Cubierta 50,2 m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 55,4 m2'
					),
					array(
						'Depto 503 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'503.pdf',
						'Superficie Cubierta 49,6 m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 54,8 m2'
					),
					array(
						'Depto 504 - Contrafrente',
						'2 Dormitorios / 2 Baños Completos / Terraza',
						'504.pdf',
						'Superficie Cubierta 66,5 m2',
						'Terraza 15,1 m2',
						'',
						'Superficie total: 81,6 m2'
					),
					array(
						'Depto 505 - Contrafrente',
						'Monoambiente Divisible / 2 Baños / Terraza',
						'505.pdf',
						'Superficie Cubierta 41,3 m2',
						'Terraza 5,1 m2',
						'',
						'Superficie total: 46,4 m2'
					)
				)
			),
			array(
				'piso' => 6,
				'titulo' => 'Piso 6',
				'planos' => true,
				'deptos' => array(
					array(
						'Depto 601 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'601.pdf',
						'Superficie Cubierta 50,2 m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 55,4 m2'
					),
					array(
						'Depto 602 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'602.pdf',
						'Superficie Cubierta 50,2 m2',
						'Terraza 5,2 m2',
						'',
						'Superficie total: 55,4 m2'
					),
					array(
						'Depto 603 - Frente',
						'1 Dormitorio / 2 Baños / Terraza',
						'603.pdf',
						'Superficie Cubierta 50,2 m2',
						'Terraza 5,1 m2',
						'',
						'Superficie total: 54,8 m2'
					),
					array(
						'Depto 604 - Contrafrente',
						'2 Dormitorios / 2 Baños Completos / Terraza',
						'604.pdf',
						'Superficie Cubierta 66,5 m2',
						'Terraza 5,1 m2',
						'',
						'Superficie total: 71,6 m2'
					),
					array(
						'Depto 605 - Contrafrente',
						'Monoambiente Divisible / 2 Baños / Terraza',
						'605.pdf',
						'Superficie Cubierta 41,3 m2',
						'Terraza 10,2 m2',
						'',
						'Superficie total: 51,5 m2'
					)
				)
			),
			array(
				'piso' => 7,
				'titulo' => '7 piso / SUM',
				'planos' => true,
				'deptos' => array(
					array('7 piso / SUM','','')
				)
			)
		);
	
	$position['disponibilidad'] = array('disponibilidadContent');

/*
 * Contacto 
 *
 ****/
	
	$medio['contacto'] = array(
		'Por cartel de Obra',
		'Busqueda en Google',
		'Referido',
		'Por agente inmobiliario',
	);
	
	$tipoDepto['contacto'] = array(
		'1 dormitorio',
		'2 dormitorios',
		'1 dormitorio con terraza',
		'2 dormitorios con terraza'
	)
	
?>
