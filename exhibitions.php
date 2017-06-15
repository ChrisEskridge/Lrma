<?php
/**
Template Name: Exhibition
**/

get_header(); ?>

	<div id="content" class="site-content">
    	<div class="slider">
        	<div class="classes-box">
            	<div class="classes-text">
                	Exhibitions | <span style="color:#9c7e54;"><?php the_title(); ?></span>
                </div>
            		
            </div>
        </div>
        
        <div class="classes-main">
        	<div class="restricter2">
                
                
                
                
                		<!--<div class="ex-wrap2">
                            <div class="ex-box2">
                            	<div class="sub-top-shadow4">
                        		</div>
                            	<img src="<?php bloginfo('template_directory'); ?>/images/chihuly.jpg" style="width:100%;">
                            	<div class="status-box">
                                	CURRENT
                                </div>
                            	<div class="ex-bottom">
                                	<div class="ex-title">
                                    	Dale Chihuly | Venetians
                                    </div>
                                    <div class="ex-tag">
                                    	Works from the George R. Stroemple Collection
                                    </div>
                                </div>
                            </div>
                        </div>
                		<div class="ex-wrap2">
                            <div class="ex-box2">
                            	<div class="sub-top-shadow4">
                        		</div>
                            	<img src="<?php bloginfo('template_directory'); ?>/images/butcher.jpg" style="width:100%;">
                            	<div class="status-box">
                                	COMING SOON
                                </div>
                            	<div class="ex-bottom">
                                	<div class="ex-title">
                                    	America the Beautiful: The Monumental Photographs of Clyde Butcher
                                    </div>
                                    <div class="ex-tag">
                                    	
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ex-wrap2">
                            <div class="ex-box2">
                            	<div class="sub-top-shadow4">
                        		</div>
                            	<img src="<?php bloginfo('template_directory'); ?>/images/chihuly.jpg" style="width:100%;">
                            	<div class="status-box">
                                	CURRENT
                                </div>
                            	<div class="ex-bottom">
                                	<div class="ex-title">
                                    	Dale Chihuly | Venetians
                                    </div>
                                    <div class="ex-tag">
                                    	Works from the George R. Stroemple Collection
                                    </div>
                                </div>
                            </div>
                        </div>
                		<div class="ex-wrap2">
                            <div class="ex-box2">
                            	<div class="sub-top-shadow4">
                        		</div>
                            	<img src="<?php bloginfo('template_directory'); ?>/images/butcher.jpg" style="width:100%;">
                            	<div class="status-box">
                                	COMING SOON
                                </div>
                            	<div class="ex-bottom">
                                	<div class="ex-title">
                                    	America the Beautiful: The Monumental Photographs of Clyde Butcher
                                    </div>
                                    <div class="ex-tag">
                                    	
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ex-wrap2">
                            <div class="ex-box2">
                            	<div class="sub-top-shadow4">
                        		</div>
                            	<img src="<?php bloginfo('template_directory'); ?>/images/chihuly.jpg" style="width:100%;">
                            	<div class="status-box">
                                	CURRENT
                                </div>
                            	<div class="ex-bottom">
                                	<div class="ex-title">
                                    	Dale Chihuly | Venetians
                                    </div>
                                    <div class="ex-tag">
                                    	Works from the George R. Stroemple Collection
                                    </div>
                                </div>
                            </div>
                        </div>
                		<div class="ex-wrap2">
                            <div class="ex-box2">
                            	<div class="sub-top-shadow4">
                        		</div>
                            	<img src="<?php bloginfo('template_directory'); ?>/images/butcher.jpg" style="width:100%;">
                            	<div class="status-box">
                                	COMING SOON
                                </div>
                            	<div class="ex-bottom">
                                	<div class="ex-title">
                                    	America the Beautiful: The Monumental Photographs of Clyde Butcher
                                    </div>
                                    <div class="ex-tag">
                                    	
                                    </div>
                                </div>
                            </div>
                        </div>-->
                
                
                
                
                
                
                
                
                
                
                <?php $exhibition_query = new WP_Query(array( 'post_type' => 'exhibition', 'posts_per_page' => 100, 'orderby' => 'date', 'order' => 'asc')); ?>
                     
            <?php if( $exhibition_query->have_posts() ) : 
	while( $exhibition_query->have_posts() ) : 
	$exhibition_query->the_post(); ?>              
                          
                 	<a  href="<?php the_permalink(); ?>">
                 		<div class="ex-wrap2">
                            <div class="ex-box2">
                            	<div class="sub-top-shadow4">
                        		</div>
                            	<img src="<?php the_field('exhibition_image'); ?>" style="width:100%;">
                            	<div class="status-box">
                                	<?php the_field('date'); ?>
                                </div>
                            	<div class="ex-bottom">
                                	<div class="ex-title">
                                    	<?php the_field('title'); ?>
                                    </div>
                                    <div class="ex-tag">
                                    
                                    
                                    	<?php the_field('tagline'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>    
                          
                 <?php endwhile; endif; wp_reset_query(); ?>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
            </div>
        </div>
        
        <!--<div class="classes-main">
        	<div class="restricter2">
                <div class="class-box">
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
                </div>
                
            </div>
        </div>-->
        
        
        
        
            
            
            
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
