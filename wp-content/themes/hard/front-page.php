<?php get_header(); ?>

<div class="maxwidth">
    <section class="home-blocks">
        <?php 
        $home_blocks = get_field('blocks');

        foreach($home_blocks as $block):

        endforeach;
        ?>
    </section>

    <section class="sponsors-listing">
        <h2 class="capitalize">Our partners</h2>

    </section>

    <section class="blog-and-updates">
        <h2 class="capitalize">Blog and updates</h2>
    </section>
</div>


<?php get_footer(); ?>