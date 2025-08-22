<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package remark
 */

?>
	</div>
	<!-- container -->
	
	<?php 
		/**
		 * remark_footer hook.
		 *
		 * @since 1.0.0
		 *
		 */
		do_action( 'remark_footer' );
	
	?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
