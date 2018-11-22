<body class="<?php echo $proyecto.' '.$pagina; if($pagina != 'index'){ echo ' internal' ;} if(isset($navGris)){ echo ' navGris' ;} ?>">
	<main>
<?php
	include('../template/template-header.php');
	include('../template/template-texts.php');
	include('../template/template-images.php');
	
	include('../template/template-disponibilidad.php');

	include('../template/template-form.php');
	
	if(isset($position[$pagina])){
		
		$pos = sizeof($position[$pagina]);
	
		for($p=0;$p < $pos; $p++){
			echo ${$position[$pagina][$p]};
		}
	}
?>
	</main>
<?php 
	include("footer.php");

	include('../template/template-modal.php');
?>

</body>
</html>