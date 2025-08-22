<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package remark
 */

get_header();

$remark_post_layout = get_theme_mod( 'remark_blog_post_layout_option', 'one-column' );

if ( 'one-column' == $remark_post_layout ) {
	$remark_post_layout = 'w-full';
} else {
	$remark_post_layout = 'w-full md:w-full lg:w-1/2';
}

?>

	<main id="primary" class="site-main pb-12">
		<div class="flex-none md:flex lg:flex gap-9 pt-8 md:pt-12 lg:pt-16">
			<div class="w-full md:w-3/4 lg:w-3/4">
				<div class="flex-none md:flex lg:flex flex-wrap -ml-3.5 -mr-3.5">
					<?php if ( have_posts() ) : ?>

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						
						?>
							<div class="<?php echo $remark_post_layout; ?> pl-3.5 pr-3.5">
							
								<?php get_template_part( 'template-parts/content', get_post_type() ); ?>

							</div>
						<?php

					endwhile;

					the_posts_pagination();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>
			</div>
			<div class="w-full md:w-1/4 lg:w-1/4 pt-8 md:pt-0 lg:pt-0">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
