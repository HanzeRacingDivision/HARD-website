<?php get_header(); ?>

<div class="maxwidth">
    <section class="home-blocks">
        <?php 
        $home_blocks = get_field('blocks', 'option');

        foreach($home_blocks as $block): ?>
            <div class="home-block home-section">
                <img src="<?php echo $block['image']['sizes']['large']; ?>">
                <div class="content">
                    <h2 class="capitalize"><?php echo $block['title']; ?></h2>
                    <p><?php echo $block['text']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </section>



    <section class="sponsor-list home-section">
        <h2 class="capitalize">Our partners</h2>

        <div class="sponsor-slider">
            <?php

            $sponsors = get_posts(['post_type' => 'sponsors', 'posts_per_page' => -1]);

            foreach($sponsors as $sponsor): ?>
                <a class="sponsor" href="<?php echo $sponsor->guid; ?>">
                    <img src="<?php echo get_the_post_thumbnail_url($sponsor, 'medium'); ?>">
                </a>
            <?php endforeach; ?>
        </div>
    </section>



    <section class="blog-and-updates home-section">
        <h2 class="capitalize">Blog and updates</h2>

        <?php get_template_part('template_parts/blogposts'); ?>

    </section>
</div>


<?php get_footer(); ?>