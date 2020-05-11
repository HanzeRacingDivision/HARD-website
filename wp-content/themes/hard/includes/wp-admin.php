<?php

add_action( 'admin_init', 'custom_admin_funcs' );

function custom_admin_funcs() {

    $role_object = get_role( 'editor' );
    $role_object->add_cap( 'edit_theme_options' );

    if( current_user_can('editor') ) { 
        // remove_menu_page( 'index.php' );
        // remove_menu_page( 'jetpack' );
        // remove_menu_page( 'edit.php' );
        // remove_menu_page( 'upload.php' );
        remove_menu_page( 'edit.php?post_type=popup' );
        remove_menu_page( 'edit-comments.php' );
        remove_submenu_page( 'themes.php', 'themes.php' );
        remove_submenu_page( 'themes.php', 'widgets.php' );
        remove_submenu_page( 'themes.php', 'customize.php' );

        remove_menu_page( 'plugins.php' );
        remove_menu_page( 'users.php' );
        remove_menu_page( 'tools.php' );
        remove_menu_page( 'options-general.php' );
    }
    
}
