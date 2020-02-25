<?php

function hard_create_post_types() {
  register_post_type( 'members',
    array(
      'labels' => array(
        'name' => __( 'Members' ),
        'singular_name' => __( 'Member' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array(
          'title',
          'thumbnail'
      )
    )
  );

  register_post_type( 'sponsors',
    array(
      'labels' => array(
        'name' => __( 'Sponsors' ),
        'singular_name' => __( 'Sponsor' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array(
          'title',
          'editor',
          'thumbnail'
      )
    )
  );
}
add_action( 'init', 'hard_create_post_types' );
