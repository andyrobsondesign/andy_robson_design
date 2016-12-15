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
	<section class='hero-services'>
	</section>

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

<h2>My Services</h2>
<br>

	<?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>
<div class="site-content">
<div class="services">	
<p>I take pride in my clients and the content I create for them.  Here is a brief overview of the services offered.</p>

<p> I can build a site from scratch, customize an existing site, transfer your old content to a brand new site or simply help you customize a WordPress theme you already love.  I can also help you with content strategy and marketing- walking you through the entire concept of your site, ensuring that the content and design work together seamlessly.</p>

<p> Below are some of the packages I offer.  If you need help choosing what's right for you or want to discuss adding on other custom extras, please reach out to me! I'd love to talk to you about site design and brand strategy! 
		
							
	<div class="pkg-1">
		<h3><?php echo $package_one; ?></h3> 
		<p><?php echo $pkg_1_description; ?><ul>
 	<li>20 minute consultation</li>
 	<li>Install latest version of WordPress</li>
 	<li>Theme suggestions for you</li>
 	<li>Set up Static Homepage/Landing Page</li>
 	<li>Set Blog page as Post Page</li>
</ul>
</p>
		
		
	</div>	
	<div class="pkg-2">
		<h3><?php echo $package_two; ?></h3> 
		<p><?php echo $pkg_2_description; ?>
			 	<li>45 minute consultation</li>
			 	<li>Install latest version of WordPress</li>
			 	<li>Customizable WordPress Theme installed</li>
			 	<li>Set up Static Homepage/Landing Page</li>
			 	<li>Set Blog page as Post Page</li>
				<li>Contact Page with Contact Form</li>
				<li>Your existing logo or header with matching colors</li>
				<li>Content Audit </li>
			</ul>
			</p>
		
	</div>	
	<div class="pkg-3">
		<h3><?php echo $package_three; ?></h3> 
		<p><?php echo $pkg_3_description; ?></p>
		 	<li>45 minute consultation</li>
			<li>Branding</li>
			<li>Strategy</li>
		 	<li>Install latest version of WordPress</li>
		 	<li>Customized WordPress Theme installed</li>
			 <li>Two Customized Page Templates</li>
		 	<li>Set up Static Homepage/Landing Page</li>
		 	<li>Set Blog page as Post Page</li>
			<li>Contact Page with Contact Form</li>
			<li>Your existing logo or header with matching colors</li>
			<li>Content Audit </li>
			<li>30 Minute Training on updating your new site</li>
		</ul>
		</p>
		</div>		
		<h3>Other Services Available</h3>
		 	<li>UX Design/Audit</li>
			<li>Branding</li>
			<li>Logos</li>
		 	<li>Copywriting</li>
		 	<li>SEO</li>
			 <li>Customized Page Templates</li>
		 	<li>Email Newsletters</li>
		 	<li>Photoshop</li>
			<li>Security and Backup</li>
			<li>WordPress Training</li>
		</ul>
		</p>		
			</div><!-- .site-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>