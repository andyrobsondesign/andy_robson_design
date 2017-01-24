<?php
$crafter_enable_section = get_theme_mod( 'crafter_pricing_enable', true );
if ( $crafter_enable_section || is_customize_preview() ) :
?>
<div id="pricing-section" class="pricing-section" <?php if( false == $crafter_enable_section ): echo 'style="display: none;"'; endif ?>>
    <h2 class="section-title wow fadeIn"><?php echo esc_html( get_theme_mod( 'crafter_pricing_title', __( 'Pricing', 'crafter' ) ) ); ?></h2>

    <div class="pricing-table-wrap">

            <?php
            $id = get_theme_mod( 'crafter_pricing_page', '' );
            $post = get_post( $id ); 

            if ( is_a( $post, 'WP_Post' ) ) {

                $content = apply_filters( 'the_content', $post->post_content ); 
                echo $content;
                
            }else{
            ?>
                <div class="pricing-table wow fadeInUp">
                    <h3>Development</h3>

                    
                    <ul>
						<li><em>$97</em> Blog Starter</li>
                        <li><em>$497</em> Blogger Plus</li>
                        <li><em>$897</em> Pro</li>
                        <li><em>$1097</em> Premium</li>
                        
                    </ul>

                    <a class="btn-ql" href="http://andyrobsondesign.com/services/">Select</a>
                    <span class="lines"></span>
                </div>

                <div class="pricing-table wow fadeInUp">

                    <h3>A la Carte Options</h3>

              

                    <ul>
                        <li><em>UX Design/Audit</em> Starts at $150</li>
                        <li><em>Branding</em> Starts at $100</li>
                        <li><em>Logos</em> Starts at $205</li>
                        <li><em>Copywriting</em> Starts at $47</li>
                        <li><em>SEO</em> Starts at $147</li>
                        <li><em>Custom Templates</em> Starts at $105</li>
						<li><em>Email Newsletters</em> Starts at $75</li>
						<li><em>WordPress Training</em> Starts at $55</li>
						<li><em>Photoshop</em> Starts at $47</li>
                    </ul>

                    <a class="btn-ql" href="http://andyrobsondesign.com/services/">Select</a>
                    <span class="lines"></span>
                </div>

                <div class="pricing-table wow fadeInUp">

                    <h3>WordPress Care Plans</h3>

                    <span class="pricing-price">
                        <span class="cd-currency">Starts at $</span><span class="cd-value">79</span><span class="cd-duration">mo</span>
                    </span>

                    <ul>
                        <li><em></em> Managed WordPress Updates</li>
                        <li><em></em> Backups</li>
                        <li><em></em> Security Monitoring</li>
                        <li><em></em> Scheduled Sessions</li>
                        
                    </ul>

                    <a class="btn-ql" href="http://andyrobsondesign.com/services/">Select</a>
                    <span class="lines"></span>
						
                </div>
            <?php
            }
            ?>
            
    </div> <!-- .pricing-table-wrap -->

</div><!-- pricing-section -->
<?php endif ?>