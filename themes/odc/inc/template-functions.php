<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package outdoorCollective
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function odc_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'odc_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function odc_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'odc_pingback_header' );

/**
 * Make hero image customizable through CFS field or featured image.
 */
function odc_dynamic_css() {
	switch(true) {
		case is_page( 'Home' ):
		$hero = CFS()->get('hero_background');
		$urlHome = CFS()->get('stary_background');
		$adventure = CFS()->get('adventure_photo');
		$custom_css = "
					.hero-banner {
						background:
						linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
						url({$hero}) no-repeat center bottom;
						background-size: cover, cover; 
					}
					.stary-nights {
					background:
					linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
					url({$urlHome}) no-repeat center bottom;
					background-size: cover, cover; 
				}
					.adventure-photos {
						background:
						linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
						url({$adventure}) no-repeat center bottom;
						background-size: cover, cover;	
				};";
					break;
					default:
					$custom_css = "";
					break;
	}
	wp_add_inline_style('odc-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'odc_dynamic_css');
