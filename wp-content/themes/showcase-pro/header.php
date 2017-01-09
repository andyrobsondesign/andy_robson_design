<?php
/**
 * The Header for our pages
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Custom
 * @since Custom 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,700,400' rel='stylesheet' type='text/css'>
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo( 'stylesheet_directory' ); ?>/font-face/fonts.css" />

<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>
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
       
       			 <div id="navmenu">
        
 					<?php 
						wp_nav_menu( array( 
		
		  				'container_class' => 'menu-header', 
		  				'theme_location' => 'primary' 
		  				) ); 
		 
					 ?> 
        
    			</div>
      	</div>
        <a id="showHere"></a>
    </div>
     </div>  

	<div id="main" class="site-main">
