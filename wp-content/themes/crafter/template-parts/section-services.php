<?php
$crafter_enable_section = get_theme_mod( 'crafter_services_enable', true );
if ( $crafter_enable_section || is_customize_preview() ) :
?>
<div id="services-section" class="services-section"  <?php if( false == $crafter_enable_section ): echo 'style="display: none;"'; endif ?>>
	<h2 class="section-title"><?php echo esc_html( get_theme_mod( 'crafter_services_title', esc_html__( 'What We Do', 'crafter' ) ) ); ?></h2>


			<?php
			$id = get_theme_mod( 'crafter_services_page', '' );
			$post = get_post( $id ); 

			if ( is_a( $post, 'WP_Post' ) ) {

				$content = apply_filters( 'the_content', $post->post_content ); 
				echo $content;
				
			}else{
			?>
			<div class="widget widget_service-widget service wow fadeInUp">
			    <div class="service-category">Design <span></span></div>
			        
			    <div class="service-text">
			        <img src="http://demo.quemalabs.com/crafter/wp-content/uploads/2016/11/layers_64px.png" alt="" class="service-icon">
			        <h4>Design</h4>
			        <p>There are many questions to be answered when you start on the journey to create your site.  During this stage, we will uncover the answers to the goals for your site. </p>  
			        <a href="http://andyrobsondesign.com/skills/design/" class="read-more">Learn More <i class="fa fa-angle-right"></i></a>
			    </div>
			    <div class="clearfix"></div>
			</div>

			<div class="widget widget_service-widget service wow fadeInUp">
			    <div class="service-category">Develop <span></span></div>

			    <div class="service-text">
			        <img src="http://demo.quemalabs.com/crafter/wp-content/uploads/2016/11/linegraph_64px.png" alt="" class="service-icon">
			        <h4>Development</h4>
			        <p>During this stage, I’ll research and plan how to meet those goals. You'll recieve a summary from the discovery stage and the research information to ensure we are on the same page before moving forward. </p>  
			        <a href="http://andyrobsondesign.com/skills/develop/" class="read-more">Learn More <i class="fa fa-angle-right"></i></a>
			    </div>
			    <div class="clearfix"></div>


			</div>

			<div class="widget widget_service-widget service wow fadeInUp">

			    <div class="service-category">Create <span></span></div>
			        
			    <div class="service-text">
			        <img src="http://demo.quemalabs.com/crafter/wp-content/uploads/2016/11/megaphone_64px.png" alt="" class="service-icon">
			        <h4>Content Management</h4>
			        <p>We will determine what your strategy is by creating user personas, preforming a content inventory audit, and determine your goals and KPI’s. .</p>  
			        <a href="http://andyrobsondesign.com/skills/content-management/" class="read-more">Learn More <i class="fa fa-angle-right"></i></a>
			    </div>
			    <div class="clearfix"></div>

			</div>

			<div class="widget widget_service-widget service wow fadeInUp">
			    <div class="service-category">Care <span></span></div>

			    <div class="service-text">
			        <img src="http://demo.quemalabs.com/crafter/wp-content/uploads/2016/11/tools_64px.png" alt="" class="service-icon">
			        <h4>WordPress Care Plans</h4>
			        <p>You've invested alot into your site. You want to protect it and keep it up to date.  I can help you do that. </p>  
			        <a href="#" class="read-more">Learn More <i class="fa fa-angle-right"></i></a>
			    </div>
			    <div class="clearfix"></div>

			</div>
			<?php

			};
			?>
    
</div><!-- services-section -->
<?php endif ?>