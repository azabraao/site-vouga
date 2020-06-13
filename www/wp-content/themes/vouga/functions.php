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

// if (function_exists('acf_add_options_page')){
    
// 	acf_add_options_page(array(
//         'page_title' => 'Opções Gerais',
//         'menu_title' => 'Opções Gerais',
//         'menu_slug'  => 'theme-general-settings',
//         'capability' => 'edit_posts',
//         'redirect'   => false,
//         'icon_url'   => 'dashicons-admin-settings',
//         'position'   => 2

// 	));

	
// }

add_action('admin_menu', 'options_page');
function options_page(){
	add_options_page('Opções', 'Opções Gerais', 'manage_options', 'theme-general-settings', 'teste','dashicons-admin-generic', 4);
}

function teste(){
}
