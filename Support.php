<?php
/**
Template Name: Support
**/
get_header(); ?>

<div id="content" class="site-content"> 
  <!--<div class="slider">
        <div class="slider-box">
            	<div class="pic-text">
                	<span style="color:#dbd2be;">Collections |</span> <?php the_title(); ?>
                </div>
            	<img src="<?php bloginfo('template_directory'); ?>/images/about.jpg" style="width:100%;">
            </div>
        </div>-->
  
  <?php while(have_rows('flex_content')) : the_row(); ?>
  <?php if(get_row_layout() == 'header') : ?>
  <div class="slider">
    <div class="restricter">
      <div class="slider-box2" style="background-image:url(<?php the_sub_field('background_image'); ?>)">
        <div class="pic-text"> <span style="color:#dbd2be;">Support |</span>
          <?php the_title(); ?>
        </div>
      </div>
    </div>
  </div>
  <?php elseif(get_row_layout() == 'pic_right') : ?>
  <div class="about-1">
    <div class="left-color"> </div>
    <div class="restricter2">
      <div class="right-third-hidden">
        <div class="pic-box">
          <?php while( have_rows('image_repeater') ): the_row(); 
		// vars
		$image = get_sub_field('image');
												
	  ?>
          <?php if( $image ): ?>
          <img src="<?php the_sub_field('image'); ?>" style="width:100%;">
          <?php endif; ?>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="left-2third-table">
        <?php the_sub_field('text'); ?>
        <br>
        <?php the_field('paypal'); ?>
      </div>
      <div class="right-third-hidden2">
        <div class="pic-box">
          <?php while( have_rows('image_repeater') ): the_row(); 
		// vars
		$image = get_sub_field('image');
												
	  ?>
          <?php if( $image ): ?>
          <img src="<?php the_sub_field('image'); ?>" style="width:100%;">
          <?php endif; ?>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
  <?php elseif(get_row_layout() == 'pic_left') : ?>
  <div class="about-1">
    <div class="right-color"> </div>
    <div class="restricter2">
      <div class="left-third">
        <div class="pic-box">
          <?php while( have_rows('image_repeater') ): the_row(); 
		// vars
		$image = get_sub_field('image');
												
	  ?>
          <?php if( $image ): ?>
          <img src="<?php the_sub_field('image'); ?>" style="width:100%;">
          <?php endif; ?>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="right-2third">
        <?php the_sub_field('text'); ?>
      </div>
    </div>
  </div>
  <?php elseif(get_row_layout() == 'background_pic_left') : ?>
  <div class="about-2" style="background-image:url(<?php the_sub_field('background_image'); ?>)">
    <div class="restricter2">
      <div class="left-third-clear2">
        <div class="pic-box">
          <?php while( have_rows('image_repeater') ): the_row(); 
		// vars
		$image = get_sub_field('image');
												
	  ?>
          <?php if( $image ): ?>
          <img src="<?php the_sub_field('image'); ?>" style="width:100%;">
          <?php endif; ?>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="right-2third-clear">
        <?php the_sub_field('text'); ?>
      </div>
    </div>
  </div>
  <?php elseif(get_row_layout() == 'background_pic_right') : ?>
  <div class="about-2">
    <div class="restricter2">
      <div class="left-third-clear2">
        <div class="pic-box">
          <?php while( have_rows('image_repeater') ): the_row(); 
		// vars
		$image = get_sub_field('image');
												
	  ?>
          <?php if( $image ): ?>
          <img src="<?php the_sub_field('image'); ?>" style="width:100%;">
          <?php endif; ?>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="right-2third-clear">
        <?php the_sub_field('text'); ?>
      </div>
    </div>
  </div>
  <?php elseif(get_row_layout() == 'background') : ?>
  <div class="european-pic" style="background-image:url(<?php the_sub_field('background_image'); ?>)">
    <div class="restricter2">
      <div class="pic-quote">
        <?php the_sub_field('text'); ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php endwhile; ?>
  
  <!--<div class="about-1">
        	<div class="left-color">
            </div>
        	<div class="restricter2">
                <div class="right-third-hidden">
                    <div class="pic-box">
                        <img src="<?php bloginfo('template_directory'); ?>/images/lr.jpg" style="width:100%;">
                    </div>
                </div>
                <div class="left-2third-table">
                    <?php the_field('text_1'); ?>
                </div>
                <div class="right-third-hidden2">
                    <div class="pic-box">
                    	<img src="<?php bloginfo('template_directory'); ?>/images/lr.jpg" style="width:100%;">
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="about-2">
        	
        	<div class="restricter2">
                <div class="left-third-clear2">
                    <div class="pic-box">
                        <img src="<?php bloginfo('template_directory'); ?>/images/lr.jpg" style="width:100%;">
                    </div>
                </div>
                <div class="right-2third-clear">
                    <?php the_field('text_2'); ?>
                </div>
            </div>
        </div>
        
        <div class="about-1">
        	<div class="left-color">
            </div>
        	<div class="restricter2">
            
            	<div class="right-third-hidden">
                    <div class="pic-box">
                        <img src="<?php bloginfo('template_directory'); ?>/images/lr.jpg" style="width:100%;">
                    </div>
                </div>
                <div class="left-2third-table">
                    <?php the_field('text_3'); ?>
                </div>
                <div class="right-third-hidden2">
                    <div class="pic-box">
                        <img src="<?php bloginfo('template_directory'); ?>/images/lr.jpg" style="width:100%;">
                    </div>
                </div>--> 
  
  <!--<div class="right-third">
                    <div class="pic-box">
                        <img src="<?php bloginfo('template_directory'); ?>/images/lr.jpg" style="width:100%;">
                    </div>
                    
                </div>
                <div class="left-2third">
                    The Rogers and Eastman families donated important 19th and 20th century paintings by such noteworthy American artists as Winslow Homer, Albert Bierstadt, George Inness, John Frederick Kensett and Ralph Albert Blakelock. Works by John H. Twachtman and John Singer Sargent were acquired soon thereafter. Today, the Museum displays one of the finest collections of 19th and 20th century European and American works to be found in the South. The Museum's European Gallery features paintings by Jean Francois Millet, Jean-Baptiste Camille Corot and Jules Adolph Breton, among others, and the American Gallery includes works by Thomas Moran, Mary Cassatt, Charles Hawthorne, John Sloan and others. The Museum's contemporary collection includes works by Romare Bearden, Marie Hull, Walter Anderson, Ida Kohlmeyer and other artists of national and regional renown.
    
    Another gift of the Museum's founders was the donation of 142 Japanese Ukiyo-e woodblock prints from the 18th and 19th centuries. Given by Lauren's father, Wallace B. Rogers, this outstanding collection features work by such masters as Harunobu, Masanobu, Utamaro, Eishi, Hokusai and Hiroshige and attracts visitors from throughout the United States.
    
    In the 1970s, Thomas and Harriet Gibbons, co-owners of the local newspaper, donated their extensive collection of sterling silver. The Gibbons English Georgian Silver Collection includes 65 major objects associated with the serving of tea, including tea caddies, tea and coffee pots, baskets for cakes and sweetmeats, and salvers. Works by John Gibbons, William Plummer, Hester Bateman, John Scofield and Henry Greenway are included.  
                </div>--> 
  <!--</div>
            
        </div>
        
        <div class="european-pic">
        	  
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
</div>
<!-- #content -->

<?php
get_footer();


