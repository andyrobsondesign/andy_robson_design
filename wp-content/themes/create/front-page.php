<?php
/**
 * This file adds the Front Page to the Create Theme.
 *Template Name: front page
 * @author Andy Robson Design
 * @package Create
 * @subpackage create 
 */

//add_action( 'genesis_meta', 'create_front_page_genesis_meta' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
//function create_front_page_genesis_meta() {
	
	//if ( is_active_sidebar( 'front-page-hero' ) || is_active_sidebar( 'front-page-1' ) || is_active_sidebar( 'front-page-2' ) || is_active_sidebar( 'front-page-3' ) || is_active_sidebar( 'front-page-4') ) {

		//* Enqueue scripts
	//	add_action( 'wp_enqueue_scripts', 'create_enqueue_digital_script' );
		//function create_enqueue_digital_script() {
			
		//	wp_enqueue_style( 'create-front-styles', get_stylesheet_directory_uri() . '/style-front.css', array(), CHILD_THEME_VERSION );

	//	}

		//* Add front-page body class
		//add_filter( 'body_class', 'create_body_class' );
	//	function create_body_class( $classes ) {

		//	$classes[] = 'front-page';
		//	return $classes;

	//	}

		//* Force full width content layout
	//	add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

		//* Remove breadcrumbs
	//	remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

		//* Add widgets on front page
		//add_action( 'genesis_after_header', 'create_front_page_widgets' );

		//* Remove the default Genesis loop
	//	remove_action( 'genesis_loop', 'genesis_do_loop' );

		//* Remove .site-inner
	//	add_filter( 'genesis_markup_site-inner', '__return_null' );
	//	add_filter( 'genesis_markup_content-sidebar-wrap_output', '__return_false' );
	//	add_filter( 'genesis_markup_content', '__return_null' );
	//	add_theme_support( 'genesis-structural-wraps', array( 'header', 'footer-widgets', 'footer' ) );

//	}

//}

//* Run the Genesis function


$twitter_link = get_field('twitter_link'); 
$link_name = get_field('link_name');
get_header(); ?>

<section>
	<div class="site-container">
		
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='header-hero'>
				<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
		<a class= 'button' href="<?php echo home_url(); ?>/contact-me">Need a Website?</a>
	</div>
	</div><!-- .site-content -->
</section><!-- .home-page -->
<div>
	<section>
</div>
</section>
		  <section>
          <div class="full-width">
            <h2>Hello!</h2>
              <p>Welcome to Andy Robson Design!   I’m Bobbi, a web designer and WordPress developer.  I work with lifestyle bloggers and small business owners to create WordPress sites that are stylish and easy to use!  Whether you are starting from scratch, want to revamp a current site, or need help with content marketing I can help! </p>
		  </section>
		   <div class="wrap-skills">
   		  <section id="skills">
			  <div class="skills">
   					<ul class="homepage-skills">
						<div class='one-third'>
   					<?php query_posts('posts_per_page=3&post_type=skills'); ?>
			
   						<?php while ( have_posts() ) : the_post(); 
   							$image_1 = get_field("image_1");
   							$size = "thumbnail";
   							?>
   				<?php echo wp_get_attachment_image($image_1, $size); ?>
   				<h3><align center><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				
   				</h3>
   						<?php endwhile; // end of the loop. ?>
   						<?php wp_reset_query(); // resets the altered query back to the original ?>
			
   								</ul>
   									</div>
   										</div>
   											</div>
   												</div>
																	
		 
			<section id="about">
				<div class id="plan">
	            <div id="one-third">
	              <h3>Starting from scratch?</h3>
	              <p>Do you need a new website and have heard about the flexibility that WordPress can offer but dont’ know where to start?  You’re in the right place!  I can help you from the Design to Launch! </p>
	             
	              <h3>Already have a site?</h3>
	              <p>Do you have a WordPress site that you want to revamp and update? I can help you transform your site and also audit for SEO and content. </p>
	         
		
            <h3>Something Else?</h3>
              <p>Do you need a consult  or training?  Need a logo or help with branding?  Not sure exactly what you need and have some questions? I can help!  </p>
			</div>
				</div>
					</div>
					</section>
					<section="full-width-content">
					<div class="svcs-button">	
		<a class="svcs-button" href="<?php echo home_url(); ?>/packages">Services</a>
				</section>
			</div>
		</div>
<br>
<br>					
<br>
	<section class="full-width-content">
	    <div class="half-width" id="contact-info">							<img src="http://localhost:8888/andy_robson_design/wp-content/uploads/2016/11/contact-image-e1480218040910.png"/> 
	               
         <section id="contact">
          <div class id="contact-button">
				<h3>Questions?</h3>
				<h3>		<img src="http://localhost:8888/andy_robson_design/wp-content/uploads/2016/11/Envelope.png" id="contact-img" alt="Contact image" /><a class="image" href="<?php echo home_url(); ?>/contact-me">Contact Me</a></h3>
</div>


           

		</main><!-- #main -->
	</div><!-- #primary -->


<?php

get_footer();