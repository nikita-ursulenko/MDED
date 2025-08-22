<?php
/**
 * Displays the menu icon and modal
 *
 * @package remark
 * @since 1.0.0
 */

?>

<div class="menu-modal remark__mobile-menu card-modal" data-modal-target-string=".menu-modal">

	<div class="menu-modal-inner modal-inner">

		<div class="menu-wrapper section-inner">

			<div class="menu-top">

				<button class="toggle close-nav-toggle fill-children-current-color" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".menu-modal">
					<span class="toggle-text"><?php _e( 'Close Menu', 'remark' ); ?></span>
					<i class="fa-solid fa-xmark"></i>
				</button><!-- .nav-toggle -->

				<nav class="mobile-menu pr-4" aria-label="<?php esc_attr_e( 'Mobile', 'remark' ); ?>" role="navigation">

					<ul class="modal-menu">

						<?php
							wp_nav_menu(
								array(
									'container'      => '',
									'items_wrap'     => '%3$s',
									'show_toggles'   => true,
									'theme_location' => 'primary',
								)
							);

						?>

					</ul>

				</nav>

			</div><!-- .menu-top -->

		</div><!-- .menu-wrapper -->

	</div><!-- .menu-modal-inner -->

</div><!-- .menu-modal -->
