<div class="entry clearfix">
  <!-- Check to see if featured image exists -->
  <?php 
    if(has_post_thumbnail()){  
    ?>
      <div class="entry-image">
        <a href="#">
          <!-- Insert blog featured image thumbnail at 'full' size -->
          <!-- https://codex.wordpress.org/Post_Thumbnails -->
          <?php the_post_thumbnail('full', [
              'class' => 'image_fade'
              ]); ?>
        </a>
      </div>
    <?php 
    }
  ?>
  <div class="entry-title">
    <h2>
      <a href="<?php the_permalink(); ?>"> <!-- echo out link to blog article -->
        <!-- Insert blog title -->
        <?php the_title(); ?>
      </a>
    </h2>
  </div>
  <ul class="entry-meta clearfix">
    <!-- get_the_date vs the_date() - https://developer.wordpress.org/reference/functions/the_date/ -->
    <li><i class="icon-calendar3"></i> <?php echo get_the_date(); ?></li> 
    <li>
      <!-- Link to Author posts - https://developer.wordpress.org/reference/functions/get_the_author_meta/ -->
      <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
        <i class="icon-user"></i>
        <?php the_author(); ?>
      </a>
    </li>
    <li>
      <i class="icon-folder-open"></i>
      <!-- Return category list - empty space as the divider between each category -->
      <?php the_category(' | '); ?>
    </li>
    <li>
      <a href="#">
        <i class="icon-comments"></i>
        <!-- Return comment count - 0=display 0 instead of No Comments-->
        <!-- https://developer.wordpress.org/reference/functions/comments_number/ -->
        <?php comments_number( 'no responses', 'one response', '% responses' ); ?>
      </a>
    </li>
  </ul>
  <div class="entry-content">
    <p>
      <?php the_excerpt(); ?>
    </p>
    <a href="#" class="more-link">Read More</a>
  </div>
</div>