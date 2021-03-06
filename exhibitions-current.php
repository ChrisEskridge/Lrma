<?php
/**
Template Name: Exhibition-Current
**/

get_header(); ?>

<div id="content" class="site-content">
  <div class="slider">
    <div class="classes-box">
      <div class="classes-text"> Exhibitions | <span style="color:#9c7e54;">
        <?php the_title(); ?>
        </span> </div>
    </div>
  </div>
  <div class="classes-main">
    <div class="restricter2">
      <?php     
                //Past date
                $date_1 = date('Ymd', strtotime("-120 months"));
                //Today's date
                $date_2 = date('Ymd', strtotime("now"));
                //Future date
                $date_3 = date('Ymd', strtotime("+24 months")); ?>
      <?php $current_args = new WP_Query(array( 'post_type'		=> 'exhibition',
														'posts_per_page'	=> -1,
														'orderby'		=> 'meta_value_num',
														'order'			=> 'ASC',
														'meta_key'		=> 'end_date',
														'meta_query'		=> array(
															'relation'	=> 'AND',
															array(
																'key'	=> 'date',
																'value'	=> $date_2,
																'compare'	=> '<'
															),
															array(
																'key'	=> 'end_date',
																'value'	=> $date_2,
																'compare'	=> '>')))); ?>
      <?php if( $current_args->have_posts() ) : 
	while( $current_args->have_posts() ) : 
	$current_args->the_post(); ?>
      <a  href="<?php the_permalink(); ?>">
      <div class="ex-wrap2">
        <div class="ex-box2">
          <div class="sub-top-shadow4"> </div>
          <img src="<?php the_field('thumbnail'); ?>" style="width:100%;">
          <div class="status-box">
            <?php 

									// get raw date
									$date = get_field('date', false, false);
									
									
									// make date object
									$date = new DateTime($date);
									
									?>
            <?php echo $date->format('M. d , Y'); ?>
            <?php ?>
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
</div>
<!-- #content -->

<?php
get_footer();

