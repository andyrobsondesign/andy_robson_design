<?php
//* this will bring in the Genesis Parent files needed:
include_once( get_template_directory() . '/lib/init.php' );

//* We tell the name of our child theme
define( 'Child_Theme_Name', __( 'bellacam', 'bellacam' ) );
//* We tell the web address of our child theme (More info & demo)
define( 'Child_Theme_Url', 'http://andyrobsondesig.com' );
//* We tell the version of our child theme
define( 'Child_Theme_Version', '1.0' );

//* Add HTML5 markup structure from Genesis
add_theme_support( 'html5' );

//* Add HTML5 responsive recognition
add_theme_support( 'genesis-responsive-viewport' );


// Create custom post types
function create_custom_post_types() {
    register_post_type( 'case_studies' , 
        array (
            'labels' => array (
                'name' => __( 'Case Studies' ), 
                'singular_name' => __( 'Case Study' )
                ), 
            'public' => true, 
            'has_archive' => true,
            'rewrite' => array ( 
                'slug' => 'case-studies' 
                ), 
            )
        ); 
	    register_post_type( 'skills' , 
	        array (
	            'labels' => array (
	                'name' => __( 'Skills' ), 
	                'singular_name' => __( 'Skills' )
	                ), 
	            'public' => true, 
	            'has_archive' => true,
	            'rewrite' => array ( 
	                'slug' => 'skills' 
	                ), 
	            )
	        ); 
		    register_post_type( 'packages' , 
		        array (
		            'labels' => array (
		                'name' => __( 'Packages' ), 
		                'singular_name' => __( 'Packages' )
		                ), 
		            'public' => true, 
		            'has_archive' => true,
		            'rewrite' => array ( 
		                'slug' => 'packages' 
		                ), 
		            )
		        ); 
	}
add_action( 'init', 'create_custom_post_types' ); 
// Add HTML5 theme support for custom seach form
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );
//custom header
add_theme_support( 'custom-header' );
add_action( 'widgets_init', 'bellacam_widget_init' );
$args = array(
 'flex-width' => true,
 'width' => 1200,
 'flex-height' => true,
 'height' => 360,
 'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );


// Add Twitter Widget
    
function bellacam_widget_init() {
	
	register_sidebar( array(
	    'name' =>__( 'Homepage sidebar', 'bellacam'),
	    'id' => 'sidebar-2',
	    'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );
}
/**
 * Header image overlay
 */
function sydney_header_overlay() {
	$overlay = get_theme_mod( 'hide_overlay', 0);
	if ( !$overlay ) {
		echo '<div class="overlay"></div>';
	}
}

/**
 * Header video
 */
function bellacam_header_video() {

	if ( !function_exists('the_custom_header_markup') ) {
		return;
	}

	$front_header_type 	= get_theme_mod( 'front_header_type' );
	$site_header_type 	= get_theme_mod( 'site_header_type' );

	if ( ( get_theme_mod('front_header_type') == 'core-video' && is_front_page() || get_theme_mod('site_header_type') == 'core-video' && !is_front_page() ) ) {
		the_custom_header_markup();
	}
}

/**
 * Polylang compatibility
 */
if ( function_exists('pll_register_string') ) :
function sydney_polylang() {
	for ( $i=1; $i<=5; $i++) {
		pll_register_string('Slide title ' . $i, get_theme_mod('slider_title_' . $i), 'bellacam');
		pll_register_string('Slide subtitle ' . $i, get_theme_mod('slider_subtitle_' . $i), 'bellacam');
	}
	pll_register_string('Slider button text', get_theme_mod('slider_button_text'), 'bellacam');
	pll_register_string('Slider button URL', get_theme_mod('slider_button_url'), 'bellacam');
}
add_action( 'admin_init', 'bellacam_polylang' );
endif;


	