<?php
/**
 * remark Theme Customizer
 *
 * @package remark
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function remark_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'remark_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'remark_customize_partial_blogdescription',
			)
		);
	}

	/*==========================
	Blog Settings
	==========================*/
	  /* Blog Options */
		$wp_customize->add_panel( 'remark_blog_option_panel', 
			array(
					//'priority'       => 100,
					'title'            => __( 'Remark: Blog / Archive', 'remark' ),
					'priority'    => 40,
			) 
		);

		$wp_customize->add_section( 'remark_blog_post_structure', 
				array(
						'title'         => __( 'Post Structure', 'remark' ),
						'priority'      => 1,
						'panel'         => 'remark_blog_option_panel'
				) 
		);

		$wp_customize->add_section( 'remark_blog_post_title_meta', 
				array(
						'title'         => __( 'Meta', 'remark' ),
						'priority'      => 1,
						'panel'         => 'remark_blog_option_panel',
				) 
		);

		$wp_customize->add_section( 'remark_blog_post_content', 
				array(
						'title'         => __( 'Post Content', 'remark' ),
						'priority'      => 1,
						'panel'         => 'remark_blog_option_panel',
				) 
		);

		$wp_customize->add_section( 'remark_blog_post_layout_section', 
				array(
						'title'         => __( 'Layout', 'remark' ),
						'priority'      => 1,
						'panel'         => 'remark_blog_option_panel'
				) 
		);

		$wp_customize->add_section( 'remark_breadcrumbs_section', 
			array(
					'title'         => __( 'Breadcrumbs', 'remark' ),
					'priority'      => 1,
					'panel'         => 'remark_blog_option_panel'
			) 
		);

		$wp_customize->add_section( 'remark_blog_sidebar_layout_section', 
				array(
						'title'         => __( 'Sidebar', 'remark' ),
						'priority'      => 1,
						'panel'         => 'remark_blog_option_panel'
				) 
		);

		/* Feature Image */
		$wp_customize->add_setting( 'remark_blog_post_feature_image',
			array(
					'sanitize_callback' => 'remark_sanitize_checkbox',
					'transport'         => 'refresh',
					'default'       =>  true
			)
		);

		$wp_customize->add_control( 'remark_blog_post_feature_image', 
				array(
						'type'        => 'checkbox',
						'label'       => __( 'Featured Image', 'remark' ),
						'priority'    => 10,
						'section'     => 'remark_blog_post_structure',
				) 
		);

		/* Post Title */
		$wp_customize->add_setting( 'remark_blog_post_title_tag',
				array(
						'sanitize_callback' => 'remark_sanitize_checkbox',
						'transport'         => 'refresh',
						'default'       =>  true
				)
		);

		$wp_customize->add_control( 'remark_blog_post_title_tag', 
				array(
						'type'        => 'checkbox',
						'label'       => __( 'Title & Blog Meta', 'remark' ),
						'priority'    => 10,
						'section'     => 'remark_blog_post_structure',
				) 
		);

		/* Author */
		$wp_customize->add_setting( 'remark_blog_post_author',
				array(
						'sanitize_callback' => 'remark_sanitize_checkbox',
						'transport'         => 'refresh',
						'default'       =>  true
				)
		);

		$wp_customize->add_control( 'remark_blog_post_author', 
				array(
						'type'        => 'checkbox',
						'label'       => __( 'Author', 'remark' ),
						'priority'    => 10,
						'section'     => 'remark_blog_post_title_meta',
				) 
		);

		/* Date */
		$wp_customize->add_setting( 'remark_blog_post_publish_date',
				array(
						'sanitize_callback' => 'remark_sanitize_checkbox',
						'transport'         => 'refresh',
						'default'       =>  true
				)
		);

		$wp_customize->add_control( 'remark_blog_post_publish_date', 
				array(
						'type'        => 'checkbox',
						'label'       => __( 'Publish Date'. 'remark' ),
						'priority'    => 10,
						'section'     => 'remark_blog_post_title_meta',
				) 
		);


		/* Comment */
		$wp_customize->add_setting( 'remark_blog_post_comment',
				array(
						'sanitize_callback' => 'remark_sanitize_checkbox',
						'transport'         => 'refresh',
						'default'       =>  false
				)
		);

		$wp_customize->add_control( 'remark_blog_post_comment', 
				array(
						'type'        => 'checkbox',
						'label'       => __( 'Comment', 'remark' ),
						'priority'    => 10,
						'section'     => 'remark_blog_post_title_meta',
				) 
		);

		/* Category */
		$wp_customize->add_setting( 'remark_blog_post_category',
				array(
						'sanitize_callback' => 'remark_sanitize_checkbox',
						'transport'         => 'refresh',
						'default'       =>  false
				)
		);

		$wp_customize->add_control( 'remark_blog_post_category', 
				array(
						'type'        => 'checkbox',
						'label'       => __( 'Category', 'remark' ),
						'priority'    => 10,
						'section'     => 'remark_blog_post_title_meta',
				) 
		);


		/* Post Content */
		$wp_customize->add_setting( 'remark_post_content_show',
				array(
						'sanitize_callback' => 'remark_sanitize_checkbox',
						'transport'         => 'refresh',
						'default'       =>  true
				)
		);

		$wp_customize->add_control( 'remark_post_content_show', 
				array(
						'type'        => 'checkbox',
						'label'       => __( 'Content', 'remark' ),
						'priority'    => 10,
						'section'     => 'remark_blog_post_content',
				) 
		);

		$wp_customize->add_setting( 'remark_blog_post_content_option',
				array(
						'transport'         => 'refresh',
						'default'   => 'excerpt',
						'sanitize_callback' => 'remark_sanitize_post_content_option'
				)
		);

		$wp_customize->add_control( 'remark_blog_post_content_option', 
				array(
						'type'        => 'radio',
						'label'       => __( 'Post Content', 'remark' ),
						'priority'    => 10,
						'section'     => 'remark_blog_post_content',
						'choices'           => array(
							'full-content'       => __( 'Full Content', 'remark' ),
							'excerpt'      => __( 'Excerpt', 'remark' ),
						),
				) 
		);

		/* Post Layout */
		$wp_customize->add_setting( 'remark_blog_post_layout_option',
				array(
						'transport'         => 'refresh',
						'default'   => 'one-column',
						'sanitize_callback' => 'wp_kses_post'
				)
		);

		$wp_customize->add_control( 'remark_blog_post_layout_option', 
				array(
						'type'        => 'select',
						'label'       => __( 'Post Layout', 'remark' ),
						'description' => __( 'This layout settings only blog page & archive page (Without Search result Page)', 'remark' ),
						'priority'    => 10,
						'section'     => 'remark_blog_post_layout_section',
						'choices'           => array(
							'one-column'       => __( '1 Column', 'remark' ),
							'two-column'      => __( '2 Column', 'remark' ),
						),
				) 
		);

	/*==========================
	End Blog Settings
	==========================*/

	/*==========================
	 Start Single Post Setting 
	==========================*/
		$wp_customize->add_panel( 'remark_single_blog_post_panel', 
			array(
					'title'            => __( 'Remark: Single Post', 'remark' ),
					'priority'    => 40,
			) 
		);

		$wp_customize->add_section( 'remark_single_blog_post_structure_section', 
			array(
					'title'         => __( 'Post Structure', 'remark' ),
					'priority'      => 1,
					'panel'         => 'remark_single_blog_post_panel'
			) 
		);

		$wp_customize->add_section( 'remark_single_blog_post_title_meta_section', 
			array(
					'title'         => __( 'Meta', 'remark' ),
					'priority'      => 1,
					'panel'         => 'remark_single_blog_post_panel'
			) 
		);

		$wp_customize->add_section( 'remark_single_blog_layout_section', 
			array(
					'title'         => __( 'Sidebar', 'remark' ),
					'priority'      => 1,
					'panel'         => 'remark_single_blog_post_panel'
			) 
		);

		/* Feature Image */
		$wp_customize->add_setting( 'remark_single_blog_post_feature_image',
			array(
					'sanitize_callback' => 'remark_sanitize_checkbox',
					'transport'         => 'refresh',
					'default'       =>  true
			)
		);

		$wp_customize->add_control( 'remark_single_blog_post_feature_image', 
			array(
					'type'        => 'checkbox',
					'label'       => __( 'Featured Image', 'remark' ),
					'priority'    => 10,
					'section'     => 'remark_single_blog_post_structure_section',
			) 
		);

		/* Post Title */
		$wp_customize->add_setting( 'remark_single_blog_post_title_tag',
			array(
					'sanitize_callback' => 'remark_sanitize_checkbox',
					'transport'         => 'refresh',
					'default'       =>  true
			)
		);

		$wp_customize->add_control( 'remark_single_blog_post_title_tag', 
			array(
					'type'        => 'checkbox',
					'label'       => __( 'Title & Blog Meta', 'remark' ),
					'priority'    => 10,
					'section'     => 'remark_single_blog_post_structure_section',
			) 
		);

		/* Author */
		$wp_customize->add_setting( 'remark_signle_blog_post_author',
			array(
					'sanitize_callback' => 'remark_sanitize_checkbox',
					'transport'         => 'refresh',
					'default'       =>  true
			)
		);

		$wp_customize->add_control( 'remark_signle_blog_post_author', 
			array(
					'type'        => 'checkbox',
					'label'       => __( 'Author', 'remark' ),
					'priority'    => 10,
					'section'     => 'remark_single_blog_post_title_meta_section',
			) 
		);

		/* Date */
		$wp_customize->add_setting( 'remark_single_blog_post_publish_date',
			array(
					'sanitize_callback' => 'remark_sanitize_checkbox',
					'transport'         => 'refresh',
					'default'       =>  true
			)
		);

		$wp_customize->add_control( 'remark_single_blog_post_publish_date', 
			array(
					'type'        => 'checkbox',
					'label'       => __( 'Publish Date', 'remark' ),
					'priority'    => 10,
					'section'     => 'remark_single_blog_post_title_meta_section',
			) 
		);

		/* Comment */
		$wp_customize->add_setting( 'remark_single_blog_post_comment',
			array(
					'sanitize_callback' => 'remark_sanitize_checkbox',
					'transport'         => 'refresh',
					'default'       =>  false
			)
		);

		$wp_customize->add_control( 'remark_single_blog_post_comment', 
			array(
					'type'        => 'checkbox',
					'label'       => __( 'Comment', 'remark' ),
					'priority'    => 10,
					'section'     => 'remark_single_blog_post_title_meta_section',
			) 
		);

		/* Category */
		$wp_customize->add_setting( 'remark_single_blog_post_category',
			array(
					'sanitize_callback' => 'remark_sanitize_checkbox',
					'transport'         => 'refresh',
					'default'       =>  false
			)
		);

		$wp_customize->add_control( 'remark_single_blog_post_category', 
			array(
					'type'        => 'checkbox',
					'label'       => __( 'Category', 'remark' ),
					'priority'    => 10,
					'section'     => 'remark_single_blog_post_title_meta_section',
			) 
		);

		/* Tag */
		$wp_customize->add_setting( 'remark_single_blog_post_tag',
			array(
					'sanitize_callback' => 'remark_sanitize_checkbox',
					'transport'         => 'refresh',
					'default'       =>  true
			)
		);

		$wp_customize->add_control( 'remark_single_blog_post_tag', 
			array(
					'type'        => 'checkbox',
					'label'       => __( 'Tag', 'remark' ),
					'priority'    => 10,
					'section'     => 'remark_single_blog_post_title_meta_section',
			) 
		);

		/* Sidebar */
		$wp_customize->add_setting( 'remark_single_blog_post_layout',
			array(
				'sanitize_callback' => 'remark_sanitize_single_post_layout',
				'transport'         => 'refresh',
				'default'       =>  'sidebar_hide'
			)
		);

		$wp_customize->add_control( 'remark_single_blog_post_layout', 
			array(
				'type'        => 'radio',
				'label'       => __( 'Sidebar', 'remark' ),
				'priority'    => 10,
				'section'     => 'remark_single_blog_layout_section',
				'choices'           => array(
					'sidebar_hide'       => __( 'Hide', 'remark' ),
					'sidebar_show'      => __( 'Show', 'remark' ),
				),
			) 
		);

		/* Breadcrumbs */
		$wp_customize->add_setting( 'remark_enable_breadcrumb',
			array(
					'sanitize_callback' => 'remark_sanitize_breadcrumb',
					'transport'         => 'refresh',
					'default'   => 'hide',
			)
		);

		$wp_customize->add_control( 'remark_enable_breadcrumb', 
			array(
				'type'        => 'radio',
				'label'       => __( 'Breadcrumbs', 'remark' ),
				'priority'    => 10,
				'section'     => 'remark_breadcrumbs_section',
				'choices'           => array(
						'hide'       => __( 'Hide', 'remark' ),
						'show'      => __( 'Show', 'remark' ),
				),
			) 
		);
		/*==========================
		End Single Post Setting 
		==========================*/

		$wp_customize->add_section( 'remark_header_section', 
			array(
				'title'         => __( 'Remark: Header', 'remark' ),
				'priority'      => 40,
			) 
		);

		$wp_customize->add_setting( 'remark_header_my_account',
			array(
				'sanitize_callback' => 'remark_sanitize_header',
				'transport'         => 'refresh',
				'default'   => 'hide',
			)
		);

		$wp_customize->add_control( 'remark_header_my_account', 
			array(
				'type'        => 'radio',
				'label'       => __( 'Enable Header My Account', 'remark' ),
				'priority'    => 10,
				'section'     => 'remark_header_section',
				'choices'           => array(
					'hide'       => __( 'Hide', 'remark' ),
					'show'      => __( 'Show', 'remark' ),
				),
			) 
		);


		$wp_customize->add_setting( 'remark_header_cart',
			array(
				'sanitize_callback' => 'remark_sanitize_header',
				'transport'         => 'refresh',
				'default'   => 'hide',
			)
		);

		$wp_customize->add_control( 'remark_header_cart', 
			array(
				'type'        => 'radio',
				'label'       => __( 'Enable Header Cart', 'remark' ),
				'priority'    => 10,
				'section'     => 'remark_header_section',
				'choices'           => array(
					'hide'       => __( 'Hide', 'remark' ),
					'show'      => __( 'Show', 'remark' ),
				),
			) 
		);

}
add_action( 'customize_register', 'remark_customize_register' );

/**
 * Sanitize the checkbox.
 *
 * @param boolean $input.
 * @return boolean (true|false).
 */
function remark_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
			return true;
	} else {
			return false;
	}
}

function remark_sanitize_post_content_option( $input ) {
	return ( 'excerpt' === $input ) ? 'excerpt' : 'full-content';
}

function remark_sanitize_breadcrumb( $input ) {
	return ( 'hide' === $input ) ? 'hide' : 'show';
}

function remark_sanitize_header( $input ) {
	return ( 'hide' === $input ) ? 'hide' : 'show';
}

function remark_sanitize_single_post_layout( $input ) {
	return ( 'sidebar_hide' === $input ) ? 'sidebar_hide' : 'sidebar_show';
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function remark_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function remark_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function remark_customize_preview_js() {
	wp_enqueue_script( 'remark-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), REMARK_VERSION, true );
}
add_action( 'customize_preview_init', 'remark_customize_preview_js' );
