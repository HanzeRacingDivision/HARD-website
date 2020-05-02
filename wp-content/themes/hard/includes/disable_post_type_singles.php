<?php

add_action( 'template_redirect', 'wpse_128636_redirect_post' );

function wpse_128636_redirect_post() {
  if ( is_singular( 'members' ) || is_singular( 'sponsors' )) {
    wp_redirect( home_url(), 301 );
    exit;
  }
}