<!-- https://developer.wordpress.org/themes/references/list-of-template-tags/ -->
<?php get_header(); ?>
<!-- If you want to use diff header-v2.php use header('v2'); -->

<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">

    <!-- Using Get Most Popular Post plug-in -->
    <?php 
    // Check to see if index is not a single page and is the home page & if function exists & if customizer setting is on
    if( !is_single() && is_home() 
        && function_exists( 'wpp_get_mostpopular') 
        && get_theme_mod( 'ju_show_header_popular_posts' )  ){ 
      // Parameters can be found at:
      // https://github.com/cabrerahector/wordpress-popular-posts/wiki/2.-Template-tags#wpp_get_mostpopular
      
      wpp_get_mostpopular([                         // run plugin function

        // Starting tags of html parameter
        // Note: Variable title is inserted/concatenated in the <span> tags
        'wpp_start'     => '
        <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
          <div>
            <div class="container clearfix">
              <span class="badge badge-danger bnews-title">' . get_theme_mod( 'ju_popular_post_widget_title' ) . '</span>

              <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false"
                data-pagi="false">
                <div class="flexslider">
                  <div class="slider-wrap">
        ',
        // Closing tags of html parameter
        'wpp_end'       => '
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>        
        ',
        // Inside portion where post data will be displayed parameter
        'post_html'     => '
        <div class="slide">
          <a href="{url}">
            <strong>{text_title}</strong>
          </a>
        </div>
        '

      ]);
    ?>

    <?php 
    } ?>

    <div class="container clearfix">

      <!-- Post Content
      ============================================= -->
      <div class="postcontent nobottommargin clearfix">

        <!-- Posts
        ============================================= -->
        <div id="posts">

          <!-- THE LOOP - begin blog post loop -->
          <?php
          
            if (have_posts() ) {               // check for any posts
              while ( have_posts()) {          // loop while posts exists
                the_post();                    // returns false when no more posts; breaks while loop
                                               // NOTE: In Admin menu/Settings/Reading, set limits to your posts
                // load content-excerpt.php - blog post html template 
                get_template_part( 'partials/post/content-excerpt' );         
                
                // looks for content-excerpt.php, if dne, then content.php
                // get_template_part( 'partials/post/content', 'excerpt' );   
              }
            }

          ?>
          <!-- e:THE LOOP -->

          


        </div><!-- #posts end -->

        <!-- Pagination
        ============================================= -->
        <div class="row mb-3">
          <div class="col-12">
            <?php 
              next_posts_link( '&larr; Older' );
              previous_posts_link( 'Newer &rarr;' );
            ?>
            <!-- <a href="#" class="btn btn-outline-secondary float-left"></a> -->
            <!-- <a href="#" class="btn btn-outline-dark float-right"></a> -->
          </div>
        </div>
        <!-- .pager end -->

      </div><!-- .postcontent end -->
      
      <?php get_sidebar(); ?>
    </div>

  </div>

</section><!-- #content end -->

<?php get_footer(); ?>