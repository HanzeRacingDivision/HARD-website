<div class="blogposts">
    <?php

    $blogposts = get_posts(['post_type' => 'post', 'posts_per_page' => 3]);

    foreach($blogposts as $post): ?>
        <div class="blogpost">
            <a class="thumbnail" href="<?php echo $post->guid; ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post, 'large'); ?>');"></a>
            <h3><?php echo $post->post_title; ?></h3>
        </div>
    <?php endforeach; ?>
</div>