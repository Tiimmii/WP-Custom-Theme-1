<?php

add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height'      => 100,   // Desired logo height
        'width'       => 400,   // Desired logo width
        'flex-height' => true,  // Allow flexible height
        'flex-width'  => true,  // Allow flexible width
    ));
    add_theme_support('post-thumbnails');
});

function T_menus(){
    $locations = array(
        'primary'=> 'Desktop Primary Left Sidebar',
        'footer'=> 'Footer Menu Items'
    );

    register_nav_menus($locations);
}

add_action('init', 'T_menus');

function T_function_register_styles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('timmi-style', get_template_directory_uri().'/style.css', array('timmi-bootstrap'), $version, 'all');
    wp_enqueue_style('timmi-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('timmi-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css", array(), '6.7.2', 'all');
}

add_action('wp_enqueue_scripts', 'T_function_register_styles');

function T_function_register_scripts(){
    wp_enqueue_script('jquery_scripts', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), 'all', true);
    wp_enqueue_script('js_popper_scripts', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), 'all', true);
    wp_enqueue_script('bootstrap_scripts', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', 'all', true);
    wp_enqueue_script('timmi-script', get_template_directory_uri().'/assets/javascript/main.js', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'T_function_register_scripts');

?>