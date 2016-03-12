<div id="mini-bar">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="llamanos">
					Llámanos y consulta por tu mini-bodega: 01 (951) 503-3148
				</div>
			</div>
			<div class="col-sm-6">
				<div class="redes-sociales">
					<span>Síguenos en redes sociales:</span>
					<a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-twitter.svg"></a>
					<a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-gplus.svg"></a>
					<a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-facebook.svg"></a>
				</div>
			</div>
		</div>
	</div>
</div>

<header>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="logo">
					<a href="<?php echo esc_attr( get_bloginfo( 'url' ) ); ?>">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-polibodegas.svg" class="img-responsive">
					</a>
				</div>
			</div>
			<div class="col-sm-9">
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</nav>
			</div>
		</div>
	</div>
</header>