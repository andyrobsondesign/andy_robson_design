<?php

//* Add opening markup for the Page Header
//$header_color = get_option( 'create_header_color', 'true' );
//if ( $header_color === 'white' ) {
//	add_action( 'genesis_after_header', 'create_opening_page_header', 8 );
//} else {
//	add_action( 'genesis_before_header', 'create_opening_page_header' );
//}

function create_opening_page_header() {
	if ( ( is_front_page() && is_active_sidebar( 'front-page-hero' ) ) || ( is_page() && !is_page_template( 'page_landing.php' ) ) || is_single() || is_archive() || is_home() ) {

		if ( is_front_page() && is_active_sidebar( 'front-page-hero' ) ) {
			$hero_image = get_option( 'create-hero-image', sprintf( '%s/images/hero-image-1.jpg', get_stylesheet_directory_uri() ) );
			$background_image = 'style="background-image: url(' . $hero_image . ')"';
		}

		if ( ( is_page() || is_single() || ( is_home() && get_option('page_for_posts') ) ) && has_post_thumbnail() ) {
			if ( is_home() && get_option('page_for_posts') ) {
				$posts_page_id = get_option('page_for_posts');
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $posts_page_id ), 'full' );
			} else {
				$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			}
			$background_image = 'style="background-image: url(' . $image[1] . ')';
		}

		if ($background_image) {
			$background_image_class = 'with-background-image';
		}

		?>
get_header(); ?>
     	 <div id="menu_wrap">
       		<?php $advance_search_checkbox = get_theme_mod('advance_search_box',0);?>
				<?php if( isset($advance_search_checkbox) && $advance_search_checkbox == 1):?>
					<div class="social-advance">
						<div class="search-toggle">
                			 <div class="search-icon">
                        <i class="fa fa-search"></i>
                        <div class="advance-search">
                            <div class="close">&times;</div>
                                 <?php get_search_form(); ?>
                         <div class="overlay-search"> </div> 
                        </div>
                    </div> 
            			</div>
                 	</div>
        		<?php endif; ?>
				
  				 <?php $advance_social1_checkbox = get_theme_mod('advance_social1_checkbox',1);?>
			<?php if( isset($advance_social1_checkbox) && $advance_social1_checkbox == 1):?>
      		<!--social-->    
            	<?php get_template_part('parts/social','loop'); ?>
           <?php endif?>      
     

        <!--MENU STARTS-->
       			<h3 class="menu"><?php _e( 'Andy Robson Design', 'advance' ); ?></h3>
       		 	<section id='navmenu'>
       			 <div id="navmenu">
        
 					<?php 
						wp_nav_menu( array( 
		
		  				'container_class' => 'menu-header', 
		  				'theme_location' => 'primary' 
		  				) ); 
		 
					 ?> 
        
    			</div>
			</section>
      	</div>
        <a id="showHere"></a>
    </div>
     </div>  
				
				
			</div>
		</div>

		<?php
	}
}