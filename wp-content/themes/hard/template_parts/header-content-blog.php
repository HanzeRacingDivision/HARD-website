<?php

global $post;

$q_object = get_queried_object();

$field_location = is_archive() ? $q_object->name : $post->ID;

$cta = get_field('cta_btn', $field_location);

$is_empty = (empty(get_field('intro_text', $field_location)) && empty($cta['url']));;

?>

<section class="header-content maxwidth <?php if($is_empty) echo 'empty'; ?>">
    
    <h1 class="capitalize">Blog and updates</h1>
    
</section>