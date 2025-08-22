<?php 
    /**
     * Post content.
    */
    if ( ! function_exists( 'remark_blog_post' ) ) {

        /**
         * Post content.
         *
         * @since 1.0.0
         */
        function remark_blog_post() {
            
            ?>
                <?php 
                    /**
                     * @func remark_feature_image
                    */
                    remark_feature_image()
                    
                ?>
                <div class="px-7 pt-6 pb-4">
                    
                    
                    <?php 
                        /**
                         * @func remark_post_title
                        */
                        remark_post_title();
                        
                    ?>
                
                    <ul class="gap-10 mb-2 post-meta mt-4">
                        <?php 
                            /**
                             * @func post_author
                             * @func remark_post_date
                             * @func remark_post_comment
                             * @func remark_post_category
                            */
                            do_action( 'remark_post_meta' );
                        ?>	
                    </ul>
                    <?php 
                        /**
                         * @func remark_post_content
                        */
                        remark_post_content();
                    ?>
                </div>
            <?php

        }
    }
    add_action( 'remark_post_action', 'remark_blog_post' );

    /**
     * Post title
     */
    function remark_post_title() {
        $remark_post_title = get_theme_mod( 'remark_blog_post_title_tag', true );
        ?>
            <?php if ( ! empty ( $remark_post_title ) ) { ?>
                <?php if ( get_the_title() ) : ?>
                    <h2 class="text-3xl leading-[45px] font-bold mb-2"><a class="break-all	font-bold text-[#222] visited:text-[#222] hover:text-[#BB0000]" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                <?php endif; ?>
                <?php if ( is_sticky() ) echo '<span class="sticky-post">' . __( 'Sticky post', 'remark' ) . '</span>'; ?>
            <?php } ?>
        <?php
    }

    /**
     * Post meta
     */
    function remark_post_meta() {
        $remark_comment = get_theme_mod( 'remark_blog_post_comment', false );
        $remark_author = get_theme_mod( 'remark_blog_post_author', true );
        $remark_publish_date = get_theme_mod( 'remark_blog_post_publish_date', true );
        $remark_postcategory = get_theme_mod( 'remark_blog_post_category', false );
        
        /**
         * author
         */
        if ( ! empty( $remark_author ) ) {
            post_author();
        }

        /**
         * post date
         */
        if ( ! empty( $remark_publish_date ) ) {
            remark_post_date();
        }

        /**
         * post comment
         */
        if ( ! empty( $remark_comment ) ) {
            remark_post_comment();
        }

        /**
         * post category
         */
        if ( ! empty( $remark_postcategory ) ) {
            remark_post_category();
        }
    }
    add_action( 'remark_post_meta', 'remark_post_meta' );

    /**
     * Post author
     */
    function post_author() {
        ?>
            <li>
                <a class="mb-8 md:mb-0 lg:mb-0 flex items-center text-sm font-medium text-[#818181] visited:text-[#818181] hover:text-[#BB0000]" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                        <i class="fa fa-user mr-2 text-[#818181]"></i>
                        <span class="text-sm">
                            <?php 
                                    global $current_user; wp_get_current_user();
                                    echo esc_html( get_the_author() );
                            
                            ?>
                        </span>
                </a>
            </li>
        <?php
    }

    /**
     * Post date
     */
    function remark_post_date() {
        ?>
            <li class="text-sm mb-4 md:mb-0 lg:mb-0 font-medium text-[#818181] visited:text-[#818181]">
                <span class="mr-2">
                    <i class="far fa-clock text-[#818181]"></i>
                </span>
                <?php echo esc_html( get_the_date( 'M j, Y' ) ); ?>
            </li>
        <?php
    }

    /**
     * Post comment
     */
    function remark_post_comment() {
        ?>
            <li class="mb-4 md:mb-0 lg:mb-0 text-sm font-medium text-[#818181] visited:text-[#818181] hover:text-[#BB0000]">
                <i class="fa-solid fa-comment mr-2 text-[#818181]"></i>
                <?php 
                    if ( comments_open() ) {
                            comments_popup_link( '0', '1', '%', 'post-comments' );
                    } ?>
            </li>
        <?php
    }

    /**
     * Post category
     */
    function remark_post_category() {
        ?>
            <li class="post-category">
                <?php

                    $category = get_the_category();
                    $category_link = get_category_link( $category[0]->term_id );
                    echo '<span><a class="text-sm font-medium bg-[#BB0000] visited:text-white uppercase ml-0 md:ml-4 lg:ml-4 py-1 px-3" href="'. esc_url( $category_link ) .'">' . $category[0]->cat_name . '</a></span>';

                ?>
            </li>
        <?php
    }

    /**
     * Post content
     */
    function remark_post_content() {
        $remark_show_content = get_theme_mod( 'remark_post_content_show', true );
        $remark_post_content = get_theme_mod( 'remark_blog_post_content_option', 'excerpt' );
        ?>
            <?php if ( ! empty( $remark_show_content ) ) { ?>
            <div class="entry-content font-medium text-[#3a3a3a] leading-7">
                <?php
                    
                        if ( 'excerpt' == $remark_post_content ) {

                            the_excerpt();
                            echo '<a class="inline-block mb-4 mt-2.5 text-sm font-semibold bg-[#BB0000] hover:bg-red-800 hover:text-white visited:text-white text-white p-2 rounded" href="' . esc_url( get_permalink() ) . '">' . esc_html__( 'Read More', 'remark' ) . '</a>'; 
                        } else {
        
                            the_content(
                                sprintf(
                                    wp_kses(
                                        /* translators: %s: Name of current post. Only visible to screen readers */
                                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'remark' ),
                                        array(
                                            'span' => array(
                                                'class' => array(),
                                            ),
                                        )
                                    ),
                                    wp_kses_post( get_the_title() )
                                )
                            );
        
                        }
                        
                ?>
            </div><!-- .entry-content -->
            <?php } ?>
            
        <?php
    }

    function remark_feature_image() {
        $remark_feature_image = get_theme_mod( 'remark_blog_post_feature_image', true );

        if ( ! empty ( $remark_feature_image ) ) {
            if ( has_post_thumbnail() ) {
                remark_post_thumbnail();
            }
        }
    }

    /**
     * Theme header.
     */
    if ( ! function_exists( 'remark_header' ) ) {
        /**
         * Theme header.
         *
         * @since 1.0.0
         */
        function remarK_header() {
            ?>
                <header id="masthead" class="site-header bg-white py-2">
                    <div class="container mx-auto">
                        <div class="menu-wrap flex-none md:flex lg:flex items-center gap-12 py-4 md:py-0 lg:py-0 items-center">
                            <?php 
                                /**
                                 * Site logo.
                                 *
                                 * @since 1.0.0
                                 */
                                remark_site_logo();

                                /**
                                 * Header navigation.
                                 *
                                 * @since 1.0.0
                                 */
                                remark_navigation();

                                /**
                                 * Header cart.
                                 *
                                 * @since 1.0.0
                                 */
                                remark_header_right();

                            ?>
                        </div>
                    </div>
                </header><!-- #masthead -->
            <?php

            get_template_part( 'inc/mobile-menu' );	

        }
    }
    add_action( 'remark_header_action', 'remark_header' );

    /**
     * Site logo
     */
    if ( ! function_exists( 'remark_site_logo' ) ) {
        /**
         * Site logo
         *
         * @since 1.0.0
         */
        function remark_site_logo() {
            ?>
                <div class="site-branding w-1/2 md:w-1/5 lg:w-1/5">
                    <?php
                    the_custom_logo();
                    if ( is_front_page() && is_home() ) :
                        ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php
                    else :
                        ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php
                    endif;
                    $remark_description = get_bloginfo( 'description', 'display' );
                    if ( $remark_description || is_customize_preview() ) :
                        ?>
                        <p class="site-description"><?php echo $remark_description; ?></p>
                    <?php endif; ?>
                </div><!-- .site-branding -->

                <button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
                    <span class="toggle-inner">
                        <span class="toggle-icon">
                            <i class="fa-solid fa-list"></i>
                        </span>
                    </span>
                </button><!-- .nav-toggle -->
            <?php
        }
        
    }

    /**
     * Navigation
     */
    if ( ! function_exists( 'remark_navigation' ) ) {
        /**
         * Navigation
         *
         * @since 1.0.0
         */
        function remark_navigation() {
            ?>

                <nav id="site-navigation" class="w-full md:w-3/4 lg:w-3/4" aria-label="<?php esc_attr_e( 'Horizontal', 'remark' ); ?>" role="navigation">
                    <?php
                    if ( has_nav_menu( 'primary' ) ) {
                        wp_nav_menu(
                            array(
                                'container_id'    => 'primary-menu',
                                'container_class' => 'mt-4 p-4 md:mt-0 lg:mt-0 md:p-0 lg:p-0 lg:block',
                                'menu_class'      => 'nav-menu gap-1.5 flex-none md:flex lg:flex flex-nowrap md:flex-wrap lg:flex-wrap lg:-mx-4 list-none m-0',
                                'theme_location'  => 'primary',
                                'li_class'        => 'lg:mx-4',
                                'fallback_cb'     => false,
                                'depth'           => 3,
                                'a_class'     		=> 'text-sm text-[#222] visited:text-[#222] active:text-[#222] hover:text-[#BB0000] font-semibold uppercase pr-5',
                            )
                        );
                    } else {
                        ?>
                            <ul class="remark__default-menu">
                                <?php 
                                    wp_list_pages(
                                        array(
                                            'match_menu_classes' => true,
                                            'show_sub_menu_icons' => true,
                                            'title_li' => false,
                                            'walker'   => new Remark_Walker_Page(),
                                        )
                                    );
                                ?>
                            </ul>
                        <?php
                    }
                    
                    ?>
                </nav><!-- #site-navigation -->
            <?php
        }
    }

    /**
     * Header cart
     */
    if ( ! function_exists( 'remark_header_right' ) ) {
        /**
         * Navigation
         *
         * @since 1.0.0
         */
        function remark_header_right() {
            if ( class_exists( 'WooCommerce' ) ) { 
                $header_cart = get_theme_mod( 'remark_header_cart', 'hide' );
                $header_myaccount = get_theme_mod( 'remark_header_my_account', 'hide' );

                ?>
                    <div class="remark-header-cart">
                        <?php if ( $header_myaccount === 'show' ) : ?>
                        <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
                            <i class="fa-solid fa-user"></i>
                        </a>
                        <?php endif; ?>
                        
                        <?php if ( $header_cart === 'show' ) : ?>
                        <div class="min-cart">
                            <a href="<?php echo wc_get_cart_url(); ?>">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <div class="cart-item">
                                    <span><?php echo WC()->cart->get_cart_contents_count() ?></span>
                                </div>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>  
                <?php
            }
            
        }
    }


    /**
     * Footer inside
     */
    if( ! function_exists( 'remark_footer_inside' ) ) {
        /**
         * Footer
         *
         * @since 1.0.0
         */
        function remark_footer_inside() {
            ?>
                <footer id="colophon" class="site-footer">
                    
                        <?php 
                            /**
                             * remark_footer_widget_content hook.
                             *
                             */
                            do_action( 'remark_footer_widget_content' );

                        ?>
                    
                    
                        <?php 
                            /**
                             * remark_footer_copyright_content hook.
                             *
                             * * @hooked remark_footer_copyright_content (outputs the HTML for the Theme Options footer copyright text)
                             *
                             */
                            do_action( 'remark_footer_copyright_content' );
                            
                        ?>
                </footer><!-- #colophon -->
            <?php
        }
    }
    add_action( 'remark_footer', 'remark_footer_inside' );

    /**
     * Footer Widget
     */
    if ( ! function_exists( 'remark_footer_widget' ) ) {
        /**
         * Footer Widget
         *
         * @since 1.0.0
         */
        function remark_footer_widget() {
            if ( ! is_active_sidebar( 'footer-widget' ) ) {
                return;
            }
            ?>
                <div class="bg-[#111111] py-20">
                    <div class="container mx-auto">
                        <div class="remark__widget-area justify-between gap-0 md:gap-8 lg:gap-8">
                            <?php 
                            
                                if ( is_active_sidebar( 'footer-widget' ) ) {
                                    dynamic_sidebar( 'footer-widget' );
                                    
                                }

                            ?>
                        </div>
                    </div>
                </div>
            <?php
        }
    }
    add_action( 'remark_footer_widget_content', 'remark_footer_widget' );

    /**
     * Footer Copyright
     */
    if ( ! function_exists( 'remark_footer_copyright' ) ) {
        /**
         * Footer Copyright
         *
         * @since 1.0.0
         */
        function remark_footer_copyright() {
            ?>
                <div class="site-info bg-[#0B0B0B] py-8">
                    <div class="container mx-auto text-center text-gray-400	">
                        <p class="mb-0">
                            <?php

                                echo date_i18n(
                                        _x( '©Y', 'copyright date format', 'remark' )
                                );

                                ?>
                                <span>
                                <?php echo bloginfo('name'); ?>
                                <?php printf( __( '/ Designed & Built by', 'remark' ) ); ?>
                                </span>
                                <a class="text-sky-500 hover:text-white visited:text-white ml-1" href="<?php echo esc_url( __( 'https://www.wpfound.com/', 'remark' ) ); ?>" target='_blank'><?php printf( __( 'WPFound', 'remark' ) ); ?></a>
                        </p>
                    </div><!-- .site-info -->
                </div>
            <?php
        }
    }
    add_action( 'remark_footer_copyright_content', 'remark_footer_copyright' );

?>