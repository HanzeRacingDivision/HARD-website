<?php get_header(); ?>

<div class="maxwidth">
    <section class="blog">

        <div class="blogposts">
            <?php

            global $wp_query;

            $blogposts = $wp_query->posts;

            foreach($blogposts as $post): ?>

                <?php get_template_part('template_parts/blogpost'); ?>
                
            <?php endforeach; ?>
        </div>

    </section>
</div>

<?php get_footer(); ?>