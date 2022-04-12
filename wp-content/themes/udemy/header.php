<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <!-- Stylesheets
	============================================= -->
  <?php wp_head(); ?>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Document Title
	============================================= -->
  <!-- There is no need for this anymore since setup.php has add_theme_support( 'title-tag' ) -->
  <!-- <title>Index Template</title> -->

</head>

<!-- Add body_class to have WP insert default classes in addition to custom classes -->
<body <?php body_class('stretched no-transition'); ?> >

  <!-- Document Wrapper
  ============================================= -->
  <div id="wrapper" class="clearfix">
    
    <!-- Top Bar
    ============================================= -->
    <div id="top-bar" class="dark">

      <div class="container clearfix">

        <div class="col_half nobottommargin">

          <!-- Top Links
          ============================================= -->
          <div class="top-links">
            <!-- Secondary Menu (ul) -->
            <?php 
                
                if (has_nav_menu('secondary')) {
                  wp_nav_menu([
                    'theme_location' =>  'secondary',                // name of theme
                    'container'      =>  false,                      // wrap nav around a div/nav/tag; false = none
                    'fallback_cb'    =>  false,                      // fallback to default menu; false = no
                    'depth'          =>  1,                          // how many sub-menus are in the menu; 0=unlimited
                  //'walker'         =>  new JU_Custom_Nav_Walker()  // call walker class (used to customize submenu vs default WP) 
                  ]);
                }
              ?>
              <!-- e:Secondary Menu (ul) -->
          </div><!-- .top-links end -->

        </div>

        <div class="col_half fright col_last nobottommargin">

          <!-- Top Social
          ============================================= -->
          <div id="top-social">
            <ul>
              <?php 
                // Check if theme mod exists using the name of the customize setting name
                if( get_theme_mod('ju_facebook_handle') ) { 
                  ?>
                    <li>
                      <a href="https://facebook.com/<?php echo get_theme_mod('ju_facebook_handle'); ?>" class="si-facebook">
                        <span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span>
                      </a>
                    </li>
                  <?php 
                }
              ?>
              
              <?php 
                if( get_theme_mod('ju_ _handle') ) { 
                  ?>
                    <li>
                      <a href="https://facebook.com/<?php echo get_theme_mod('ju_facebook_handle'); ?>" class="si-facebook">
                        <span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span>
                      </a>
                    </li>
                  <?php 
                }
              ?>

              <?php 
                if( get_theme_mod('ju_twitter_handle') ) { 
                  ?>
                    <li>
                      <a href="https://twitter.com/<?php echo get_theme_mod('ju_twitter_handle'); ?>" class="si-twitter">
                        <span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span>
                      </a>
                    </li>
                  <?php 
                }
              ?>

              <?php 
                if( get_theme_mod('ju_insta_handle') ) { 
                  ?>
                    <li>
                      <a href="https://instagram.com/<?php echo get_theme_mod('ju_insta_handle'); ?>" class="si-instagram">
                        <span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span>
                      </a>
                    </li>
                  <?php 
                }
              ?>

              <?php 
                if( get_theme_mod('ju_phone_number') ) { 
                  ?>
                    <li>
                      <a href="tel:<?php echo get_theme_mod('ju_phone_number'); ?>" class="si-call">
                        <span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text"><?php echo get_theme_mod('ju_phone_number'); ?></span>
                      </a>
                    </li>
                  <?php 
                }
              ?>

              <?php 
                if( get_theme_mod('ju_email_address') ) { 
                  ?>
                    <li>
                      <a href="mailto:<?php echo get_theme_mod('ju_email_address'); ?>" class="si-email3">
                        <span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text"><?php echo get_theme_mod('ju_email_address'); ?></span>
                      </a>
                    </li>
                  <?php 
                }
              ?>
            </ul>
          </div><!-- #top-social end -->

        </div>

      </div>

    </div><!-- #top-bar end -->

    <!-- Header
    ============================================= -->
    <header id="header" class="sticky-style-2">

      <div class="container clearfix">

        <!-- Logo
        ============================================= -->
        <div id="logo">
          <!-- Function that checks if user has uploaded a custom logo to WP admin menu -->
          <!-- add_theme_support( 'custom-logo' ) must be added to setup.php -->
          <?php  
            if (has_custom_logo()) {                           // add user logo if it exists 
              the_custom_logo();                               // else use default 
            }else { ?>          
              <a href="<?php echo home_url( '/'); ?>" class="standard-logo">
                <!-- bloginfo contains various data of site such as name, url, admin email, etc -->
                <!-- https://developer.wordpress.org/reference/functions/bloginfo/ -->
                <?php bloginfo( 'name' );  ?>
              </a>
            <?php  
            }
          ?>
          
        </div><!-- #logo end -->

        <div class="top-advert">
          <!-- Insert Ad made using plugin WP QUADS -->
          <!-- Code can be found in their plugin-folder/includes/api.php file -->
          <!-- Code has to be initialized in setup.php -->
          <?php 
            if (function_exists('quads_ad')){
              echo quads_ad([ 'location' => 'udemy_header' ]);
            }
          ?>
          <!-- <img src="https://via.placeholder.com/728x90.png?text=Check+This+Awesome+Ad+Joey+Made%20at%20https://joeyparagas.com/" alt=""> -->
        </div>

      </div>

      <div id="header-wrap">

        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu" class="style-2">

          <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Main Menu (ul) -->
            <?php 
              
              if (has_nav_menu('primary')) {
                wp_nav_menu([
                  'theme_location' =>  'primary',                  // name of theme
                  'container'      =>  false,                      // wrap nav around a div/nav/tag; false = none
                  'fallback_cb'    =>  false,                      // fallback to default menu; false = no
                  'depth'          =>  4,                          // how many sub-menus are in the menu; 0=unlimited
                //'walker'         =>  new JU_Custom_Nav_Walker()  // call walker class (used to customize submenu vs default WP) 
                ]);
              }
            ?>
            <!-- e:Main Menu (ul) -->

            <!-- Top Cart
            ============================================= -->
            <div id="top-cart">
              <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
              <div class="top-cart-content">
                <div class="top-cart-title">
                  <h4>Shopping Cart</h4>
                </div>
                <div class="top-cart-items">
                  <div class="top-cart-item clearfix">
                    <div class="top-cart-item-image">
                      <a href="#"><img src="images/shop/small/1.jpg" /></a>
                    </div>
                    <div class="top-cart-item-desc">
                      <a href="#">Blue Round-Neck Tshirt</a>
                      <span class="top-cart-item-price">$19.99</span>
                      <span class="top-cart-item-quantity">x 2</span>
                    </div>
                  </div>
                  <div class="top-cart-item clearfix">
                    <div class="top-cart-item-image">
                      <a href="#"><img src="images/shop/small/6.jpg" /></a>
                    </div>
                    <div class="top-cart-item-desc">
                      <a href="#">Light Blue Denim Dress</a>
                      <span class="top-cart-item-price">$24.99</span>
                      <span class="top-cart-item-quantity">x 3</span>
                    </div>
                  </div>
                </div>
                <div class="top-cart-action clearfix">
                  <span class="fleft top-checkout-price">$114.95</span>
                  <button class="button button-3d button-small nomargin fright">
                    View Cart
                  </button>
                </div>
              </div>
            </div><!-- #top-cart end -->

            <!-- Top Search
            ============================================= -->
            <div id="top-search">
              <a href="#" id="top-search-trigger">
                <i class="icon-search3"></i><i class="icon-line-cross"></i>
              </a>
              <form action="#" method="get">
                <input type="text" name="q" class="form-control" placeholder="Type &amp; Hit Enter.." value="">
              </form>
            </div><!-- #top-search end -->

          </div>

        </nav><!-- #primary-menu end -->

      </div>

    </header><!-- #header end -->