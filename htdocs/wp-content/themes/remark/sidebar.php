<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package remark
 */

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		?>
			<aside id="secondary" class="widget-area">
				<section class="widget">
					<?php get_search_form(); ?>
				</section>
				<section class="widget">
					<h2 class="widget-title"><?php esc_html_e( 'Archives', 'remark' ); ?></h2>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</section>
			</aside>
		<?php
	}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
