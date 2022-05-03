<?php 

function ju_enqueue() { 
  $uri      = get_theme_file_uri();                 // root theme folder
  $ver      = JU_DEV_MODE ? time() : false;         // check if dev mode false
  
  // Register styles and fonts
  wp_register_style('ju_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', [], $ver);
  wp_register_style('ju_bootstrap', $uri . '/assets/css/bootstrap.css', [], $ver);
  wp_register_style('ju_style', $uri . '/assets/css/style.css', [], $ver);
  wp_register_style('ju_dark', $uri . '/assets/css/dark.css', [], $ver);
  wp_register_style('ju_font_icons', $uri . '/assets/css/font-icons.css', [], $ver);
  wp_register_style('ju_animate', $uri . '/assets/css/animate.css', [], $ver);
  wp_register_style('ju_magnific_popup', $uri . '/assets/css/magnific-popup.css', [], $ver);
  wp_register_style('ju_responsive', $uri . '/assets/css/responsive.css', [], $ver);
  wp_register_style('ju_custom', $uri . '/assets/css/custom.css', [], $ver);
  
  // Call styles and fonts
  wp_enqueue_style('ju_google_fonts');
  wp_enqueue_style('ju_bootstrap');
  wp_enqueue_style('ju_style');
  wp_enqueue_style('ju_dark');
  wp_enqueue_style('ju_font_icons');
  wp_enqueue_style('ju_animate');
  wp_enqueue_style('ju_magnific_popup');
  wp_enqueue_style('ju_responsive');
  wp_enqueue_style('ju_custom');

  // Use inline css styling
  // Loads file in head tag if specific file is enqueued

  $read_more_color = get_theme_mod( 'ju_read_more_color' );     // grab color of add_setting id
  wp_add_inline_style( 
    'ju_custom',                                                // load if this exists; this points to custom.css file
    // Load CSS styling here 
    // This uses template literal
    'a.more-link { color:' . $read_more_color . '; border-color: ' . $read_more_color . '; }' 
  );


  // Register scripts
  wp_register_script('ju_plugins',  $uri . '/assets/js/plugins.js',[], $ver, true ); 
  wp_register_script('ju_functions',  $uri . '/assets/js/functions.js',[], $ver, true ); 
  
  // Call scripts
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'ju_plugins' );
  wp_enqueue_script( 'ju_functions' );


}
?>