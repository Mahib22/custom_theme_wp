<?php

// load css
function load_file(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'load_file');


// gambar postingan
function init_setup(){
    add_theme_support('post-thumbnails');
    add_image_size('small_thumb', 450, 300, true);
}

add_action('after_setup_theme', 'init_setup');


// sidebar widget
function widget_setup(){
    register_sidebar(array(
        'name' => "Sidebar Pertama",
        'id' => "sidebar1"
    ));
}

add_action('widgets_init', 'widget_setup');



?>