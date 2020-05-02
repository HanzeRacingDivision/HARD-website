<?php get_header(); 

$board_roles = get_field('board_member_roles', 'members');

$args = array(
    'posts_per_page' => -1,
    'post_type' => 'members',
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'roles',
            'field' => 'id',
            'terms' => $board_roles,
        )
    )
);

$board_query = new WP_Query( $args );

$args = array(
    'posts_per_page' => -1,
    'post_type' => 'members',
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'roles',
            'field' => 'id',
            'terms' => $board_roles,
            'operator' => 'NOT IN'
        )
    )
);

$the_query = new WP_Query( $args );

$board_members = $board_query->found_posts;
$other_members = $the_query->found_posts;

$total_members = $board_members + $other_members; // Saves another damn query

set_query_var( 'total_members', $total_members );

?>

<div class="maxwidth">
    <section class="members board-members">

        <?php 

            if ( $board_query->have_posts() ) :
                while ( $board_query->have_posts() ) : $board_query->the_post();
                    
                    get_template_part('template_parts/member', 'griditem');

                endwhile;
            endif;

        ?>

    </section>
</div>


<?php $team_photo = get_field('team_photo', 'members'); ?>
<section class="team-stats" style="background-image: url('<?php echo $team_photo['url']; ?>')">
    <div class="stats maxwidth">
        <?php get_template_part('template_parts/stats-team'); ?>
    </div>
</section>

<div class="maxwidth">

    <h1 class="center capitalize">Members</h1>

    <section class="members">

        <?php 

            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();

                    get_template_part('template_parts/member', 'griditem');

                endwhile;
            endif;

        ?>

    </section>
</div>

<?php get_footer(); ?>