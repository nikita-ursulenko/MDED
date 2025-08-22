<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package remark
 */

get_header();
?>

	<main id="primary" class="site-main container">

		<section class="error-404 not-found my-24 px-8 md:px-10 lg:px-16 text-center">

			<header class="page-header">
				<h1 class="page-title text-7xl md:text-7xl lg:text-9xl font-black pb-16 font-bold text-[#fa2626]"><?php esc_html_e( '404', 'remark' ); ?></h1>
				<h4 class="page-title text-2xl md:text-4xl lg:text-4xl pb-4 font-bold mb-2 text-slate-800"><?php esc_html_e( 'Oops!Page Not Found', 'remark' ); ?></h4>
				<p class="font-medium text-[#404040] text-lg leading-7 pb-2"><?php esc_html_e( 'It looks like nothing was found at this location.', 'remark' ); ?></p>
			</header><!-- .page-header -->
			
			<a class="inline-block mt-2.5 text-sm font-semibold bg-[#BB0000] hover:bg-red-800 hover:text-white visited:text-white text-white p-3 px-4 rounded" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Return Home Page', 'remark' ); ?></a>

		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
