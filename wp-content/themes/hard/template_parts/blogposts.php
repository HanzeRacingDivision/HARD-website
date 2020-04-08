<div class="blogposts">
    <?php

    $blogposts = get_posts(['post_type' => 'post', 'posts_per_page' => 3]);

    foreach($blogposts as $post): ?>

        <?php get_template_part('template_parts/blogpost'); ?>
        
    <?php endforeach; ?>
</div>