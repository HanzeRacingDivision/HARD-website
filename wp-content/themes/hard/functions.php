<?php

require_once(__DIR__.'/includes/post_types.php');
require_once(__DIR__.'/includes/taxonomies.php');
require_once(__DIR__.'/includes/nav_menus.php');
require_once(__DIR__.'/includes/options_pages.php');

function theme_enqueue_scripts() {
    wp_enqueue_script( 'site_scripts', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), null, true );
    wp_enqueue_style( 'site_styles', get_template_directory_uri() . '/css/style.css' );

    wp_enqueue_script( 'swipebox', get_template_directory_uri() . '/js/swipebox/src/js/jquery.swipebox.min.js', array( 'jquery' ), null, true );
    wp_enqueue_style( 'swipebox_styles', get_template_directory_uri() . '/js/swipebox/src/css/swipebox.min.css' );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function wpdocs_theme_add_editor_styles() {
    add_editor_style( get_template_directory_uri() . '/css/style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

function theme_setup() {
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' ); // Add the <title> to wp_head.
    add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'theme_setup' );

add_filter( 'allow_dev_auto_core_updates', '__return_false' );
