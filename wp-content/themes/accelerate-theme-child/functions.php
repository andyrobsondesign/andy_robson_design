<?php
/**
 * Accelerate Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
// Create child theme
function accelerate_theme_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
// Post thumbnails support
add_theme_support('post-thumbnails');


// defines custom markup for post comments
function accelerated_theme_child_comments($comment, $args, $depth) {
	$comment  = '<li class="comment">';
	$comment .=	'<header class="comment-head">';
	$comment .= '<span class="comment-author">' . get_comment_author() . '</span>';
	$comment .= '<span class="comment-meta">' . get_comment_date('m/d/Y') . '&emsp;|&emsp;' . get_comment_reply_link(array('depth' => $depth, 'max_depth' => 5)) . '</span>';
	$comment .= '</header>';
	$comment .= '<div class="comment-body">';
	$comment .= '<p>' . get_comment_text() . '</p>';
	$comment .= '</div>';
	$comment .= '</li>';

	echo $comment;
}

// changes excerpt symbol
function custom_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');


add_action( 'wp_enqueue_scripts', 'accelerate_theme_enqueue_styles' );
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
add_action( 'widgets_init', 'accelerate_
	theme_child_widget_init' );
$args = array(
 'flex-width' => true,
 'width' => 1200,
 'flex-height' => true,
 'height' => 360,
 'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );


// Add Twitter Widget
    
function accelerate_theme_child_widget_init() {
	
	register_sidebar( array(
	    'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
	    'id' => 'sidebar-2',
	    'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );

}
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)
 
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
 }


