<?php

global $post;

$q_object = get_queried_object();

$field_location = is_archive() ? $q_object->name : $post->ID;

$cta = get_field('cta_btn', $field_location);

?>

<section class="header-content maxwidth">
    
    <h1 class="capitalize"><?php the_field('page_title', $field_location); ?></h1>
    
    <p><?php the_field('intro_text', $field_location); ?></p>
    
    <?php if(!empty($cta['url']) && !empty($cta['title'])): ?>

        <a class="btn" href="<?php echo $cta['url']; ?>" href="<?php echo $cta['target']; ?>">
            <?php echo $cta['title']; ?>
        </a>
        
    <?php endif; ?>
</section>