<?php
/**
 * remark functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package remark
 */

if ( ! defined( 'REMARK_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'REMARK_VERSION', '1.0.0' );
}

/**
 * Define Constants
 */
define( 'REMARK_THEME_DIR', trailingslashit( get_template_directory() ) );

/**
 * Load enqueue function
 */
require_once REMARK_THEME_DIR . '/inc/enqueue-scripts.php';

/**
 * Implement the Custom Header feature.
 */
require_once REMARK_THEME_DIR . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require_once REMARK_THEME_DIR . '/inc/template-tags.php';

/**
 * Load markup function
 */
require_once REMARK_THEME_DIR . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require_once REMARK_THEME_DIR . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require_once REMARK_THEME_DIR . '/inc/jetpack.php';
}

/**
 * Load markup function
 */
require_once REMARK_THEME_DIR . '/inc/markup.php';

/**
 * Walker menu.
 */
require_once REMARK_THEME_DIR . '/inc/class-remark-walker-menu.php';

/**
 * Functions and definitions.
 */
require_once REMARK_THEME_DIR . '/inc/class-remark-after-setup-theme.php';

/**
 * Load widget
 */
require_once REMARK_THEME_DIR . '/inc/widgets.php';

/**
 * Load breadcrumbs function
 */
require_once REMARK_THEME_DIR . '/inc/breadcrumbs.php';

/**
 * Load webfont loader
 */
require_once REMARK_THEME_DIR . '/inc/class-remark-webfont-loader.php';
