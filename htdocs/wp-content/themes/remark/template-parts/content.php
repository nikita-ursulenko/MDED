<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package remark
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white mb-8 remark__post-item' ); ?>>
	<?php 
		/**
		 * @func remark_post_action
		*/
		do_action( 'remark_post_action' );
	?>
</article><!-- #post-<?php the_ID(); ?> -->
