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

    wp_register_script('slider', get_template_directory_uri() . '/js/slider.js', false, true );
    wp_enqueue_script('slider');

    wp_register_script('slideAnimations', get_template_directory_uri() . '/js/slideAnimations.js', false, true );
    wp_enqueue_script('slideAnimations');

    wp_register_script('nav', get_template_directory_uri() . '/js/nav.js', false, true );
    wp_enqueue_script('nav');
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
add_theme_support('widgets');
add_theme_support('post-thumbnails');


//Menus
register_nav_menus(
    
        array(
            'top-menu' => 'Top Menu Location',
            'mobile-menu' => 'Mobile Menu Location',
            'footer-menu' => 'Footer Menu Location'
        )
    );


    //Custom Image Sizes
    add_image_size('blog-large', 800, 400, true);
    add_image_size('blog-small', 300, 200, true);
    add_image_size('hero-image', '100dvw', '75dvh', true );


    //Register Sidebars
    function my_sidebars(){
        register_sidebar(
                array(
                    'name'=> 'Page Sidebar',
                    'id' => 'page-sidebar',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>'
                )
            );

        register_sidebar(
            array(
                'name'=> 'Blog Sidebar',
                'id' => 'blog-sidebar',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>'
            )
        );
    }
    add_action('widgets_init','my_sidebars');


    // CUSTOM POST TYPE SECTION
    // Register Custom Post Type for Services
    function register_services_post_type() {
        $args = array(
            'labels' => array(
                'name' => 'Services',
                'singular_name' => 'Service',
                'add_new' => 'Add New Service',
                'add_new_item' => 'Add New Service',
                'edit_item' => 'Edit Service',
                'new_item' => 'New Service',
                'view_item' => 'View Service',
                'search_items' => 'Search Services',
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'supports' => array('title', 'editor', 'thumbnail'), // Enables title, editor, and featured image
        );
        register_post_type('service', $args);
    }
    add_action('init', 'register_services_post_type');


    // CUSTOM POST TYPE FOR TESTIMONIALS

    // Register Custom Post Type for Testimonials
function register_testimonials_post_type() {
    $labels = array(
        'name'               => 'Testimonials',
        'singular_name'      => 'Testimonial',
        'menu_name'          => 'Testimonials',
        'name_admin_bar'     => 'Testimonial',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Testimonial',
        'new_item'           => 'New Testimonial',
        'edit_item'          => 'Edit Testimonial',
        'view_item'          => 'View Testimonial',
        'all_items'          => 'All Testimonials',
        'search_items'       => 'Search Testimonials',
        'parent_item_colon'  => 'Parent Testimonials:',
        'not_found'          => 'No testimonials found.',
        'not_found_in_trash' => 'No testimonials found in Trash.'
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'testimonials'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-format-quote', // Optional: Adds a quote icon
        'supports'           => array('title', 'editor', 'thumbnail'),
    );
    
    register_post_type('testimonial', $args);
}
add_action('init', 'register_testimonials_post_type');


// CONTACT FORM

// Handle contact form submission
function handle_contact_form_submission() {
    // Check for required fields and sanitize input
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    // Send an email notification
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = array('Content-Type: text/plain; charset=UTF-8');

    // Send email
    wp_mail($to, $subject, $body, $headers);

    // Redirect back to the homepage with a success message
    wp_redirect(home_url('/?contact=success'));
    exit;
}
add_action('admin_post_nopriv_submit_contact_form', 'handle_contact_form_submission');
add_action('admin_post_submit_contact_form', 'handle_contact_form_submission');


?>