<?php

//=================================================
//ENQUEUE, REGISTER, AND UTILIZE CUSTOM STYLESHEETS
//=================================================
function cl_enqueue(){


    wp_register_style('cl_customstyle', get_template_directory_uri().'/assets/css/customstyle.css');
    wp_register_style('cl_blogcustomstyle', get_template_directory_uri().'/assets/css/blogcustomstyle.css');
    wp_register_style('cl_singlestyle', get_template_directory_uri().'/assets/css/singlestyle.css');

    // wp_register_script('cl_jquery', get_template_directory_uri().'/assets/js/jquery.js');
    // wp_register_script('cl_app_script', get_template_directory_uri().'/assets/js/app.js');

    wp_enqueue_style('cl_customstyle');
    wp_enqueue_style('cl_blogcustomstyle');
    wp_enqueue_style('cl_singlestyle');

    // wp_enqueue_script('cl_jquery');
    // wp_enqueue_script('cl_app_script');


}

add_action('wp_enqueue_scripts', 'cl_enqueue');

//=================================================
//SUPPORT FOR THUMBNAILS
//=================================================
function cyberleviathan_theme_setup(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'cyberleviathan_theme_setup');

//=================================================
//SET EXCERPT LENGTH
//=================================================
function set_excerpt_length(){
    return 20;
}

add_filter('excerpt_length', 'set_excerpt_length');