<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
	<![endif]-->

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/html5shiv.js"></script>
	<![endif]-->

    <script type="text/javascript">var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';</script>
	
    <?php wp_head(); ?>

</head>

<body <?php body_class() ?>>


<header id="header" <?php if(get_field('custom_header_image')){ echo 'class="custom-header" style="background-image: url(\''.get_field('custom_header_image')['sizes']['large'].'\')"'; } ?>>

	<div id="top-bar">
		<a class="logo" href="<?php echo home_url(); ?>">
			<img src="<?php echo bloginfo('template_url') . '/img/logos/hard-blue.svg'; ?>">
		</a>

		<img id="hamburger" src="<?php echo bloginfo('template_url') . '/img/hamburger.svg'; ?>">
		
		<nav id="main-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'container' => false ) ); ?>
		</nav>
	</div>

	<?php if(is_front_page()): ?>

		<?php get_template_part('template_parts/header-content', 'home'); ?>

	<?php else: ?>

		<?php get_template_part('template_parts/header-content'); ?>

	<?php endif; ?>

</header>
