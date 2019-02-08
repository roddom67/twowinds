<nav class="navbar">
	<a class="navbar-brand " href="../">
		<span class="logoGris"><img src="images/twowinds-urquiza-gris.png"  alt="Two Winds" title="Two Winds"></span>
		<span class="logoBlanco"><img src="images/twowinds-urquiza-blanco.png"  alt="Two Winds" title="Two Winds"></span>
	</a>
	<button class="navbar-toggler menu-toggle" aria-controls="main-menu" aria-expanded="false">
	 	<strong>Menú</strong><span class="menu-toggle-box"><span class="menu-toggle-inner"></span></span>
	</button>

  <div class="collapse " id="navbarSupportedContent">
    <ul class="navbar-nav">
    	<li class="nav-item">
    		<span class="spanImg logoGris"><img src="images/twowinds-urquiza-gris.png"  alt="Two Winds" title="Two Winds"></span>
    	</li>
      <li class="nav-item <?php if(isset($activoH)){ echo 'active'; } ?>">
        <a class="nav-link" href="index.php" title="Home">Home</a>
      </li>
      <li class="nav-item <?php if(isset($activoEB)){ echo 'active'; } ?>">
        <a class="nav-link " href="el-barrio.php" title="El barrio">El barrio</a>
      </li>
      <li class="nav-item <?php if(isset($activoEP)){ echo 'active'; } ?>">
        <a class="nav-link" href="el-proyecto.php" title="El proyecto">El proyecto</a>
      </li>
      <li class="nav-item <?php if(isset($activoA)){ echo 'active'; } ?>">
        <a class="nav-link " href="amenities.php" title="Amenities">Amenities</a>
      </li>

      <li class="nav-item <?php if(isset($activoU)){ echo 'active'; } ?>">
        <a class="nav-link " href="unidades.php" title="Unidades">Unidades</a>
      </li>
      <li class="nav-item <?php if(isset($activoD)){ echo 'active'; } ?>">
        <a class="nav-link " href="disponibilidad.php" title="Disponibilidad">Disponibilidad</a>
      </li>
      <li class="nav-item <?php if(isset($activoEE)){ echo 'active'; } ?>">
        <a class="nav-link " href="el-equipo.php" title="El equipo">El equipo</a>
      </li>
      
      <li class="nav-item <?php if(isset($activoC)){ echo 'active'; } ?>">
        <a class="nav-link " href="contacto.php" title="Contacto">Contacto</a>
      </li>
    </ul>
  </div>
</nav>
