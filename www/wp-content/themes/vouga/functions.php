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


add_filter( 'nav_menu_link_attributes', 'my_nav_menu_attribs', 10, 3 );
function my_nav_menu_attribs( $atts, $item, $args )
{
    $atts['data-type'] = $item->title;
    return $atts;
}

register_sidebar( array(
    'name' => __( 'Footer information', 'vouga' ),
    'id' => 'footer-information',
    'description' => __( 'Information for the footer', 'vouga' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );