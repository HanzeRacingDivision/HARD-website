<?php get_header(); ?>

<div class="maxwidth">

    <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>

                <article>
                    <h1 class="capitalize"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </article>

            <?php endwhile;
        endif;
    ?>

</div>

<?php get_footer(); ?>