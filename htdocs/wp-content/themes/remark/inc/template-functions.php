<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package remark
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function remark_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	$remark_enable_bradcrumb = get_theme_mod( 'remark_enable_breadcrumb', 'hide' );
	if ( $remark_enable_bradcrumb === 'show' ) {
		$classes[] = 'remark-breadcrumb-active';
	}

	return $classes;
}
add_filter( 'body_class', 'remark_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function remark_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'remark_pingback_header' );