
    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

      <!-- Copyrights
      ============================================= -->
      <div id="copyrights">

        <div class="container clearfix">

          <div class="col_half">
            Copyrights &copy; 2017 All Rights Reserved by Udemy.<br>
            <div class="copyright-links">
              <a href="#">Privacy Policy</a>
            </div>
          </div>

          <div class="col_half col_last tright">
            <div class="fright clearfix">
              <?php if( get_theme_mod('ju_facebook_handle') ) {  ?>
              <a href="https://facebook.com/<?php echo get_theme_mod('ju_facebook_handle'); ?>" class="social-icon si-small si-borderless si-facebook">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
              </a>
              <?php } ?>

              <?php if( get_theme_mod('ju_twitter_handle') ) {  ?>
              <a href="https://twitter.com/<?php echo get_theme_mod('ju_twitter_handle'); ?>" class="social-icon si-small si-borderless si-twitter">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
              </a>
              <?php } ?>
            </div>

            <div class="clear"></div>

            <?php if( get_theme_mod('ju_phone_number') ) {?> <i class="icon-headphones"></i> <?php echo get_theme_mod('ju_phone_number'); } ?>
           
            <?php if( get_theme_mod('ju_email_address') && get_theme_mod('ju_phone_number') ){ ?> 
              <span class="middot">&middot;</span>
            <?php } ?>

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