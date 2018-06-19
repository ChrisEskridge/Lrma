<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lrma.robertscreative.com
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
  <?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
  <h2 class="comments-title">
    <?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'lrma-robertscreative-com' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
  </h2>
  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
  <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
    <h2 class="screen-reader-text">
      <?php esc_html_e( 'Comment navigation', 'lrma-robertscreative-com' ); ?>
    </h2>
    <div class="nav-links">
      <div class="nav-previous">
        <?php previous_comments_link( esc_html__( 'Older Comments', 'lrma-robertscreative-com' ) ); ?>
      </div>
      <div class="nav-next">
        <?php next_comments_link( esc_html__( 'Newer Comments', 'lrma-robertscreative-com' ) ); ?>
      </div>
    </div>
    <!-- .nav-links --> 
  </nav>
  <!-- #comment-nav-above -->
  <?php endif; // Check for comment navigation. ?>
  <ol class="comment-list">
    <?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
  </ol>
  <!-- .comment-list -->
  
  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
  <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
    <h2 class="screen-reader-text">
      <?php esc_html_e( 'Comment navigation', 'lrma-robertscreative-com' ); ?>
    </h2>
    <div class="nav-links">
      <div class="nav-previous">
        <?php previous_comments_link( esc_html__( 'Older Comments', 'lrma-robertscreative-com' ) ); ?>
      </div>
      <div class="nav-next">
        <?php next_comments_link( esc_html__( 'Newer Comments', 'lrma-robertscreative-com' ) ); ?>
      </div>
    </div>
    <!-- .nav-links --> 
  </nav>
  <!-- #comment-nav-below -->
  <?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, lets leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
  <p class="no-comments">
    <?php esc_html_e( 'Comments are closed.', 'lrma-robertscreative-com' ); ?>
  </p>
  <?php
	endif;

	comment_form();
	?>
</div>
<!-- #comments -->
<?php
/**
Template Name: Education-Art-Fair
**/

