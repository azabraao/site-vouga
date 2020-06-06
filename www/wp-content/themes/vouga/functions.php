<?php 

function my_cptui_featured_image_support() {
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'my_cptui_featured_image_support' );

/**
 * Registering Locations of Navigation Menus
 */

function register_menu() {
    register_nav_menu('header-menu',__( 'Menu Cabeçalho' ));
}
add_action( 'init', 'register_menu' );