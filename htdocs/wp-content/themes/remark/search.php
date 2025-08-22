<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package remark
 */

get_header();

?>

	<main id="primary" class="site-main">
		<div class="remark-search-wrap flex-none md:flex lg:flex gap-9 pt-16 pb-10 md:pb-16 lg:pb-24">
			<div class="remar-search-content w-full md:w-8/12 lg:w-8/12 mx-auto">
				<?php if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : 
						the_post(); 
						?>

						<?php get_template_part( 'template-parts/content', 'search' ); ?>

					<?php endwhile; ?>

					<?php 
					the_posts_pagination( array(
						'prev_text' => __( 'Prev', 'remark' ),
						'next_text' => __( 'Next', 'remark' ),
					) ); 
					?>

				<?php else : ?>

					<?php 
					get_template_part( 'template-parts/content', 'none' ); 
					?>

				<?php endif; ?>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
