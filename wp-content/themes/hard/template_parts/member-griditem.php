<?php

$roles = get_the_terms( $post, 'roles' );

$role = !empty( $roles ) ? array_pop( $roles )->name : 'Member';

?>

<div class="member">
    <img src="<?php echo get_the_post_thumbnail_url( $post, 'medium' ); ?>" alt="">
    
    <p class="name"><?php the_title(); ?></p>
    
    <p class="role"><?php echo $role; ?></p>
    
</div>
