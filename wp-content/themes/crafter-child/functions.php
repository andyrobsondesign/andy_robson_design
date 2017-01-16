<?php
/**
 * Crafter-theme-child functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Crafter
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
	// Create child theme
	function crafter_theme_enqueue_styles() {
	    $parent_style = 'parent-style';
	    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	    wp_enqueue_style( 'child-style',
	        get_stylesheet_directory_uri() . '/style.css',
	        array( $parent_style )
	    );

	}
	// Post thumbnails support
	add_theme_support('post-thumbnails');
	
	// changes excerpt symbol
	function custom_excerpt_more($more) {
		return '...';
	}
	add_filter('excerpt_more', 'custom_excerpt_more');
	
	add_action( 'wp_enqueue_scripts', 'crafter_theme_enqueue_styles' );
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
		}
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
					 'supports' => array('title', 'editor', 'thumbnail')
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
						 'supports' => array('title', 'editor', 'thumbnail')
		            )
		        ); 
	add_action( 'init', 'create_custom_post_types' ); 