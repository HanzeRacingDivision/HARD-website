<?php

function hard_register_nav_menus() {
    register_nav_menus(
        array(
            'main-nav' => 'Main Menu',
            // 'footer-nav' => 'Footer Menu'
        )
    );
}
add_action( 'after_setup_theme', 'hard_register_nav_menus' );
