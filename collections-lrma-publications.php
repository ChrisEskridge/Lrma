<?php
/**
Template Name: Collections-LRMA-Publications
**/

get_header(); ?>

<div id="content" class="site-content">
  <div class="slider">
    <div class="classes-box">
      <div class="classes-text"> Collections | <span style="color:#9c7e54;">
        <?php the_title(); ?>
        </span> </div>
    </div>
  </div>
  <div class="classes-main">
    <div class="restricter2">
      <div class="boxes-wrap">
        <?php $pub_query = new WP_Query(array( 'post_type' => 'LRMA Publication', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'asc')); ?>
        <?php if( $pub_query->have_posts() ) : 
	while( $pub_query->have_posts() ) : 
	$pub_query->the_post(); ?>
        <a  href="<?php the_permalink(); ?>">
        <div class="class-box">
          <div class="class-pic"> <img src="<?php the_field('thumbnail'); ?>" style="width:100%;"> </div>
          <div class="class-title">
            <?php the_field('title'); ?>
          </div>
          <div class="class-details">
            <div class="when">
              <?php the_field('price'); ?>
            </div>
          </div>
          <div class="class-text">
            <?php the_field('excerpt'); ?>
          </div>
          <div class="paypal"> </div>
        </div>
        </a>
        <?php endwhile; endif; wp_reset_query(); ?>
      </div>
    </div>
  </div>
</div>
<!-- #content -->

<?php
get_footer();

