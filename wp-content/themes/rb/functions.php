<?php
function rb_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'rb' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'rb_wp_title', 10, 2 );

/*function rb_scripts() {
	// Load our main stylesheet.
	wp_enqueue_style( 'rb-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'rb-ie', get_template_directory_uri() . '/assets/css/ie.css', array( 'rb-style', 'genericons' ), '20131205' );
	wp_style_add_data( 'rb-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'rb_scripts' );*/
