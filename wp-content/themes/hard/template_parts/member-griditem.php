<?php

$roles = get_the_terms( $post, 'roles' );

$role = !empty( $roles ) ? array_pop( $roles )->name : 'Member';

$profile_pic = has_post_thumbnail()
    ? get_the_post_thumbnail_url( $post, 'medium' ) 
    : get_stylesheet_directory_uri() . '/img/stig.jpg';

?>

<div class="member">

    <img src="<?php echo $profile_pic; ?>">
    
    <p class="name"><?php the_title(); ?></p>
    
    <p class="role"><?php echo $role; ?></p>
    
</div>
