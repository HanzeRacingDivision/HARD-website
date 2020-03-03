<?php get_header(); 

$featured_sponsors = get_field('featured_sponsors', 'sponsors');

$args = array(
    'posts_per_page' => -1,
    'post_type' => 'sponsors',
    'post__in' => $featured_sponsors
);

$featured_query = new WP_Query( $args );

?>

<div class="maxwidth">
    <section class="sponsors-featured maxwidth">

        <?php 

            if ( $featured_query->have_posts() ) :
                while ( $featured_query->have_posts() ) : $featured_query->the_post();
                    
                    get_template_part('template_parts/sponsor', 'featured');

                endwhile;
            endif;

        ?>

    </section>
</div>

<?php

$args = array(
    'posts_per_page' => -1,
    'post_type' => 'sponsors',
    'post__not_in' => $featured_sponsors
);

$the_query = new WP_Query( $args );

?>

<div class="maxwidth">
    <section class="sponsors-grid">

        <?php 

            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                    
                    get_template_part('template_parts/sponsor', 'griditem');
                    get_template_part('template_parts/sponsor', 'griditem');
                    get_template_part('template_parts/sponsor', 'griditem');
                    get_template_part('template_parts/sponsor', 'griditem');

                endwhile;
            endif;

        ?>

    </section>
</div>

<?php get_footer(); ?>