<!--  Template for a full page design 
      Using page.php template to create this Custom Template
      Add php comments (File Header) below to show WP is a Custom Template
      WP will look for the string "Template_Name:" and use that name
      You can even put it in html comment like this one
-->
<?php 
/* 
*   TEmplate Name: Full Width Page
*/ 

get_header(); 


?>

<!-- Method 2: Use single_post_title() to output the title -->
<section id="page-title">
    <div class="container clearfix">
      <h1><?php the_title(); ?></h1>
      <span>
        <?php 
          if (function_exists( 'the_subtitle' )){         // check to see if function exists or if plugin is active  
            the_subtitle();                               // uses WP Subtitle plugin
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


        <?php 
          // Main/Primary Loop
          while ( have_posts() ) { 
            the_post();
            global $post;                                             // global var by WP contains post data
            $author_ID    =   $post->post_author;                     // create var to = author ID
            $author_URL   =   get_author_posts_url( $author_ID );     // similar to content-expert code:
                                                                      // echo get_author_posts_url(get_the_author_meta('ID'));
        ?>

        <div class="single-post nobottommargin">

          <!-- Single Post
          ============================================= -->
          <div class="entry clearfix">

            <!-- Entry Image
            ============================================= -->
            <div class="entry-image">
              <a href="#">
              <!-- insert featured image  -->
              <?php the_post_thumbnail('full'); ?>
              </a>
            </div><!-- .entry-image end -->

            <!-- Entry Content
            ============================================= -->
            <div class="entry-content notopmargin">

              <!-- Output blog text content & link its pages -->
              <?php 
                the_content(); 
                $defaults = array(
                  'before'           => '<p class="text-center">' . __( 'Pages:' ),
                  'after'            => '</p>',
              );
                wp_link_pages($defaults);
              ?>

              <!-- Post Single - Content End -->

              <div class="clear"></div>

            </div>
          </div><!-- .entry end -->

          <div class="line"></div>

          <!-- Comments
          ============================================= -->

          <?php 
          // check if comments is open and how many there are
          if ( comments_open() || get_comments_number() ) {
            comments_template();                                    // insert comments section (comments.php)
          }
          ?>
          

        </div><!-- e:single-post -->


        <?php
            } 
          
        ?>
      
    </div>

  </div>

</section><!-- #content end -->

<?php get_footer(); ?>