<?php
/**
 * The template for displaying the homepage
 *Template Name:Front Page 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
$twitter_link = get_field('twitter_link'); 
$link_name = get_field('link_name');
get_header(); ?>

<section class="hgroup">
	<div id "header" class="hero-header">
		<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<div id="cta-hero" class="cta-button">
				<a class="button" href="<?php echo home_url(); ?>/contact-me">Need A Website?</a>
			</div>
			<?php endwhile; // end of the loop. ?>
			</div><!-- header-->
</section><!-- hgroup -->
<section id="intro">
          <div id="intro"class="full-width">
            <h2>Hello!</h2>
              <p>Welcome to Andy Robson Design!   I’m Bobbi, a web designer and WordPress developer.  I work with lifestyle bloggers and small business owners to create WordPress sites that are stylish and easy to use!  Whether you are starting from scratch, want to revamp a current site, or need help with content marketing I can help! </p>
		  </div><!--intro-->
	  </section><!--intro-->
			  <section class="feature-skills">
		<div id="skills"div class= "primary-skills">
					<ul class="homepage-skills">
					<?php query_posts('posts_per_page=3&post_type=skills'); ?>
						<?php while ( have_posts() ) : the_post(); 
							$image_1 = get_field("image_1");
							$size = "thumbnail";
						?>
						<li class="skills">
				<?php echo wp_get_attachment_image($image_1, $size); ?>
			<div class="skill-name">	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
						</li>
						<?php endwhile; // end of the loop. ?>
						<?php wp_reset_query(); // resets the altered query back to the original ?>
					</ul>
				</div>
			</div>
			</section>
			<section id="about">
				<div id="package-1"div class="full-width">
	            <div class="third-width">
	              <h3>Starting from scratch?</h3>
	              <p>Do you need a new website and have heard about the flexibility that WordPress can offer but dont’ know where to start?  You’re in the right place!  I can help you from the Design to Launch! </p>
	            </div>

				<div id="package-2"div class="third-width">
	          
	              <h3>Already have a site?</h3>
	              <p>Do you have a WordPress site that you want to revamp and update? I can help you transform your site and also audit for SEO and content. </p>
	            </div>
			<div id="package-3"div class="third-width">
       
            <h3>Something Else?</h3>
              <p>Do you need a consult  or training?  Need a logo or help with branding?  Not sure exactly what you need and have some questions? I can help!  </p>
            </div>	
			<div id="svc-cta"div class=package role="cta">
				<a class="button" href="<?php echo home_url(); ?>/packages">Services</a>
		</div>		
	</section>
		<section id="contact">
	    <div id="contact-me-img"div class="half-width">							
		<img src="http://localhost:8888/andy_robson_design/wp-content/uploads/2016/11/contact-image-e1480218040910.png"/> 
	    </div>
   
            <div id="email"div class="half-width">
				<h2>Questions?</h2>
				<h2>		<img src="http://localhost:8888/andy_robson_design/wp-content/uploads/2016/11/Envelope.png" id="contact-img" alt="Contact image" /><a class="image" href="<?php echo home_url(); ?>/contact-me">Contact Me</a>
</div>
</section>

           

		</main><!-- #main -->
	</div><!-- #primary -->


<?php

get_footer();