<?php
if(isset($departamentos)){
?>
<div class="disponibilidadArea">
	<div class="navDisponibilidad">
		<ul class="row">
			<li class="col-9">
				<ul class="filtroPiso">
					<li><h4>Pisos:</h4></li>
					<?php
  						for( $d = 0; $d < sizeof($departamentos);$d++){
					?>
					<li>
						<a href="piso<?php echo($d + 1 ) ?>" title="Piso <?php echo($d + 1 ) ?>"><?php echo($d + 1 ) ?></a>
					</li>
					<?php
						}
					?>
				</ul>
			</li>
			<li class="col-3 text-rigth">
				<select>
					<option value="0">Mostrar todo</option>
					<option value="1">1 Dormitorio</option>
					<option value="2">2 Dormitorios</option>
					<option value="3">3 Dormitorios</option>
					<option value="4">4 Dormitorios</option>
					<option value="5">5 Dormitorios</option>
				</select>
			</li>
		</ul>
	</div>
	
	<div class="departamentosTitle">
		<h2>
			<strong>Unidad</strong>
			<strong>Dormitorio</strong>
			<strong>Baños</strong>
			<strong>M2 cuebiertos</strong>
			<strong>M2 totales</strong>
			<strong>&nbsp;</strong>
		</h2>
	</div>
	<div class="departamentos accordion">
	<?php
		for( $d = 0; $d < sizeof($departamentos);$d++){
			for($z=0; $z < sizeof($departamentos[$d]['deptos']); $z++){
	?>
		<h3 class="piso<?php echo $departamentos[$d]['piso'] ?> rooms<?php echo $departamentos[$d]['deptos'][$z]['rooms'] ?>">
			<strong>
				<?php echo $departamentos[$d]['piso'] .' '. $departamentos[$d]['deptos'][$z]['unidad'] ?>
			</strong>
			<strong>
				<?php echo $departamentos[$d]['deptos'][$z]['rooms'] ?>
			</strong>
			<strong>
				<?php echo $departamentos[$d]['deptos'][$z]['bathrooms'] ?>
			</strong>
			<strong>
				<?php echo $departamentos[$d]['deptos'][$z]['meters2'] ?>
			</strong>
			<strong>
				<?php echo $departamentos[$d]['deptos'][$z]['totalMeters2'] ?>
			</strong>
			<strong>
				<span class="close">+</span>
				<span class="open">-</span>
			</strong>
		</h3>
		<div>
			<ul class="buttonPlanta">
				<li>
					<a href="" title="Enviar por correo"><i class="far fa-envelope"></i></a>
				</li>
				<li>
					<a href="plantas/<?php echo $departamentos[$d]['deptos'][$z]['pdf'] ?>.pdf" title="Descargar Planta" target="_blanck"><i class="fas fa-download"></i></a>
				</li>
			</ul>
			<span class="spanImg">
				<img src="images/planos/<?php echo $departamentos[$d]['deptos'][$z]['plano'] ?>" >
			</span>
		</div>
	<?php
			}
		}
	?>
		
	</div>
</div>
<?php
}
?>
