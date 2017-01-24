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
 * @subpackage crafter
 * @since crafter-child 1.0
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
	$package_four = get_field('package_four');
	$other_services = get_field('other_services');
	$pkg_1_description = get_field('pkg_1_description');
	$pkg_2_description = get_field('pkg_2_description');
	$pkg_3_description  = get_field ('pkg_3_description');
	$pkg_4_description  = get_field ('pkg_4_description');
	$other_services_description  = get_field ('other_services_description');
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
 	<li>Install the latest version of WordPress</li>
 	<li>Install pre-built WordPress Theme</li>
 	<li>Set up Static Homepage/Landing Page</li>
 	<li>Set Blog page as Post Page</li>
	<li>Custom Header</li>
	<li>WordPress training documentation</li>
	<p>**This package does not include content being added to the site**</p>
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
				<li>WordPress training documentation</li>
				<br>
				<p>Needed from you:</p>
				<li>Site Content</li>
				<li>Brand Colors</li>
				<li>Links & Images</li>
			</ul>
			</p>
		<br>	
		
	</div>	
	<div class="pkg-3">
		<h3><?php echo $package_three; ?></h3> 
		<p><?php echo $pkg_3_description; ?></p>
		 	<li>45 minute consultation</li>
		 	<li>Install latest version of WordPress</li>
		 	<li>Customized WordPress Theme installed</li>
		 	<li>Set up Static Homepage/Landing Page</li>
		 	<li>Set Blog page as Post Page</li>
			<li>Contact Page with Contact Form</li>
			<li>Additional Interior Page added (Ex: About, Portfolio...)</li>
			<li>Your existing logo or header with matching colors</li>
			<li>Content Audit </li>
			<li>Social Media Integration</li>
			<li>SEO</li>
			<li>30 Minute Training on updating your new site</li>
			<li>2 Hours Site Support after completion</li>
			<br>
			<p>Needed from you:</p>
			<li>Site Mock-up</li>
			<li>Site Content</li>
			<li>Brand Colors</li>
			<li>Links & Images</li>
		</ul>
		</p>
		</div>	
		<br>
		<div class="pkg-4">
			<h3><?php echo $package_four; ?></h3> 
			<p><?php echo $pkg_4_description; ?></p>
			 	<li>45 minute consultation</li>
			 	<li>Install latest version of WordPress</li>
			 	<li>Customized WordPress Theme installed</li>
			 	<li>Set up Static Homepage/Landing Page</li>
			 	<li>Set Blog page as Post Page</li>
				<li>3 Interior Pages set up </li>
				<li>Contact Page with Contact Form</li>
				<li>Your existing logo or header with matching colors</li>
				<li>Content Audit </li>
				<li>Social Media Integration</li>
				<li>SEO</li>
				<li>E-Commerce plugin</li>
				<li>30 Minute Training on updating your new site</li>
				<br>
				<p>Needed from you:</p>
				<li>Site Mock-up</li>
				<li>Site Content</li>
				<li>Brand Colors</li>
				<li>Links & Images</li>
				</ul>
				</p>
				</div>
				
				<br>
			<div class="pkg-other">
				<h3><?php echo $other_services; ?></h3> 
				<p><?php echo $other_services_description; ?></p>
			 	<li>1-hour meeting to discuss your brand</li>
				<li>Site maps and user flows</li>
				<li>User personas, to nail down your ideal customer/visitor</li>
			 	<li>Custom wirefram and site layout</li>
				<br>
				<br>
			<div class='a-la-carte'>		
		<h3>A la Carte</h3>
		 	<li>UX Design/Audit</li>
			<li>Branding</li>
			<li>Logos</li>
		 	<li>Copywriting</li>
		 	<li>SEO</li>
			 <li>Customized Page Templates</li>
		 	<li>Email Newsletters</li>
		 	<li>Photoshop</li>
			<li>WordPress Training</li>
		</ul>
	</div>
		<br>
		<br>
		<div class='care-plans'>
		<h3>WordPress Care Plans</h3>
			<p>You've put alot into your site, and now you want to protect it. Contact me for information WordPress Care Plans to make sure your site is backed up and secure!
		</p>
		<ul>Care Plans include: <ul>
			<li>Managed WordPress Updates </li>
			<li>Security Monitoring </li>
			<li>Scheduled Sessions</li>
			<li>Back ups</li>
		</ul>
		<class='contact-me'>
		 <a href="http://andyrobsondesign.com/contact-me/">Contact me</a> for details and a quote 
	</div>	
		<br>
		<br>
		<div class='booking'>
		<p>At the time of booking a 50% Non-refundable deposit is due.  All transactions are made via PayPal and final payment will be made after all design work is completed but before the site is installed and files are delivered. </p>	
		<br>
	</div>
	<div class='note'>
		<p>***PACKAGES DO NOT INCLUDE HOSTING OR DOMAIN***</p>
	</div>
			</div><!-- .site-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>