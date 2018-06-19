<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lrma.robertscreative.com
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<div class="body">
<div class="page">
<div class="header">
  <div class="top-bar">
    <div class="top-bar-a"> </div>
    <div class="top-bar-b"> </div>
    <div class="restricter1"> <a href="<?php echo get_permalink(5); ?>">
      <div class="logo"> </div>
      </a>
      <div class="top-bar-assets"> <a href="https://twitter.com/LaurenRogersMoA"> <img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" style="width:20px; height:20px;"> </a> <a href="https://www.facebook.com/LaurenRogersMoA"> <img src="<?php bloginfo('template_directory'); ?>/images/fb.png" style="width:20px; height:20px;"> </a>
        <div class="search-bar">
          <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
            <input type="text" value="<?php the_search_query(); ?>" placeholder=" search" name="s" id="s" />
            <input type="submit" id="searchsubmit" value=""/>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="nav">
    <div class="nav-box">
      <div class="restricter">
        <div class="menu-button" onclick="toggle_visibility('drop')" style="cursor:pointer"> <span style="margin-top:-3px">Menu </span> <img src="<?php bloginfo('template_directory'); ?>/images/menu-button.png" style="width:20px; height:15px; margin-bottom:-2px; margin-left:4px;"> </div>
        <div id="drop" class="nav-row">
          <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
<!--
    function toggle_visibility(id) 
{
    var e = document.getElementById(id);
	
	
    if (e.style.display == 'none' || e.style.display=='')
    {
        e.style.display = 'inline-block';
		
		
    }
    else 
    {
        e.style.display = 'none';
    }
	
	
    
}
//-->
<!--</script> 
