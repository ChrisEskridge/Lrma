<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lrma.robertscreative.com
 */

?>

	<div class="jdv">
        <div class="jdv-wrap">
        
        
        
        
        
        
        
        
        
        
        <?php $exhibition_query = new WP_Query(array( 'post_type' => 'page', 'page_id' => 5, 'posts_per_page' => 1, 'orderby' => 'title', 'order' => 'asc')); ?>
                     
            <?php if( $exhibition_query->have_posts() ) : 
	while( $exhibition_query->have_posts() ) : 
	$exhibition_query->the_post(); ?>              
                          
                 	<div class="jdv-box">
                        <div class="jdv-pic">
                            <img src="<?php bloginfo('template_directory'); ?>/images/join.png" style="width:100%;">
                        </div>
                        <div style="color:#6b6b6b;" class="jdv-text">
                            <?php the_field('join'); ?>
                        </div>
                        <a href="<?php the_permalink(126); ?>">
                        <div style="background-color:#6b6b6b;" class="jdv-button">
                            
                            JOIN
                            
                        </div>
                        </a>
                    </div>
                    <div class="jdv-box">
                        <div class="jdv-pic">
                            <img src="<?php bloginfo('template_directory'); ?>/images/donate.png" style="width:100%;">
                        </div>
                        <div style="color:#82806c;" class="jdv-text">
                            <?php the_field('donate'); ?>
                        </div>
                        <a href="<?php the_permalink(130); ?>">
                        <div style="background-color:#82806c;" class="jdv-button">
                            DONATE
                        </div>
                        </a>
                    </div>
                    <div class="jdv-box">
                        <div class="jdv-pic">
                            <img src="<?php bloginfo('template_directory'); ?>/images/volunteer.png" style="width:100%;">
                        </div>
                        <div style="color:#9c7e54;" class="jdv-text">
                            <?php the_field('volunteer'); ?>
                        </div>
                        <a href="<?php the_permalink(105); ?>">
                        <div style="background-color:#9c7e54;" class="jdv-button">
                            VOLUNTEER
                        </div>
                        </a>
                    </div>  
                          
                 <?php endwhile; endif; wp_reset_query(); ?>
        
        
        
        
        
        
        
        
        
        
        
            
        </div>
    </div>
	<div class="footer">
        <div class="restricter">
            <div class="footer-logo-wrap">
                <div class="footer-logos">
                    <div class="logo-box">
                        <img src="<?php bloginfo('template_directory'); ?>/images/aam2.png" style="width:80px; height:80px;">
                    </div>
                    <div class="logo-box">
                        <img src="<?php bloginfo('template_directory'); ?>/images/mac2.png" style="width:80px; height:80px;">
                    </div>
                    <div class="logo-box">
                        <img src="<?php bloginfo('template_directory'); ?>/images/true-south2.png" style="width:80px; height:80px;">
                    </div>
                </div>
            </div>
                <div class="footer-text">
                    <div class="footer-headline">
                        Lauren Rogers Museum of Art
                    </div>
                        565 N. Fifth Avenue<br>
                        Laurel, Mississippi 39440<br>
                        601.649.6374<br>
                        <br>
                    <div class="footer-small-type">
                        ©2016 Lauren Rogers Museum of Art.<br> All rights reserved.
                    </div>
                </div>
                <div class="trip-box">
                	<div id="TA_linkingWidgetRedesign551" class="TA_linkingWidgetRedesign"><ul id="p0FbZG4d1" class="TA_links ywoIdM1cESG"><li id="Ac5z1l5PA13" class="zH04F1"><a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/partner/tripadvisor_logo_115x18-15079-2.gif" alt="TripAdvisor"/></a></li></ul></div><script src="https://www.jscache.com/wejs?wtype=linkingWidgetRedesign&amp;uniq=551&amp;locationId=2078431&amp;lang=en_US&amp;border=true&amp;display_version=2"></script>
                	<!--
                	<img src="<?php bloginfo('template_directory'); ?>/images/trip-advisor.png" style="width:100%; border-radius:5px;" >
                	-->
                </div>
              
        </div>
        <div class="footer-shadow">
        	
        </div>
    </div>



<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('.menu-item-has-children').on("click", function(e){
			if(jQuery(this).hasClass('active')){
				jQuery(this).find('.sub-menu').hide();
				jQuery(this).removeClass('active');
			} else {
				jQuery(this).parent().parent().find('.sub-menu').hide();
				jQuery(this).parent().parent().find('.active').removeClass('active');
				jQuery(this).addClass('active');
				jQuery(this).find('.sub-menu').show();
			}
			e.preventDefault();
			return true;
		});
    	jQuery('.sub-menu li').on("click", function(e){
			e.stopPropagation();
    	});
		

	});
</script>






	
</div><!-- .page -->

<?php wp_footer(); ?>

</body>
</html>
