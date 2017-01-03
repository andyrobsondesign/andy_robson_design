<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
$twitter_link = get_field('twitter_link'); 
$link_name = get_field('link_name');
get_header(); ?>

<!-- head select -->   
  <?php $advance_slider_enabel = get_theme_mod('advance_slider_enabel',1);?>
	<?php if( isset($advance_slider_enabel) && $advance_slider_enabel == 1 ):?> 
       <?php $advance_header_checkbox = get_theme_mod('advance_header_checkbox',1);?>
       
       		<?php if( isset($advance_header_checkbox) && $advance_header_checkbox == 1){ ?>
      			 <?php get_template_part('headers/part','head1'); ?>
        		<?php } ?>
        
             <?php if( isset($advance_header_checkbox) && $advance_header_checkbox == 0){ ?>
          <?php get_template_part('headers/part','headsingle'); ?>
        <?php } ?> 
     <?php else:?> 
  <?php get_template_part('headers/part','headsingle'); ?>
  <div class="clearfix"></div>
 <?php endif?> 
<!-- / head select --> 
	<section class="hero-home">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="hero-text">
				<h3><?php the_content(); ?><a class="button1" href="<?php echo home_url(); ?>/contact-me">Need A Website?</a>
					</div>
	  								</section></h3>
				
					<?php endwhile; // end of the loop. ?>
			
	  		
	
<section id="home">
          <div class="full-width">
            <h2>Hello!</h2>
              <p>Welcome to Andy Robson Design!   I’m Bobbi, a web designer and WordPress developer.  I work with lifestyle bloggers and small business owners to create WordPress sites that are stylish and easy to use!  Whether you are starting from scratch, want to revamp a current site, or need help with content marketing I can help! </p>
			  <br>
			  <section class="feature-skills">
		<div class= "skills">
					<ul class="homepage-skills">
					<?php query_posts('posts_per_page=3&post_type=skills'); ?>
						<?php while ( have_posts() ) : the_post(); 
							$image_1 = get_field("image_1");
							$size = "thumbnail";
						?>
						<li class="skills">
				<?php echo wp_get_attachment_image($image_1, $size); ?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</li>
						<?php endwhile; // end of the loop. ?>
						<?php wp_reset_query(); // resets the altered query back to the original ?>
					</ul>
				</div>
			</section>
			<section id="about">
				<div class="full-width">
	            <div class="third-width">
	              <h3>Starting from scratch?</h3>
	              <p>Do you need a new website and have heard about the flexibility that WordPress can offer but dont’ know where to start?  You’re in the right place!  I can help you from the Design to Launch! </p>
	            </div>
				</div>
				<div class="full-width">
	            <div class="third-width">
	              <h3>Already have a site?</h3>
	              <p>Do you have a WordPress site that you want to revamp and update? I can help you transform your site and also audit for SEO and content. </p>
	            </div>
	          </div> 
			<div class="full-width">
            <div class="third-width">
            <h3>Something Else?</h3>
              <p>Do you need a consult  or training?  Need a logo or help with branding?  Not sure exactly what you need and have some questions? I can help!  </p>
            </div>
			<br>
		
			<div class=package>
				<p><a class="button1" href="<?php echo home_url(); ?>/packages">Services</a>
			</p></div>
				<span>
        </section>
	    <div class="half-width" id="contact-info">							<img src="http://localhost:8888/andy_robson_design/wp-content/uploads/2016/11/contact-image-e1480218040910.png"/> 
	               </div>
         <section id="contact">
            <div class="half-width">
				<h2>Questions?</h2>
				<h2>		<img src="http://localhost:8888/andy_robson_design/wp-content/uploads/2016/11/Envelope.png" id="contact-img" alt="Contact image" /><a class="image" href="<?php echo home_url(); ?>/contact-me">Contact Me</a>
</div>


           
</main><!-- #main -->
	</div><!-- #primary -->						

<?php get_footer(); ?>