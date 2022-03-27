      <!-- Sidebar
      ============================================= -->
      <div class="sidebar nobottommargin col_last">
        <div class="sidebar-widgets-wrap">
          <?php 
            if (is_active_sidebar('ju_sidebar')) { 
              get_search_form();                // Due to Gutt, remove search widget to use custom design
                                                // Manually insert this function to use searchform.php
              dynamic_sidebar('ju_sidebar');
            };
          ?>
        </div>
      </div><!-- .sidebar end -->