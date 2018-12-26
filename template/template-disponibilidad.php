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
		<h3>
			<span>
				3A
			</span>
			<span>
				4
			</span>
			<span>
				96
			</span>
			<span>
				118
			</span>
			<span class="ver">
				ver
			</span>
			<a href="">descargar planta</a>
			<a href="">enviar</a>
		</h3>
		<div>
			<span class="spanImg">
				<img src="images/planos/plano.png" >
			</span>
		</div>
		
		<h3>
			<span>
				3A
			</span>
			<span>
				4
			</span>
			<span>
				96
			</span>
			<span>
				118
			</span>
			<span class="ver">
				ver
			</span>
			<a href="">descargar planta</a>
			<a href="">enviar</a>
		</h3>
		<div>
			<span class="spanImg">
				<img src="images/planos/plano.png" >
			</span>
		</div>
		
	</div>
</div>
<?php
}
?>
