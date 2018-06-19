<?php
/**
Template Name: Exhibition
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
      <?php $exhibition_query = new WP_Query(array( 'post_type' => 'exhibition', 'posts_per_page' => 100, 'orderby' => 'date', 'order' => 'asc')); ?>
      <?php if( $exhibition_query->have_posts() ) : 
	while( $exhibition_query->have_posts() ) : 
	$exhibition_query->the_post(); ?>
      <a  href="<?php the_permalink(); ?>">
      <div class="ex-wrap2">
        <div class="ex-box2">
          <div class="sub-top-shadow4"> </div>
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
</div>
<!-- #content -->

<?php
get_footer();

