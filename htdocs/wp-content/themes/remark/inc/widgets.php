<?php
 /**
 * Register widget area.
 */
if ( ! function_exists( 'remark_widgets_init' ) ) {

    /**
     * Register widget area.
     *
     * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
     */
    function remark_widgets_init() {
        register_sidebar(
            array(
                'name'          => esc_html__( 'Sidebar', 'remark' ),
                'id'            => 'sidebar-1',
                'description'   => esc_html__( 'Add widgets here.', 'remark' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
    
        register_sidebar(
            array(
                'name'          => esc_html__( 'Footer widget', 'remark' ),
                'id'            => 'footer-widget',
                'description'   => esc_html__( 'Add widgets here.', 'remark' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
    }
    add_action( 'widgets_init', 'remark_widgets_init' );
}

