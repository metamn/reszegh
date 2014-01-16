<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- The stylesheet via Compass and SASS -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/print.css" media="print" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]>
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
<div>
	<header>
		<div>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2><?php bloginfo( 'description' ); ?></h2>
			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>
		<div>
				<?php get_search_form(); ?>
		</div>
	</header>

	<div>
