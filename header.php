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

?><!DOCTYPE html>
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
        	<div class="top-bar-a">
        	</div>
            <div class="top-bar-b">
            </div>
        	<div class="restricter1">
            	<a href="<?php echo get_permalink(5); ?>">
                    <div class="logo">
                    </div>
                </a>
                <div class="top-bar-assets">
                	<a href="https://twitter.com/LaurenRogersMoA">
                	<img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" style="width:20px; height:20px;">
                    </a>
                    <a href="https://www.facebook.com/LaurenRogersMoA">
                    <img src="<?php bloginfo('template_directory'); ?>/images/fb.png" style="width:20px; height:20px;">
                    </a>
                    <!--
                    <a href="https://www.instagram.com/explore/locations/1855345/">
                    <img src="<?php bloginfo('template_directory'); ?>/images/insta.png" style="width:20px; height:20px;">
                    </a>
                    -->
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
                	
                    	<div class="menu-button" onclick="toggle_visibility('drop')" style="cursor:pointer">
                    		<span style="margin-top:-3px">Menu </span> <img src="<?php bloginfo('template_directory'); ?>/images/menu-button.png" style="width:20px; height:15px; margin-bottom:-2px; margin-left:4px;">
                    	</div>
                    
                    <div id="drop" class="nav-row">
                    
                    
                    
                    
                  
                    
                    
                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                    
                    
                    
                    
                    
                    
                    
                    	<!--<ul>
                        	<li>
                            	Visit
                            </li>
                            
                            <li>
                            	Collection
                            </li>
                            
                            <li>
                            	Exhibition
                            </li>
                            
                            <li>
                            	About
                            </li>
                            
                            <li>
                            	Education
                            </li>
                            
                            <li>
                            	Events
                            </li>
                            
                            <li>
                            	Support
                            </li>
                            
                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="drop-down"> 
        	Visit
        </div>
        <div class="drop-down">
        	Collection <img src="<?php bloginfo('template_directory'); ?>/images/menu-button.png" style="width:15px; height:15px; float:right; margin-right:10px;">
        </div>
        	<ul class="submenu">
                                	<li>
                                    	European Art
                                    </li>
                                    <li>
                                    	American Art
                                    </li>
                                    <li>
                                    	Native American Art
                                    </li>
                                    <li>
                                    	Japanese Woodblock Prints
                                    </li>
                                    <li>
                                    	British Georgian Sliver
                                    </li>
                                    <li>
                                    	Collections Database
                                    </li>
                                    <li>
                                    	Library
                                    </li>
                                    <li>
                                    	LRMA Publications
                                    </li>
                                    <li>
                                    	Rights and Reproductions
                                    </li>
                                    <li>
                                    	Provenance Research Project
                                    </li>
                                    <li>
                                    	Provenance Research List
                                    </li>
                                </ul>
        <div class="drop-down">
        	Exhibition <img src="<?php bloginfo('template_directory'); ?>/images/menu-button.png" style="width:15px; height:15px; float:right; margin-right:10px;">
        </div>
        	<ul class="submenu">
                                	<li>
                                    	Current Exhibition
                                    </li>
                                    <li>
                                    	Upcoming Exhibition
                                    </li>
                                    <li>
                                    	Past Exhibition
                                    </li>
                                    
                                </ul>
        <div class="drop-down">
        	About <img src="<?php bloginfo('template_directory'); ?>/images/menu-button.png" style="width:15px; height:15px; float:right; margin-right:10px;">
        </div>
        	<ul class="submenu">
                                	<li>
                                    	History
                                    </li>
                                    <li>
                                    	Staff and Board of Directors
                                    </li>
                                    <li>
                                    	LRMA Guild
                                    </li>
                                    <li>
                                    	Rogers-Green House
                                    </li>
                                    <li>
                                    	Laurel, MS
                                    </li>
                                </ul>
        <div class="drop-down">
        	Education <img src="<?php bloginfo('template_directory'); ?>/images/menu-button.png" style="width:15px; height:15px; float:right; margin-right:10px;">
        </div>
        	<ul class="submenu">
                                	<li>
                                    	Classes
                                    </li>
                                    <li>
                                    	Outreach
                                    </li>
                                    <li>
                                    	Choctaw Days
                                    </li>
                                    <li>
                                    	Art Trunks
                                    </li>
                                    <li>
                                    	Teacher Materials
                                    </li>
                                    <li>
                                    	Art Fair
                                    </li>
                                </ul>
        <div class="drop-down">
        	Events <img src="<?php bloginfo('template_directory'); ?>/images/menu-button.png" style="width:15px; height:15px; float:right; margin-right:10px;">
        </div>
        	<ul class="submenu">
                                	<li>
                                    	LRMA Gala
                                    </li>
                                    <li>
                                    	Blues Bash
                                    </li>
                                </ul>
        <div class="drop-down">
        	Support <img src="<?php bloginfo('template_directory'); ?>/images/menu-button.png" style="width:15px; height:15px; float:right; margin-right:10px;">
        </div>
        	<ul class="submenu">
                                	<li>
                                    	Membership
                                    </li>
                                    <li>
                                    	Tribute and Memorial Gifts
                                    </li>
                                    <li>
                                    	Ways to Give
                                    </li>
                                    <li>
                                    	Corporate Giving
                                    </li>
                                    <li>
                                    	Planned Giving
                                    </li>
                                   
                                </ul>-->
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














