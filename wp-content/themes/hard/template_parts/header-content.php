<?php

global $post;

$q_object = get_queried_object();

$field_location = is_archive() ? $q_object->name : $post->ID;

$cta = get_field('cta_btn', $field_location);

$is_empty = (empty(get_field('intro_text', $field_location)) && empty($cta['url']));;

?>

<section class="header-content maxwidth <?php if($is_empty) echo 'empty'; ?>">
    
    <h1 class="capitalize"><?php the_field('page_title', $field_location); ?></h1>
    
    <p><?php the_field('intro_text', $field_location); ?></p>
    
    <?php if(!empty($cta['url']) && !empty($cta['title'])): ?>

        <a class="btn header-cta" href="<?php echo $cta['url']; ?>" href="<?php echo $cta['target']; ?>">
            <?php echo $cta['title']; ?>
        </a>
        
    <?php endif; ?>
</section>