get_header(); ?>
<div id="content" class="site-content">
  <div class="slider">
    <div class="classes-box">
      <div class="classes-text"> Education | <span style="color:#9c7e54;">Art Fair</span> </div>
    </div>
  </div>
  <div class="classes-main">
    <div class="restricter2">
      <div class="class-box">
        <div class="class-pic"> <img src="<?php bloginfo('template_directory'); ?>/images/family-art.jpg" style="width:100%;"> </div>
        <div class="class-title"> Free Family Art
          <div class="adults"> Adults Only </div>
        </div>
        <div class="class-details">
          <div class="when-title"> when </div>
          <div class="when"> Wednesdays in June<br>
            &nbsp&nbsp&nbsp&nbsp&nbsp June 1, 8, 15, 22, & 29<br>
            &nbsp&nbsp&nbsp&nbsp&nbsp 1:00 – 4:00pm<br>
          </div>
          <div class="where-title"> where </div>
          <div class="where"> Museum Annex </div>
        </div>
        <div class="class-text"> Each class will offer a new art experience. No reservations are needed for this free make and take art program for families. </div>
        <div class="paypal"> </div>
      </div>
      <div class="class-box">
        <div class="class-pic"> <img src="<?php bloginfo('template_directory'); ?>/images/family-art.jpg" style="width:100%;"> </div>
        <div class="class-title"> Free Family Art </div>
        <div class="class-details"> when	Wednesdays in June
          June 1, 8, 15, 22, & 29
          1:00 – 4:00pm
          
          where	Museum Annex </div>
        <div class="class-text"> Dee Tatum of Seraphim Studio in Hattiesburg will offer a one day mini course suitable for beginners. Participants will explore the glass fusing process to create wearable art. The cost will include all materials. </div>
        <div class="paypal"> </div>
      </div>
      <div class="class-box">
        <div class="class-pic"> <img src="<?php bloginfo('template_directory'); ?>/images/family-art.jpg" style="width:100%;"> </div>
        <div class="class-title"> Free Family Art </div>
        <div class="class-details"> when	Wednesdays in June
          June 1, 8, 15, 22, & 29
          1:00 – 4:00pm
          
          where	Museum Annex </div>
        <div class="class-text"> Each class will offer a new art experience. No reservations are needed for this free make and take art program for families. </div>
        <div class="paypal"> </div>
      </div>
      <div class="class-box">
        <div class="class-pic"> <img src="<?php bloginfo('template_directory'); ?>/images/family-art.jpg" style="width:100%;"> </div>
        <div class="class-title"> Free Family Art </div>
        <div class="class-details"> when	Wednesdays in June
          June 1, 8, 15, 22, & 29
          1:00 – 4:00pm
          
          where	Museum Annex </div>
        <div class="class-text"> Dee Tatum of Seraphim Studio in Hattiesburg will offer a one day mini course suitable for beginners. Participants will explore the glass fusing process to create wearable art. The cost will include all materials. </div>
        <div class="paypal"> </div>
      </div>
      <div class="class-box">
        <div class="class-pic"> <img src="<?php bloginfo('template_directory'); ?>/images/family-art.jpg" style="width:100%;"> </div>
        <div class="class-title"> Free Family Art </div>
        <div class="class-details"> when	Wednesdays in June
          June 1, 8, 15, 22, & 29
          1:00 – 4:00pm
          
          where	Museum Annex </div>
        <div class="class-text"> Each class will offer a new art experience. No reservations are needed for this free make and take art program for families. </div>
        <div class="paypal"> </div>
      </div>
      <div class="class-box">
        <div class="class-pic"> <img src="<?php bloginfo('template_directory'); ?>/images/family-art.jpg" style="width:100%;"> </div>
        <div class="class-title"> Free Family Art </div>
        <div class="class-details"> when	Wednesdays in June
          June 1, 8, 15, 22, & 29
          1:00 – 4:00pm
          
          where	Museum Annex </div>
        <div class="class-text"> Dee Tatum of Seraphim Studio in Hattiesburg will offer a one day mini course suitable for beginners. Participants will explore the glass fusing process to create wearable art. The cost will include all materials. </div>
        <div class="paypal"> </div>
      </div>
      <div class="class-box">
        <div class="class-pic"> <img src="<?php bloginfo('template_directory'); ?>/images/family-art.jpg" style="width:100%;"> </div>
        <div class="class-title"> Free Family Art </div>
        <div class="class-details"> when	Wednesdays in June
          June 1, 8, 15, 22, & 29
          1:00 – 4:00pm
          
          where	Museum Annex </div>
        <div class="class-text"> Each class will offer a new art experience. No reservations are needed for this free make and take art program for families. </div>
        <div class="paypal"> </div>
      </div>
      <div class="class-box">
        <div class="class-pic"> <img src="<?php bloginfo('template_directory'); ?>/images/family-art.jpg" style="width:100%;"> </div>
        <div class="class-title"> Free Family Art </div>
        <div class="class-details"> when	Wednesdays in June
          June 1, 8, 15, 22, & 29
          1:00 – 4:00pm
          
          where	Museum Annex </div>
        <div class="class-text"> Dee Tatum of Seraphim Studio in Hattiesburg will offer a one day mini course suitable for beginners. Participants will explore the glass fusing process to create wearable art. The cost will include all materials. </div>
        <div class="paypal"> </div>
      </div>
      <div class="class-box">
        <div class="class-pic"> <img src="<?php bloginfo('template_directory'); ?>/images/family-art.jpg" style="width:100%;"> </div>
        <div class="class-title"> Free Family Art </div>
        <div class="class-details"> when	Wednesdays in June
          June 1, 8, 15, 22, & 29
          1:00 – 4:00pm
          
          where	Museum Annex </div>
        <div class="class-text"> Each class will offer a new art experience. No reservations are needed for this free make and take art program for families. </div>
        <div class="paypal"> </div>
      </div>
      <div class="class-box">
        <div class="class-pic"> <img src="<?php bloginfo('template_directory'); ?>/images/family-art.jpg" style="width:100%;"> </div>
        <div class="class-title"> Free Family Art </div>
        <div class="class-details"> when	Wednesdays in June
          June 1, 8, 15, 22, & 29
          1:00 – 4:00pm
          
          where	Museum Annex </div>
        <div class="class-text"> Dee Tatum of Seraphim Studio in Hattiesburg will offer a one day mini course suitable for beginners. Participants will explore the glass fusing process to create wearable art. The cost will include all materials. </div>
        <div class="paypal"> </div>
      </div>
    </div>
  </div>
</div>
<!-- #content -->

<?php
get_footer();

