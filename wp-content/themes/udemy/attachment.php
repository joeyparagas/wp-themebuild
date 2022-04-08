<!-- 
  Attachment Page Template 
  Template that shows (non-image) file using WP template page instead of media window
  You can make specific templates for specific file types: images, video, pdf, etc
  File types - https://developer.wordpress.org/reference/functions/get_allowed_mime_types/ 
 -->

<!-- https://developer.wordpress.org/themes/references/list-of-template-tags/ -->
<?php get_header(); ?>
<!-- If you want to use diff header-v2.php use header('v2'); -->

<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">
 
    <div class="container clearfix">

      <!-- Post Content
      ============================================= -->
      <div class="postcontent nobottommargin clearfix">

        <?php 
          // Main/Primary Loop
          if (have_posts()); { 
            while ( have_posts() ) { 
              the_post();
              global $post;                                             // global var by WP contains post data
              $author_ID    =   $post->post_author;                     // create var to = author ID
              $author_URL   =   get_author_posts_url( $author_ID );     // similar to content-expert code:
                                                                        // echo get_author_posts_url(get_the_author_meta('ID'));
              ?>
              <!-- Single Post
              ============================================= -->
              <div class="single-post nobottommargin">
              
                <div class="entry clearfix">

                  <!-- Entry Title
                  ============================================= -->
                  <div class="entry-title">
                    <h2><?php the_title(); ?></h2>
                  </div><!-- .entry-title end -->
                  
                  <!-- Entry Content
                  ============================================= -->
                  <div class="entry-content notopmargin">
                    
                    <!-- Create download link for specific file type (photos) -->
                    <!-- https://developer.wordpress.org/reference/functions/get_allowed_mime_types/ -->
                    <?php 
                      if ($post->post_mime_type === 'image/jpeg')
                    ?>
                    <a href="<?php echo $post->guid; ?>">Direct Download</a>
                    <?php

                      the_content(); 
                    
                    ?>
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
          } 
        ?>

      </div><!-- .postcontent end -->
      
      <?php get_sidebar(); ?>
    </div>

  </div>

</section><!-- #content end -->

<?php get_footer(); ?>