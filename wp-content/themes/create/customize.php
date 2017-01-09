<?php

/**
 * Customizations
 *
 * @package Create
 * @author  Andy Robson Design
 * @link    http://www.andyrobsondesign.com
 * @license GPL2-0+
 */

/**
 * Get default primary color for Customization
 *
 * Abstracted here since at least two functions use it.
 *
 * @since 1.0.0
 *
 * @return string Hex color code for primary color.
 */

function create_customizer_get_default_primary_color() {
	return '#52c0cb';
}

function create_customizer_get_default_accent_color() {
	return '#e6413e';
}

function create_customizer_get_default_page_header_color() {
	return '#52c0cb';
}

add_action( 'customize_register', 'create_customizer_register' );
/**
 * Register settings and controls with the Customizer.
 *
 * @since 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function create_customizer_register() {

	global $wp_customize;

	$wp_customize->add_section( 'create-image', array(
		'title'          => __( 'Front Page Hero Image', 'create' ),
		'description'    => __( '<p>Use the default image or personalize your site by uploading your own image for the front page 1 widget background.</p><p>The default image is <strong>1600 x 1050 pixels</strong>.</p>', 'digital' ),
		'priority'       => 75,
	) );

	$wp_customize->add_setting( 'create-hero-image', array(
		'default'  => sprintf( '%s/images/hero-image-1.jpg', get_stylesheet_directory_uri() ),
		'type'     => 'option',
	) );

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'hero-background-image',
			array(
				'label'       => __( 'Hero Image Upload', 'create' ),
				'section'     => 'create-image',
				'settings'    => 'create-hero-image',
			)
		)
	);

	//* Add header color setting to the Customizer
    $wp_customize->add_setting( 'create_header_color', array(
        'default'           => 'true',
        'capability'        => 'edit_theme_options',
        'type'              => 'option',
    ));

	$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize, 'create_header_control', array(
			'label'       => __( 'Header Color', 'create' ),
			'description' => __( 'Set the header color to White or Transparent. By default, the header will be transparent to reveal the Page Header color. NOTE: your changes will not be reflected until you save and refresh.', 'create' ),
			'section'     => 'colors',
			'settings'    => 'create_header_color',
			'type'        => 'select',
			'choices'     => array(
				'transparent'   => __( 'Transparent', 'create' ),
				'white'    => __( 'White', 'create' ),
			),
        ))
	);

	$wp_customize->add_setting(
		'create_primary_color',
		array(
			'default'           => create_customizer_get_default_primary_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'create_primary_color',
			array(
				'description' => __( 'Set the default color.', 'create' ),
			    'label'       => __( 'Primary Color', 'create' ),
			    'section'     => 'colors',
			    'settings'    => 'create_primary_color',
			)
		)
	);

	$wp_customize->add_setting(
		'create_accent_color',
		array(
			'default'           => create_customizer_get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'create_accent_color',
			array(
				'description' => __( 'Set the default button color.', 'create' ),
			    'label'       => __( 'Accent Color', 'create' ),
			    'section'     => 'colors',
			    'settings'    => 'create_accent_color',
			)
		)
	);

	$wp_customize->add_setting(
		'create_page_header_color',
		array(
			'default'           => create_customizer_get_default_page_header_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'create_page_header_color',
			array(
				'description' => __( 'Set the default Page Header color.', 'create' ),
			    'label'       => __( 'Page Header Color', 'create' ),
			    'section'     => 'colors',
			    'settings'    => 'create_page_header_color',
			)
		)
	);

}
