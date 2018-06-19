<?php
/**
Template Name: Education-Classes
**/

get_header(); ?>

<div id="content" class="site-content">
  <div class="slider">
    <div class="classes-box">
      <div class="classes-text"> Education | <span style="color:#9c7e54;">
        <?php the_title(); ?>
        </span> </div>
    </div>
  </div>
  <div class="classes-main">
    <div class="restricter2">
      <?php
							// Todays date
							$date_2 = date('Ymd', strtotime("now"));
							
							
							
						?>
      <?php $pub_query = new WP_Query(array( 'post_type' => 'Class', 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'dsc')); ?>
      <?php if( $pub_query->have_posts() ) : 
	while( $pub_query->have_posts() ) : 
	$pub_query->the_post(); ?>
      <?php $start_date = get_field('date');
							if($start_date > $date_2) { ?>
      <div class="class-box"> <a  href="<?php the_permalink(); ?>">
        <div class="class-pic"> <img src="<?php the_field('thumbnail'); ?>" style="width:100%;"> </div>
        <div class="class-title">
          <?php the_field('title'); ?>
          <div class="adults">
            <?php the_field('ages'); ?>
          </div>
        </div>
        <div class="class-details">
          <div class="when-title"> when </div>
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
          <div class="where-title"> where </div>
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
      <?php endwhile; endif; wp_reset_query(); ?>
    </div>
  </div>
</div>
<!-- #content -->

<?php
get_footer();

