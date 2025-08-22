<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package remark
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white remark__post-item' ); ?>>
	<?php remark_post_thumbnail(); ?>
	<div class="px-6 pt-4 pb-8 mb-8">
		<header class="entry-header mb-2">
			<?php the_title( sprintf( '<h2 class="text-2xl font-bold mb-2"><a class="text-slate-800 visited:text-slate-800 hover:text-red-700" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php
				remark_posted_on();
				remark_posted_by();
				?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="font-medium text-[#3a3a3a] leading-7 mt-4">
			<?php echo wp_trim_words( get_the_content(), 45 ); ?>
			<div class="mt-8">
				<a class="inline-block mb-4 mt-2.5 text-sm font-semibold bg-[#BB0000] hover:bg-red-800 hover:text-white visited:text-white text-white p-2 rounded" href="<?php echo esc_url( the_permalink() ); ?>"><?php echo esc_html_e( 'Read More', 'remark' ); ?></a>
			</div>
		</div><!-- .entry-summary -->
	</div>
	
</article><!-- #post-<?php the_ID(); ?> -->
