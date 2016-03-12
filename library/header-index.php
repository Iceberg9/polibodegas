<header>
	<?php
	if ( is_single() ) {
		echo '<div id="bar-wrapper" class="mini-header">';
	} else {
		echo '<div id="bar-wrapper">';
	}
	?>
		<div id="open-menu" class="trigger-menu">
			<i class="fa fa-bars"></i>
		</div>
		<div id="close-menu" class="trigger-menu" style="display:none">
			<i class="fa fa-times"></i>
		</div>
		<div id="logo">
			<a href="http://escomotu.com" title="Es como tu!"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo_escomotu.png" alt="Es como tu! - Somos tu confidente online"></a>
		</div>
		<div class="clear"></div>
	</div>
</header>