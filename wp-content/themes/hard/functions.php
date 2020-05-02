<?php

require_once(__DIR__.'/includes/post_types.php');
require_once(__DIR__.'/includes/taxonomies.php');
require_once(__DIR__.'/includes/nav_menus.php');
require_once(__DIR__.'/includes/options_pages.php');
require_once(__DIR__.'/includes/disable_post_type_singles.php');
require_once(__DIR__.'/includes/analytics.php');


function theme_enqueue_scripts() {
    wp_enqueue_script( 'site_scripts', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), null, true );
    wp_enqueue_style( 'site_styles', get_template_directory_uri() . '/css/style.css' );

    // wp_enqueue_script( 'swipebox', get_template_directory_uri() . '/js/libs/swipebox/src/js/jquery.swipebox.min.js', array( 'jquery' ), null, true );
    // wp_enqueue_style( 'swipebox_styles', get_template_directory_uri() . '/js/libs/swipebox/src/css/swipebox.min.css' );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/libs/slick/slick.min.js', array( 'jquery' ), null, true );
    wp_enqueue_style( 'slick_css', get_template_directory_uri() . '/js/libs/slick/slick.css' );
    wp_enqueue_style( 'slick_theme', get_template_directory_uri() . '/js/libs/slick/slick-theme.css' );
    
    wp_enqueue_style( 'Font_Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );

}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function wpdocs_theme_add_editor_styles() {
    add_editor_style( get_template_directory_uri() . '/css/style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

function theme_setup() {
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'huge', 1920, 1080 );
}
add_action( 'after_setup_theme', 'theme_setup' );

add_filter( 'allow_dev_auto_core_updates', '__return_false' );

if ( function_exists( 'eae_encode_emails' ) )  {
    add_filter( 'acf/load_value', 'eae_encode_emails' );
}
