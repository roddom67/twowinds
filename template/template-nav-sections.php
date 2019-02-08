<?php
	include('data/data-nav-sections.php')
?>
		<section class="navSectionArea">
 			<div class="container">
				<article>
					<?php
						if(isset($navSections)){
					?>
					<ul>
					<?php
							for($a=0;$a<sizeof($navSections);$a++){
					?>
						<li>
							<span class="spanImg">
								<img src="<?php echo $navSections[$a]['imagen'] ?>" alt="<?php echo $navSections[$a]['tituloImg'] ?>" title="<?php echo $navSections[$a]['tituloImg'] ?>">
							</span>
							<div>
								<p><?php echo $navSections[$a]['parrafo'] ?></p>
								<a href="<?php echo $navSections[$a]['link']['href'] ?>" title="<?php echo $navSections[$a]['link']['title'] ?>" class="link"><?php echo $navSections[$a]['link']['title'] ?></a>
							</div>
						</li>
					<?php
							}
					?>
					</ul>
					<?php
						}
					?>
				</article>
  			</div>
 		</section>
