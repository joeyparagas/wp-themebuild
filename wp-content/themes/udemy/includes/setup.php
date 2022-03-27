<?php 
function ju_setup_theme() {

  add_theme_support( 'post-thumbnails');                              // add featured image to blog edit page
  // __() creates multi-lingual translations for string
  register_nav_menu( 'primary', __( 'Primary Menu', 'udemy' ) );      // create primary menu
}
?>