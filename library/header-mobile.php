<div id="header-mobile">
	<div class="container">
		
		<div class="row">
			<div class="col-xs-6">
				<div class="logo">
					<a href="<?php echo esc_attr( get_bloginfo( 'url' ) ); ?>">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/mini-logo-polibodegas.png">
					</a>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="menu-trigger">
					<img id="trigger-menu" src="<?php bloginfo('template_directory'); ?>/assets/images/nav.svg">
				</div>
			</div>
		</div>

	</div>

	<nav id="expand-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	</nav>

</div>