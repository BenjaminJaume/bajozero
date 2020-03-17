<?php

function load_stylesheet() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/vendor/bootstrap.min.css', array(), false, 'all');
    wp_register_style('bootstrap-css-map', get_template_directory_uri() . '/css/vendor/bootstrap.min.css.map', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bootstrap-css-map');

    wp_register_style('custom_stylesheet', get_template_directory_uri() . '/css/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom_stylesheet');
}
add_action('wp_enqueue_scripts', 'load_stylesheet');

function load_jquery() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery-3.4.1.min.js', '', '3.4.1', true);
}
add_action('wp_enqueue_scripts', 'load_jquery');


function load_javascript() {
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', '', '4.3.1', true);
    wp_enqueue_script('bootstrap');

    wp_register_script('custom_script', get_template_directory_uri() . '/js/custom.js', '', false, true);
    wp_enqueue_script('custom_script');
}
add_action('wp_enqueue_scripts', 'load_javascript');

// Add menu feature in WordPress
add_theme_support('menus');

// Add Boostrap Menu file with Wordpress
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus(
    array(
        'menu' => __("Menu", 'theme')
    )
    );

function console($data) {
    echo "<script>console.log('" . json_encode($data) . "');</script>";
}

// Custom post type function
function create_posttype() {
 
    register_post_type( 'client',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Clients' ),
                'singular_name' => __( 'client' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'clients'),
            'show_in_rest' => true
        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');

// turn off wysiwig for custom post types
add_action('init', 'init_remove_support',100);
function init_remove_support(){
    remove_post_type_support( 'client', 'editor');
    // remove_post_type_support( $post_type, 'editor');
}
?>