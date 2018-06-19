<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lrma.robertscreative.com
 */

get_header(); ?>

<div id="content" class="site-content">
  <?php while(have_rows('flex_content')) : the_row(); ?>
  <?php if(get_row_layout() == 'header') : ?>
  <div class="slider">
    <div class="restricter">
      <div class="slider-box2" style="background-image:url(<?php the_sub_field('background_image'); ?>)">
        <div class="pic-text"> <span style="color:#dbd2be;">Exhibition |</span>
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
</div>
<!-- #content -->

<?php
get_footer();

