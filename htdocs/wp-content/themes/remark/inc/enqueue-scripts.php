<?php 
    /**
     * Enqueue scripts and styles.
     */
    function remark_scripts() {
        wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/css/fontawesome.css', array(), REMARK_VERSION );
        wp_enqueue_style( 'master-style', get_template_directory_uri() . '/assets/css/master.css', array(),  REMARK_VERSION);

        // Load webfont url.
        wp_enqueue_style(
            'remark-webfont',
            remark_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap' ),
            array(),
            REMARK_VERSION
        );

        wp_enqueue_style( 'remark-style', get_stylesheet_uri(), array(), REMARK_VERSION );

        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'remark-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), REMARK_VERSION, true );
        wp_enqueue_script( 'remark-accessibility', get_template_directory_uri() . '/assets/js/accessibility.js', array(), REMARK_VERSION, true );
        wp_enqueue_script( 'remark-script', get_template_directory_uri() . '/assets/js/script.js', array(), REMARK_VERSION );

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'remark_scripts' );

    /**
     * Enqueue customizer stylesheet.
     */
    function remark_enqueue_customizer_style() {

        wp_register_style( 'remark-customizer', get_template_directory_uri() . '/assets/css/customizer.css', null, null, 'all' );
        wp_enqueue_style( 'remark-customizer' );

    }
    add_action( 'customize_controls_print_styles', 'remark_enqueue_customizer_style' );
?>