<!-- 
  Arhive default template
    Template is similar to category.php
    Used to customize a template based on date. 
    NOTE - dates that do not have pages associated will return 404 page.
      ex: site.com/2030 = 404 page since it doesn't exist
 -->
<?php get_header(); ?>
<!-- If you want to use diff header-v2.php use header('v2'); -->


<!-- Page Title
============================================= -->
  <section id="page-title">

    <div class="container clearfix"> 
      <!-- display post titles based on category -->
      <!-- https://developer.wordpress.org/reference/functions/the_archive_title/ -->
      <h1><?php the_archive_title(); ?></h1>             
      <span>
        <?php 
          if (is_year()) {
            ?>Yo are viewing a year archive.<?php 
          }  else if (is_month()) {
            ?>You are viewing a month archive.<?php 
          } else if (is_day()) {
            ?>You are viewing a day archive.<?php 
          }
        ?>
      </span>
    </div>

  </section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">

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