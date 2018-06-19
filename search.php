<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package lrma.robertscreative.com
 */

get_header(); ?>

<section id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <div class="slider">
      <div class="classes-box">
        <div class="classes-text"> <span style="color:#c5b68f;">Search</span> </div>
      </div>
    </div>
    <div class="collections-database-main">
      <div class="restricter4">
        <div class="database-wrap">
          <div class="database2">
            <div class="db-menu"> </div>
            <div class="db-content">
              <?php
							if ( have_posts() ) : ?>
              <header class="page-header">
                <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'lrma-robertscreative-com' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
              </header>
              <!-- .page-header -->
              
              <?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();
					
									/**
									 * Run the loop for the search to output the results.
									 * If you want to overload this in a child theme then include a file
									 * called content-search.php and that will be used instead.
									 */
									get_template_part( 'template-parts/content', 'search' );
					
								endwhile;
					
								the_posts_navigation();
					
							else :
					
								get_template_part( 'template-parts/content', 'none' );
					
							endif; ?>
              <div class="db-content-left"> </div>
              <div class="db-content-right"> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- #main --> 
</section>
<!-- #primary -->

<?php
get_footer();

