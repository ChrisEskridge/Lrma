<?php
/**
Template Name: Events
**/

get_header(); ?>

<div id="content" class="site-content">
  <div class="slider">
    <div class="classes-box">
      <div class="classes-text"> Events | <span style="color:#9c7e54;">All Events</span> </div>
    </div>
  </div>
  <div class="classes-main2">
    <div class="restricter2">
      <div class="ec-title3">
        <div class="title-text">Events</div>
        <div class="spacer"> <br>
        </div>
        <div class="title-bar"></div>
        <div class="slider-wrap">
          <?php
							// Todays date
							$date_2 = date('Ymd', strtotime("now"));
							
							
							
						?>
          <?php $pub_query = new WP_Query(array( 'post_type' => 'event', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'asc')); ?>
          <?php if( $pub_query->have_posts() ) : 
	while( $pub_query->have_posts() ) : 
	$pub_query->the_post(); ?>
          <?php $start_date = get_field('when');
							if($start_date > $date_2) { ?>
          <div class="slider-event-post">
            <div class="slider-when4">
              <?php 

									// get raw date
									$date = get_field('when', false, false);
									
									
									// make date object
									$date = new DateTime($date);
									
									?>
              <?php echo $date->format('M. d , Y'); ?>
              <?php ?>
            </div>
            <div class="slider-class-title3">
              <?php the_field('title'); ?>
            </div>
            <div class="slider-where3">
              <?php the_field('where'); ?>
            </div>
            <div class="slider-when3">
              <?php the_field('time'); ?>
            </div>
            <?php $link= get_field('link'); ?>
            <?php if ($link != '') { ?>
            <div class="more-info3"> <a href="<?php the_field('link'); ?>"> <span style="white-space:nowrap">More Information &raquo;</span> </a> </div>
            <?php } ?>
          </div>
          <?php } ?>
          <?php endwhile; endif; wp_reset_query(); ?>
        </div>
      </div>
      <?php $pub_query = new WP_Query(array( 'post_type' => 'event', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'asc')); ?>
      <?php if( $pub_query->have_posts() ) : 
	while( $pub_query->have_posts() ) : 
	$pub_query->the_post(); ?>
      <?php endwhile; endif; wp_reset_query(); ?>
    </div>
  </div>
</div>
<!-- #content -->

<?php
get_footer();

