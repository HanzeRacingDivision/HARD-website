<?php

function hard_register_taxonomies() {
    
    register_taxonomy('countries', 'members', array(
        // 'public' => false,
        'hierarchical' => true,
        'show_in_quick_edit' => true,
        'labels' => array(
            'name' => 'Countries',
            'singular_name' => 'Country'
        )
    ));
    
    register_taxonomy('roles', 'members', array(
        // 'public' => false,
        'hierarchical' => true,
        'show_in_quick_edit' => true,
        'labels' => array(
            'name' => 'Roles',
            'singular_name' => 'Role'
        )
    ));
}

add_action( 'init', 'hard_register_taxonomies' );
