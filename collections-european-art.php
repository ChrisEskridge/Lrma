<?php
/**
Template Name: Collections-European-Art
**/

get_header(); ?>

<div id="content" class="site-content">
  <div class="slider">
    <div class="slider-box">
      <div class="pic-text"> <span style="color:#dbd2be;">Collections |</span> European Art </div>
      <img src="<?php bloginfo('template_directory'); ?>/images/about.jpg" style="width:100%;"> </div>
  </div>
  <div class="about-1">
    <div class="left-color"> </div>
    <div class="restricter2">
      <div class="right-third-hidden">
        <div class="pic-box"> <img src="<?php bloginfo('template_directory'); ?>/images/lr.jpg" style="width:100%;"> </div>
      </div>
      <div class="left-2third-table">
        <?php the_field('text_1'); ?>
      </div>
      <div class="right-third-hidden2">
        <div class="pic-box"> <img src="<?php bloginfo('template_directory'); ?>/images/lr.jpg" style="width:100%;"> </div>
      </div>
    </div>
  </div>
  <div class="about-2">
    <div class="restricter2">
      <div class="left-third-clear2">
        <div class="pic-box"> <img src="<?php bloginfo('template_directory'); ?>/images/lr.jpg" style="width:100%;"> </div>
      </div>
      <div class="right-2third-clear">
        <?php the_field('text_2'); ?>
      </div>
    </div>
  </div>
  <div class="about-1">
    <div class="left-color"> </div>
    <div class="restricter2">
      <div class="right-third-hidden">
        <div class="pic-box"> <img src="<?php bloginfo('template_directory'); ?>/images/lr.jpg" style="width:100%;"> </div>
      </div>
      <div class="left-2third-table">
        <?php the_field('text_3'); ?>
      </div>
      <div class="right-third-hidden2">
        <div class="pic-box"> <img src="<?php bloginfo('template_directory'); ?>/images/lr.jpg" style="width:100%;"> </div>
      </div>
    </div>
  </div>
  <div class="european-pic"> </div>
</div>
<!-- #content -->

<?php
get_footer();

