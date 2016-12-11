<?php
/**
 * The template for displaying Packages
 * Template Name: Packages
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
<?php while ( have_posts() ) : the_post();
	$package_one = get_field('package_one');
	$package_two = get_field('package_two');
	$package_three = get_field('package_three');
	$pkg_1_description = get_field('pkg_1_description');
	$pkg_2_description = get_field('pkg_2_description');
	$pkg_3_description  = get_field ('pkg_3_description');
	$size = "medium"; 
	$contact = get_field('contact'); ?>

<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>
<div class="site-content">
<div class="services">	
<h2>Our Services</h2>
<p>I take pride in my clients and the content I create for them.  Here is a brief overview of the services offered.</p>
							
	<div class="pkg-1">
		<h3><?php echo $package_one; ?></h3> 
		<p><?php echo $pkg_1_description; ?></p>
		
	</div>	
	<div class="pkg-2">
		<h3><?php echo $package_two; ?></h3> 
		<p><?php echo $pkg_2_description; ?></p>
		
	</div>	
	<div class="pkg-3">
		<h3><?php echo $package_three; ?></h3> 
		<p><?php echo $pkg_3_description; ?></p>
		
	</div>				
			</div><!-- .site-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>