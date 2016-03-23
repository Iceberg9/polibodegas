<?php
// Setup para imagenes destacadas
//add_theme_support('post-thumbnails');
//add_image_size('featured-image', 1280, 700, true);
//add_image_size('single-image', 940, 500, true);
//add_image_size('mini-oimage', 680, 370, true);
//add_image_size('square-image', 340, 370, true);


// Registramos Menú principal
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

if( !is_admin()){

	wp_deregister_script('jquery');

	wp_register_script('jquery', ("//code.jquery.com/jquery-1.12.0.min.js"), false);

	wp_enqueue_script('jquery');

}


?>
