<?php
/**
Template Name: Education-Classes
**/

get_header(); ?>

	<div id="content" class="site-content">
    	<div class="slider">
        	<div class="classes-box">
            	<div class="classes-text">
                	Education | <span style="color:#9c7e54;"><?php the_title(); ?></span>
                </div>
            		
            </div>
        </div>
        
        <div class="classes-main">
        	<div class="restricter2">
            	
                
                <?php
							// Today's date
							$date_2 = date('Ymd', strtotime("now"));
							
							
							
						?>
                
                
                
                <?php $pub_query = new WP_Query(array( 'post_type' => 'Class', 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'dsc')); ?>
                     
            <?php if( $pub_query->have_posts() ) : 
	while( $pub_query->have_posts() ) : 
	$pub_query->the_post(); ?>              
                          
                          
                          <?php $start_date = get_field('date');
							if($start_date > $date_2) { ?>
                          
                          
                 	
                 		<div class="class-box">
                        <a  href="<?php the_permalink(); ?>">
                	<div class="class-pic">
                    	<img src="<?php the_field('thumbnail'); ?>" style="width:100%;">
                    </div>
                    <div class="class-title">
                    	<?php the_field('title'); ?>
                        <div class="adults">
                        	<?php the_field('ages'); ?>
                        </div>
                    </div>
                    <div class="class-details">
                    	<div class="when-title">
                        	when
                        </div>
                        <div class="when">
                        
                        			<?php 

									// get raw date
									$date = get_field('date', false, false);
									
									
									// make date object
									$date = new DateTime($date);
									
									?>
									<?php echo $date->format('M. d , Y'); ?>
                                    <?php ?>
                                    
                        	<?php the_field('time'); ?>
                        </div>
                        <div class="where-title">
                        	where
                        </div>
                        <div class="where">
                        	<?php the_field('where'); ?>
                        </div>
                    </div>
                    <div class="class-text">
                    	<?php the_field('excerpt'); ?>
                    </div>
                    
                    </a>
                    <div class="paypal a">
                    
                    <?php the_field('paypal'); ?>
                    </div>
                </div>
                
                <?php } ?>
                
                
                            <!--<div class="ex-box">
                            	<div class="sub-top-shadow4">
                        		</div>
                            	<img src="<?php the_field('thumbnail'); ?>" style="width:100%;">
                            	<div class="status-box">
                                	COMING SOON
                                </div>
                            	<div class="ex-bottom">
                                	<div class="ex-title">
                                    	<?php the_field('title'); ?>
                                    </div>
                                    <div class="ex-tag">
                                    
                                    
                                    	<?php the_field('tagline'); ?>
                                    </div>
                                </div>
                            </div>-->
                        
                        
                          
                 <?php endwhile; endif; wp_reset_query(); ?>
                
                
                
                
                
                
            
            
                <!--<div class="class-box">
                	<div class="class-pic">
                    	<img src="<?php bloginfo('template_directory'); ?>/images/family-art.jpg" style="width:100%;">
                    </div>
                    <div class="class-title">
                    	Free Family Art
                        <div class="adults">
                        	Adults Only
                        </div>
                    </div>
                    <div class="class-details">
                    	<div class="when-title">
                        	when
                        </div>
                        <div class="when">
                        	Wednesdays in June<br>
                            &nbsp&nbsp&nbsp&nbsp&nbsp June 1, 8, 15, 22, & 29<br>
                            &nbsp&nbsp&nbsp&nbsp&nbsp 1:00 – 4:00pm<br>
                        </div>
                        <div class="where-title">
                        	where
                        </div>
                        <div class="where">
                        	Museum Annex
                        </div>
                    </div>
                    <div class="class-text">
                    	Each class will offer a new art experience. No reservations are needed for this free make and take art program for families.
                    </div>
                    <div class="paypal">
                    </div>
                </div>-->
                
                
                
            </div>
        </div>
        
        
        
        
            
            
            
        	<!--<div class="exhibition">
                <div class="restricter2">
                    <div class="ec-title">
                        <div class="sub-top-shadow">
                        </div>
                        
                        <div class="title-text">
                            Exhibitions
                        </div>
                        <div class="more-box">
                            MORE >>
                        </div>
                        <div class="title-bar">
                            
                        </div>
                        </div>
                    
                    
                    <div class="ec-content">
                    </div>
                    
                </div>
            </div>
            <div class="collection">
                
                    <div class="ec-title">
                        <div class="sub-top-shadow">
                        </div>
                        <div class="restricter3">
                        <div class="title-text">
                            Collections
                        </div>
                        <div class="more-box">
                            MORE >>
                        </div>
                        <div class="title-bar">
                            
                        </div>
                    
                    <div class="ec-content">
                    </div>
                    </div>
                </div>
            </div>-->
        <!--<div class="subscribe">
        	<div class="sub-top-shadow">
            </div>
            <div class="sub-wrap">
                <div class="sub-text">
                    Subscribe to the LRMA e-newsletter
                </div>
                <div class="sub-button">
                        SIGN UP
                </div>
            </div>
            <div class="sub-bottom-shadow">
            </div>
        </div>-->
    </div><!-- #content -->

<?php
get_footer();
