<?php

//Register, Queue, Add, and Load function for Bootstrap CSS
function load_css() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_css');

//Register, Queue, Add, and Load function for Bootstrap JavaScript
function load_js(){

    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . 'js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');

//Register, Queue, Add, and Load function Custom CSS
function load_main_styles(){

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'load_main_styles');


// Theme Options
add_theme_support('menus');


//Menus
register_nav_menus(
    
        array(
            'top-menu' => 'Top Menu Location',
            'mobile-menu' => 'Mobile Menu Location',
            'footer-menu' => 'Footer Menu Location'
        )
    );


?>