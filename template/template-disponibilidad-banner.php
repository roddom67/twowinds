<?php
	include('/data/data-banner-disponibilidad.php')
?>
<section class="disponibilidadBanner">
	<div class="container-fluid">
		<article>
			<div class="banner">
				<span class="spanImg">
					<img src="<?php echo $bannerDisponibilidad['imagen'] ?>" alt="<?php echo $bannerDisponibilidad['tituloImg'] ?>" title="<?php echo $bannerDisponibilidad['tituloImg'] ?>">
				</span>
				<div>
					<h3><?php echo $bannerDisponibilidad['titulo'] ?></h3>
					<span><a href="<?php echo $bannerDisponibilidad['link']['href'] ?>" title="<?php echo $bannerDisponibilidad['link']['title'] ?>" class="link"><?php echo $bannerDisponibilidad['link']['title'] ?></a></span>				
				</div>
			</div>
		</article>
	</div>
</section>
