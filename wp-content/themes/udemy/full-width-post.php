<!-- 
  This is a custom post type template 
  https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-page-templates-for-specific-post-types
  This was taken from single.php since that page contains a single blog post page
 -->

<!-- https://developer.wordpress.org/themes/references/list-of-template-tags/ -->
<?php 
// Template Name: Full Width Post
// Template Post Type: Post
// 

get_header(); ?>
<!-- If you want to use diff header-v2.php use header('v2'); -->

<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">
 
    <div class="container clearfix">

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

        <div class="single-post nobottommargin">

          <!-- Single Post
          ============================================= -->
          <div class="entry clearfix">

            <!-- Entry Title
            ============================================= -->
            <div class="entry-title">
              <h2><?php the_title(); ?></h2>
            </div><!-- .entry-title end -->

            <!-- Entry Meta
            ============================================= -->
            <ul class="entry-meta clearfix">
              <li><i class="icon-calendar3"></i> <?php echo get_the_date(); ?></li>
              <li>
                <a href="<?php $author_URL; ?>">
                  <i class="icon-user"></i> <?php the_author(); ?>
                </a>
              </li>
              <li><i class="icon-folder-open"></i> <?php the_category(' | '); ?>
              </li>
              <li><a href="#"><i class="icon-comments"></i> <?php comments_number('no responses', 'one response', '% responses') ?></a></li>
            </ul><!-- .entry-meta end -->

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

              <!-- Tag Cloud
              ============================================= -->
              <div class="tagcloud clearfix bottommargin">
                <!-- insert tags -->
                <?php the_tags('', ' '); ?>
              </div><!-- .tagcloud end -->

              <div class="clear"></div>

            </div>
          </div><!-- .entry end -->

          <!-- Post Navigation
          ============================================= -->
          <div class="post-navigation clearfix">

            <!--  previous/next blog posts -->
            <div class="col_half nobottommargin">
              <a href="#"><?php previous_post_link(); ?></a>
            </div>
            <div class="col_half col_last tright nobottommargin">
              <a href="#"><?php next_post_link(); ?></a>
            </div>

          </div><!-- .post-navigation end -->

          <div class="line"></div>

          <!-- Post Author Info
          ============================================= -->
          <div class="card">
            <div class="card-header">
              <strong>
                Posted by
                <a href="<?php echo $author_URL; ?>"><?php the_author(); ?></a>
              </strong>
            </div>
            <div class="card-body">
              <div class="author-image">
                <?php echo get_avatar( $author_ID, 90, 'retro', 'avatar image', [ 'class' => 'img-circle']); ?>
              </div>
              <?php echo nl2br(get_the_author_meta( 'description')); ?>
            </div>
          </div><!-- Post Single - Author End -->

          <div class="line"></div>

          <!-- Related Posts
          ============================================= -->

          <h4>Related Posts:</h4>

          <div class="related-posts clearfix">

            <!-- Query database for additional posts -->
            <?php 
            // https://developer.wordpress.org/reference/classes/wp_query/ 

              $categories           =     get_the_category(); 

              // Look for new posts (rp = recent posts)
              $rp_query             =     new WP_Query([
                'posts_per_page'    =>    2,              // shorten number of results from 4 to 2
                'post__not_in'      =>    [$post->ID ],   // current post viewing does not return in query
                // check if post is in any categories, if so grab first one and output posts in this cat.
                'cat'               =>    !empty($categories) ? $categories[0]->term_id : null
              ]);

              // Display recent posts - similar to how "The Loop" is handled
              if ( $rp_query->have_posts() ) { 
                while ( $rp_query->have_posts() ){ 
                  $rp_query->the_post(); 
                  ?>

                  <div class="mpost clearfix">
                    <!-- Check if thumbnails exist -->
                    <?php 
                      if (has_post_thumbnail()) {
                      ?>
                        <div class="entry-image">
                          <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('thumbnail'); ?>
                          </a>
                        </div>
                      <?php
                      }
                    ?>
                    
                    <!-- Add title, it's link, date, # of comments and text content of current post/article -->
                    <div class="entry-c">
                      <div class="entry-title">
                        <h4>
                          <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                          </a>
                        </h4>
                      </div>
                      <ul class="entry-meta clearfix">
                        <li><i class="icon-calendar3"></i><?php echo get_the_date(); ?></li>
                        <li><i class="icon-comments"></i> <?php comments_number('0'); ?></li>
                      </ul>
                      <div class="entry-content">
                        <?php the_excerpt(); ?>
                      </div>
                    </div>
                  </div>
               <?php 
               }
               //--------------------------------
               // MUST RESET AFTER SECONDARY LOOP
               //--------------------------------
               wp_reset_postdata();
              }
            ?>

          </div>

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

    </div>

  </div>

</section><!-- #content end -->

<?php get_footer(); ?>