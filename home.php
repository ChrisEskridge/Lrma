<?php
/**
Template Name: Home
**/
get_header(); ?>

<div id="content" class="site-content"> 
  <div class="slider">
    <div class="slider-box">
      <div class="slider-events">
        <div class="ec-title2">
          <div class="title-text">Events</div>
          <a href="http://lrma.robertscreative.com/events/">
          	<div class="more-box">MORE <span style="font-size:15px;">&raquo;</span></div>
          </a> 
          <div class="title-bar"></div>
          <div class="slider-wrap">
            <?php
		// Today's date
		$date_2 = date('Ymd', strtotime("now"));
	     ?>
            <?php $pub_query = new WP_Query(array( 'post_type' => 'event', 'posts_per_page' => 10, 'orderby' => 'title', 'order' => 'asc')); ?>
            <?php if( $pub_query->have_posts() ) : 
		while( $pub_query->have_posts() ) : 
			$pub_query->the_post(); 
	
	     ?>
            <?php $start_date = get_field('when');
		if($start_date > $date_2) { ?>
            <div class="slider-event-post">
              <div class="slider-when">
                <?php 
		  // get raw date
		  $date = get_field('when', false, false);
			
		   // make date object
		   $date = new DateTime($date);
									
		?>
                <?php echo $date->format('M. d , Y'); ?>
                <?php ?>
              </div>
              <div class="slider-class-title">
                <?php the_field('title'); ?>
              </div>
              <!--<div class="slider-where">
                     <?php the_field('where'); ?>
                   </div>-->
              <?php $link= get_field('link'); ?>
              <?php if ($link != '') { ?>
              <div class="more-info"> <a href="<?php the_field('link'); ?>"> <span style="white-space:nowrap">More Information &raquo;</span> </a> </div>
              <?php } ?>
            </div>
            <?php } ?>
            
            <!--<a  href="<?php the_permalink(); ?>">
                 <div class="class-box">
                     <div class="class-title">
                         <?php the_field('title'); ?>
                     </div>
                     <div class="class-details">
                         <div class="when-title">
                             when
                          </div>
                         <div class="when">
                             <?php the_field('when'); ?>
                                    
                          </div>
                          <div class="where-title">
                              where
                          </div>
                          <div class="where">
                              <?php the_field('where'); ?>
                          </div>
                     </div>
                   </div>
                  </a>-->
            
            <?php endwhile; endif; wp_reset_query(); ?>
          </div>
          <div class="newsletter"> <a href="<?php the_field('newsletter_file'); ?>">
            <div class="sub-top-shadow4"></div>
            <div class="newsletter-image" style="background-image:url(<?php the_field('newsletter_image'); ?>); background-size:cover;"> 
              <!--<img src="<?php bloginfo('template_directory'); ?>/images/american.jpg" style="width:100%;">--> 
            </div>
            <div class="newsletter-title"> Download the <br>
              Latest Newsletter </div>
            </a> </div>
        </div>
      </div>
      <?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow( "main", "" ); } ?>
    </div>
  </div>
  <div class="exhibition-collection">
    <div class="sub-top-shadow3"></div>
    <div class="right-color"></div>
    <div class="restricter2">
      <div class="exhibition">
        <div class="ec-title">
          <div class="sub-top-shadow2"></div>
          <div class="title-text">Exhibitions</div>
          <a href="http://lrma.robertscreative.com/exhibitions/past/">
          <div class="more-box">MORE <span style="font-size:15px;">&raquo;</span></div>
          </a>
          <div class="title-bar"></div>
        </div>
        <div class="ec-content">
          <div class="ex-wrap">
            <?php
		// Today's date
		$date_2 = date('Ymd', strtotime("now"));
		// Future date
		$date_3 = date('Ymd', strtotime("+24 months"));
							
		// Current and Future events - all events with an end date after today
		$exhibition_args = array(
			'post_type'		=> 'exhibition',
			'posts_per_page'=> 3,
			'orderby'		=> 'meta_value_num',
			'order'			=> 'ASC',
			'meta_key'		=> 'date',
			'meta_query' 	=> array(
			'key' 		=> 'end_date',
			'value' 		=> $date_2,
			'type' 		=> 'numeric',
			'compare' 	=> '>'
			)
		);
	     ?>
            <?php 
		$exhibition_query = new WP_Query($exhibition_args);
							
		if($exhibition_query->have_posts()) : while($exhibition_query->have_posts()) : $exhibition_query->the_post(); 
							
		$start_date = get_field('date');
		if($start_date > $date_2) {
			$status = 'COMING SOON';
		} elseif($start_date <= $date_2) {
			$status = 'CURRENT';
		}
	      ?>
            <a href="<?php the_permalink(); ?>">
            <div class="ex-box">
              <div class="sub-top-shadow4"></div>
              <img src="<?php the_field('thumbnail'); ?>" style="width:100%;">
              <div class="status-box"><?php echo $status; ?></div>
              <div class="ex-bottom">
                <div class="ex-title">
                  <?php the_field('title'); ?>
                </div>
                <div class="ex-tag">
                  <?php the_field('tagline'); ?>
                </div>
              </div>
            </div>
            </a>
            <?php endwhile; endif; wp_reset_query(); ?>
          </div>
        </div>
        <?php // end .ec-content ?>
      </div>
      <?php // end .exhibition ?>
      <div class="collection">
        <div class="ec-title">
          <div class="sub-top-shadow2"></div>
          <div class="title-text">Collections</div>
          <a href="http://lrma.robertscreative.com/collections/collections-database/">
          <div class="more-box">MORE <span style="font-size:15px;">&raquo;</span></div>
          </a>
          <div class="title-bar"></div>
        </div>
        <div class="ec-content">
          <div class="col-wrap">
            <?php $collection_query = new WP_Query(array( 'post_type' => 'page', 'post_parent' => 50, 'posts_per_page' => 6, 'post__in' => array(52,57,65,61,71,73), 'orderby' => 'title', 'order' => 'asc')); ?>
            <?php if( $collection_query->have_posts() ) : while( $collection_query->have_posts() ) : $collection_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>">
            <div class="col-box">
              <div class="sub-top-shadow4"></div>
              <div class="col-pic"><img src="<?php the_field('thumbnail_small'); ?>" style="width:100%;"></div>
              <div class="col-pic2"><img src="<?php the_field('thumbnail'); ?>" style="width:100%;"></div>
              <div class="col-text">
                <?php the_title(); ?>
              </div>
            </div>
            </a>
            <?php endwhile; endif; wp_reset_query(); ?>
          </div>
        </div>
      </div>
      <?php // end .collection ?>
    </div>
    <?php // end .restricter2 ?>
  </div>
  <?php // end .exhibition-collection ?>
  <div class="subscribe">
    <div class="sub-top-shadow"></div>
    <div class="sub-wrap">
      <div class="sub-text">Subscribe to the <span style="font-family:Noto Serif, serif; font-style:italic; font-size:24px;">LRMA</span> e-newsletter</div>
      <a href="https://visitor.r20.constantcontact.com/manage/optin?v=001YO7rQ8A-4TDZRd1b4UKJf5XzfhZwCFL4i9d6VCJnpcFNgP6B7dHs2QnXREordUUSS8-MCAk98juOb93Rt-6mFM7XXecmQvGccyYS5kLuStAaZJfKTC6TWx2LIlt4-ODKTIbI5KItTdg1aKfuBofGn2fIujrxAZN2">
      <div class="sub-button">SIGN UP</div>
      </a> </div>
    <div class="sub-bottom-shadow"></div>
  </div>
  <?php // end .subscribe ?>
</div>
<?php // end #content ?>
<?php
get_footer();

