 
    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

      <!-- Copyrights
      ============================================= -->
      <div id="copyrights">

        <div class="container clearfix">

          <div class="col_half">
            <!-- Output Customizer copyright input box -->
            <?php echo get_theme_mod( 'ju_footer_copyright_text' ); ?><br>
            <div class="copyright-links">

              <!-- Check Terms of Service Page exists, if user doesn't select a page, then link disappears due to = 0 -->
              <?php if ( get_theme_mod ( 'ju_footer_privacy_page' )) { ?>
                <!-- Use the_permalink for link. ID page of page is what's passed by get_theme_mod page selection -->
                <a href="<?php the_permalink(get_theme_mod ( 'ju_footer_privacy_page')); ?>">Terms of Service</a>
              <?php } ?>

              <!-- Check Privacy Policy Page exists, if user doesn't select a page, then link disappears due to = 0 -->
              <?php if ( get_theme_mod ( 'ju_footer_tos_page')) { ?>
                <!-- Use the_permalink for link. ID page of page is what's passed by get_theme_mod page selection -->
                <a href="<?php the_permalink(get_theme_mod ( 'ju_footer_tos_page')); ?>">Privacy Policy</a>
              <?php } ?>

            </div>
          </div>

          <div class="col_half col_last tright">
            <div class="fright clearfix">
              <!-- Check if user input a fb address -->
              <?php if( get_theme_mod('ju_facebook_handle') ) {  ?>
                <!-- Output from customizer input box -->
                <a href="https://facebook.com/<?php echo get_theme_mod('ju_facebook_handle'); ?>" class="social-icon si-small si-borderless si-facebook">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
              </a>
              <?php } ?>

              <!-- Check if user input a twitter address -->
              <?php if( get_theme_mod('ju_twitter_handle') ) {  ?>
                <!-- Output from customizer input box -->
                <a href="https://twitter.com/<?php echo get_theme_mod('ju_twitter_handle'); ?>" class="social-icon si-small si-borderless si-twitter">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
              </a>
              <?php } ?>
            </div>

            <div class="clear"></div>
            <!-- Check if user input a phone number -->
            <?php if( get_theme_mod('ju_phone_number') ) {?> <i class="icon-headphones"></i> <?php echo get_theme_mod('ju_phone_number'); } ?>

            <!-- If both phone and email exists, then add bullet -->
            <?php if( get_theme_mod('ju_email_address') && get_theme_mod('ju_phone_number') ){ ?> 
              <span class="middot">&middot;</span>
            <?php } ?>
              
            <!-- Check if user input an email address -->
            <?php if( get_theme_mod('ju_email_address') ){ ?> <i class="icon-envelope2"></i> <?php echo get_theme_mod('ju_email_address'); } ?>
           
          </div>

        </div>

      </div><!-- #copyrights end -->

    </footer><!-- #footer end -->
  </div><!-- #wrapper end -->

  <!-- Go To Top
  ============================================= -->
  <div id="gotoTop" class="icon-angle-up"></div>

  <!-- External JavaScripts
  ============================================= -->
  <?php wp_footer(); ?>
  <script src="js/jquery.js"></script>

</body>

</html>