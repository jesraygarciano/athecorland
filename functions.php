<?php

//ATTACH CSS FILES TO HEAD
function hoolma_enqueue_style() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), array("bootstrap", "animate", "bootstrap-dropdown", 'font-awesome'), false );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . "/font-awesome/css/font-awesome.min.css");
    wp_enqueue_style('bootstrap-dropdown', get_template_directory_uri() . '/css/bootstrap-dropdownhover.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.min.css');
}
//ATTACH JAVASCRIPT FILES TO FOOTER
function hoolma_enqueue_scripts(){
    wp_enqueue_script('jquery-1-9', get_template_directory_uri(). '/js/jquery-1.9.1.js', array(), null, true);
    wp_enqueue_script('js-validate', get_template_directory_uri(). '/js/jquery.validate.js', array(), null, true);
    wp_enqueue_script('js-tether', "//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js");
    wp_enqueue_script('js-bootstrap', get_template_directory_uri(). '/js/bootstrap.js', array(), null, true);
    wp_enqueue_script('js-dropdownhover', get_template_directory_uri(). '/js/bootstrap-dropdownhover.min.js', array(), null, true);
    wp_enqueue_script('js-main', get_template_directory_uri(). '/js/main.js', array("jquery-1-9"), null,  true);
}
add_action( 'wp_enqueue_scripts', 'hoolma_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'hoolma_enqueue_scripts');

function hoolma_init_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'hoolma_init_menu' );


add_theme_support( 'post-thumbnails' );
add_image_size('thumb-square', 385, 333, true);
add_image_size('thumb-blog', 760, 430, true);

?>