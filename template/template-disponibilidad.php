<?php
if(isset($departamentos)){
?>
<div class="disponibilidadArea">
	<div class="navDisponibilidad">
		<ul class="row">
			<li class="col-9">
				<ul>
					<?php
  						for( $d = 0; $d < sizeof($departamentos);$d++){
					?>
					<li>
						<a href="#1"><?php echo($d + 1 ) ?></a>
					</li>
					<?php
						}
					?>
				</ul>
			</li>
			<li class="col-3 text-rigth">
				<select>
					<option>Mostrar todo</option>
					<option>3 Dormitorios</option>
					<option>2 Dormitorios</option>
					<option>1 Dormitorio</option>
				</select>
			</li>
		</ul>
	</div>
	<div class="departamentos accordion">
	<?php
		for( $d = 0; $d < sizeof($departamentos);$d++){
			for($z=0; $z < sizeof($departamentos[$d]['deptos']); $z++){
	?>
		<h3>
			<strong>
				<?php $departamentos[$d]['piso'] + $departamentos[$d]['deptos'][$z]['unidad'] ?>
			</strong>
			<strong>
				<?php $departamentos[$d]['deptos'][$z]['rooms'] ?>
			</strong>
			<strong>
				<?php $departamentos[$d]['deptos'][$z]['bathrooms'] ?>
			</strong>
			<strong>
				<?php $departamentos[$d]['deptos'][$z]['meters2'] ?>
			</strong>
			<strong>
				<?php $departamentos[$d]['deptos'][$z]['totalMeters2'] ?>
			</strong>
		</h3>
		<div>
			<ul>
				<li>
					<a href="">descargar planta</a>
				</li>
				<li>
					<a href="">enviar</a>
				</li>
			</ul>
			<span class="spanImg">
				<img src="images/planos/plano.png" >
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
