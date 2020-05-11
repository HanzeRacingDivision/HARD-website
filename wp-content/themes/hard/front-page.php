<?php get_header(); ?>

<div class="maxwidth">
    <section class="home-blocks">
        <?php 
        $home_blocks = get_field('blocks', 'option');

        foreach($home_blocks as $block):
        
            $link = $block['url'];

            if($link): ?>
                <a class="home-block home-section" href="<?php echo $block['url']['url']; ?>">
            <?php else: ?>
                <div class="home-block home-section">
            <?php endif; ?>
                
                <img src="<?php echo $block['image']['sizes']['large']; ?>">
                
                <div class="content">
                    <h2 class="capitalize"><?php echo $block['title']; ?></h2>
                    <p class="txt"><?php echo $block['text']; ?></p>

                    <div class="extra-content">
                        <?php if($block['extra_content_type'] == 'team_stats'): ?>
                            
                            <div class="stats">
                                <?php get_template_part('template_parts/stats-team'); ?>
                            </div>

                        <?php elseif($block['extra_content_type'] == 'custom_stats'): ?>

                            <div class="stats">
                                <?php foreach($block['custom_stats'] as $stat): ?>
                                    <div class="stat">
                                        <p class="name"><?php echo $stat['name']; ?></p>
                                        <p class="val"><?php echo $stat['value']; ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        
                        <?php endif; ?>
                    </div>

                </div>

            <?php if($link): ?>
                </a>
            <?php else: ?>
                </div>
            <?php endif; ?>

        <?php endforeach; ?>
    </section>



    <section class="sponsor-list home-section">
        <h2 class="capitalize">Our partners</h2>

        <div class="sponsor-slider">
            <?php

            $sponsors = get_posts(['post_type' => 'sponsors', 'posts_per_page' => -1]);

            foreach($sponsors as $sponsor): ?>
                <a class="sponsor" href="<?php echo '/sponsors'; //$sponsor->guid; ?>">
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