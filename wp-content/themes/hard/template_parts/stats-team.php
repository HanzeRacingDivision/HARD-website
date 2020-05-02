<?php 

$total_members = get_query_var('total_members');

$total_members = (!empty(get_query_var('total_members'))) ? get_query_var('total_members') : wp_count_posts('members')->publish;

?>

<div class="stat">
    <p class="name">Total members</p>
    <p class="val"><?php echo $total_members; ?></p>
</div>
<div class="stat">
    <p class="name">Total hours</p>
    <p class="val"><?php echo '30.206'; // TODO: LINK TO SPREADSHEET ?></p>
</div>
<div class="stat">
    <p class="name">Total nationalities</p>
    <p class="val"><?php echo wp_count_terms('countries', 'hide_empty=true'); ?></p>
</div>