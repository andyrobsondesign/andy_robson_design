<?php

/**
 * The template for displaying the About Page
* Template Name: About Page Template
*Description: Template for the custom about page
 *
 * @package WordPress
 * @subpackage crafter
 * @since crafter-theme-child 1.0
 */

get_header(); ?>
	<section class="hero-about">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="hero-text">
				<h3><?php the_content(); ?></h3>
					</div>
					<?php endwhile; // end of the loop. ?>
			</section>

			<div class="site-content">
			<div class="about">	
				<h2>About Me</h2>
				<p>Hello! Welcome to Andy Robson Design.  I'm Bobbi.  Who is Andy Robson you may ask?  Well, Andy Robson is a combination of people.  Andy is in honor of my grandfather "Andy" Anderson as well as my maternal grandmother.  The Robson portion of the name come from both my parents and paternal grandmother.  All of these people have taught me the importance of honor, honesty, and integrity which is the foundation of Andy Robson Design.  They've taught me to follow my dreams, pursue my passions, and believe that anything is possible if you work hard. This is not only the foundation of Andy Robson Design but also what I hope to help others realize in their own lives.   
 </p>
</br>
</br>
 <section id="quote">
<quote><span>What ever you do, do it <strong>well</strong>. </span> Do it so that when people see you do it they will want to <strong>come back</strong> and see you do it <strong>again</strong> and they will want to bring others and show them how <strong>well</strong> you do what you do.</quote>
<div class="quoteauthor">
 <p>-Walt Disney </p>
</div>
</div><!-- .site-content -->
</section>
</br>
</br>
<section class="contact">
	<div class="half-width2">
				<h2>Questions?</h2>
				<h2>			<img src="http://localhost:8888/andy_robson_design/wp-content/uploads/2016/11/Envelope.png" id="contact-img" alt="Contact image" /><a class="image" href="<?php echo home_url(); ?>/contact-me">Contact Me</a>
</div>
</section>