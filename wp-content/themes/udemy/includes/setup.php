<?php 
function ju_setup_theme() {

  add_theme_support( 'post-thumbnails');                                  // add featured image to blog edit page

  // new way to add titles to pages instead of wp_title();
  add_theme_support( 'title-tag' );

  // new way to add  custom logo 
  add_theme_support( 'custom-logo' );

  // adding menu in WP admin section
  // __() creates multi-lingual translations for string
  register_nav_menu( 'primary', __( 'Primary Menu', 'udemy' ) );          // create primary menu
  register_nav_menu( 'secondary', __( 'Secondary Menu', 'udemy' ) );      // create secondary menu

  // Ads
  if (function_exists('quads_register_ad')){                              // check to see plugin exists/activated
    quads_register_ad( array(
        'location'    => 'udemy_header', 
        'description' => 'Udemy Header position'
      ) );
  };


}
?>