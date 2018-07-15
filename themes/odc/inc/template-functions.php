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
	if ( ! is_page_template ('home.php') ) {
		return;
	}
	$image = CFS()->get ('star_background');
	if ( ! $image ) {
		return;
	}
	$hero_css = ".stary-nights {
		background:
		linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
		url({$image}) no-repeat center bottom;
		background-size: cover, cover;
		}";
		wp_add_inline_style('odc-style', $hero_css);
}
add_action('wp_enqueue_scripts', 'odc_dynamic_css');