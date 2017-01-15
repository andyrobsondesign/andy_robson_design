<?php
/**
 * The template for displaying the single skills page
 * Template Name:services skills
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage crafter
 * @since crafter-theme-child 1.0
 */
get_header(); ?>

	<section class="site-content">
<?php while ( have_posts() ) : the_post();
	$title_1 = get_field('title_1');
	$title_2 = get_field('title_2');
	$title_3 = get_field('title_3');
	$title_4 = get_field('title_4');
	$icon_1 = get_field('icon_1');
	$descr_1 = get_field ('descr_1');
	$descr_2 = get_field ('descr_2');
	$icon_2 = get_field('icon_2');
	$desc_3 = get_field ('desc_3');
	$descr_4 = get_field ('descr_4');
	$icon_3 = get_field('icon_3');
	$icon_4 = get_field('icon_4');
	$size = "thumbnail"; 
	$contact = get_field('contact'); ?>

<section class="design-section">
	<div class="icon-1 align-left">
		<?php echo wp_get_attachment_image( $icon_1, $size ); ?>
	</div>
	<div class="discover">
		<h2><?php echo $title_1; ?></h2> 
		<p><?php echo $descr_1; ?></p>
		
	</div>
</section>
<br>
</br>
<section class="research-section">
	<div class="icon-2 align-right">
		<?php echo wp_get_attachment_image( $icon_2, $size ); ?>
	</div>
	<div class="research">
		<h2><?php echo $title_2; ?></h2>
		<p><?php echo $descr_2; ?></p>
	</div>
</section>
<br>
<br>
<section class="design-section">
	<div class="icon-3 align-left">
		<?php echo wp_get_attachment_image( $icon_3, $size ); ?>
	</div>
	<div class="design">
		<h2><?php echo $title_3; ?></h2>
		<p><?php echo $desc_3; ?></p>
	</div>
	</div>
	</section>
</br>
</br>
	<section class="research-section">
		<div class="icon-4 align-right">
			<?php echo wp_get_attachment_image( $icon_4, $size ); ?>
		</div>
		<div class="research">
			<h2><?php echo $title_4; ?></h2>
			<p><?php echo $descr_4; ?></p>
		</div>
	</section>
</br>
	<?php endwhile; //end of the loop /?>
	<div>
  
	<section class="site-content">
	      <div id="contact-tag" div class="contact-tag align-center">
	      <h2><?php echo $contact; ?></h2>
			 
<h3><a class="button" href="<?php echo home_url(); ?>/contact-me">Contact Me</a></h3>
		  </div>
	  </section>
	      </div><!-- about-tag -->
	    </div><!-- #content -->			


<?php get_footer(); ?>