<?php
/**
 * Breadcrumbs
 */
if ( ! function_exists( 'remark_breadcrumbs' ) ) {
	/**
	 * Breadcrumbs
	 *
	 * @since 1.0.0
	 */
	function remark_breadcrumbs() {
		$remark_enable_bradcrumb = get_theme_mod( 'remark_enable_breadcrumb', 'hide' );

		if ( $remark_enable_bradcrumb === 'show' ) {
			?>
				<div class="remark-breadcrumbs py-16 md:py-20 lg:py-20 bg-[#17222b] -mt-4 mb-4 text-center">
					<div class="container mx-auto">
						<div class="!text-white text-[16px]">
							<?php 
								$home_link = '<i class="fa-solid fa-house text-[#bb0000] mr-1 text-[15px]"></i><a class="text-white visited:text-white hover:text-[#bb0000]" href="' . esc_url( home_url() ) . '" rel="nofollow">' . esc_html( 'Home', 'remark' ) . '</a>';

								if ( is_home() ) {
									echo '<h1 class="m-0 text-4xl md:text-6xl lg:text-6xl">' . esc_html( 'Blog', 'remark' ) . '</h1>';
								} else {

									if ( is_archive() ) {
										if ( is_shop() ) {
											woocommerce_breadcrumb();
										} elseif ( is_product_category() ) {
											woocommerce_breadcrumb();
										} elseif ( is_product_tag() ) {
											woocommerce_breadcrumb();
										}
										else {
											echo '<h1 class="mt-0 mb-6 text-4xl md:text-6xl lg:text-6xl">' . esc_html( 'Blog', 'remark' ) . '</h1>';
										}

										

										if ( is_category() ) {
										
											echo $home_link;
											echo '<i class="fa-solid fa-angles-right mx-2 text-xs text-white"></i>';
											$category = get_the_category();
											echo 'Category: <span class="capitalize">' . $category[0]->cat_name . '</span>';
											
										}
										if (  is_tag() ) {
											
											echo $home_link;
											echo '<i class="fa-solid fa-angles-right mx-2 text-xs"></i>';
											$tag = get_the_tags();
											echo 'Tag: <span class="capitalize">' . $tag[0]->name . '</span>';
											
										}
										if ( is_author() ) {
											
											echo $home_link;
											echo '<i class="fa-solid fa-angles-right mx-2 text-xs"></i>';
											$tag = get_the_tags();
											echo 'Author: <span>' . get_the_author() . '</span>';
										}
									}
									
									if ( is_single() ) {
										if ( is_product() ) {
											woocommerce_breadcrumb();
										}
										 else {
											echo '<h1 class="mt-0 mb-6 text-4xl md:text-6xl lg:text-6xl">' . esc_html( 'Blog', 'remark' ) . '</h1>';
											echo $home_link;
											echo '<i class="fa-solid fa-angles-right mx-2 text-xs text-white"></i>';
											$category = get_the_category();
											if ( $category ) {
												$cat_link = get_category_link( $category[0]->term_id );
												echo '<a class="visited:text-white text-white hover:text-[#bb0000]" href="' . esc_url( $cat_link ) . '">' . esc_html( $category[0]->cat_name ) . '</a>';
											}
										}

									} 
									if( is_page() ) {
										the_title( '<h1 class="entry-title !text-white mb-2 mt-0 text-4xl md:text-6xl lg:text-6xl">', '</h1>' );

									} 
									if ( is_search() ) {
										echo '<h1 class="text-4xl md:text-6xl lg:text-6xl"> Search Results</h1>';
									}

								}
								
								
							?>
						</div>
					</div>
				</div>
			<?php
		}
	}
}
