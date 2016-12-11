<?php
/**
 * The template for displaying Packages
 * Template: Packages
 * This is the template that displays the packages page
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
						<div class="site-content">
						<div class="about">	
							<h4>Our Services</h4>
							<p>We take pride in our clients and the content we create for them.  Here is a brief overview of our services offered.</p>
			</div><!-- .site-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>