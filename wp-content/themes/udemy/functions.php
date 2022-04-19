<?php 

// Setup
define( 'JU_DEV_MODE', true );    // define dev mode for $ver, true = prevents caching of css/js files


// Includes
include( get_theme_file_path('/includes/front/enqueue.php'));               // code to inc css/js files
include( get_theme_file_path('/includes/setup.php'));                       // code to inc menu/thumbnails
include( get_theme_file_path('/includes/custom-nav-walker.php'));           // code to inc walker class 
                                                                            // Currently not being used (see header.php->wp_nav_menu)
include( get_theme_file_path('/includes/widgets.php'));                     // code to inc widgets/sidebar

include( get_theme_file_path('/includes/theme-customizer.php'));            // main function to include customizer menus
    include( get_theme_file_path('/includes/customizer/social.php'));       // code to include customize input menu 
    include( get_theme_file_path('/includes/customizer/misc.php'));         // code to include search/cart icon option 


// Hooks
// https://codex.wordpress.org/Plugin_API/Action_Reference
add_action( 'wp_enqueue_scripts', 'ju_enqueue');                            // run f() to inc css/js files
add_action( 'after_setup_theme', 'ju_setup_theme');                         // run f() to menus/thumbnails
add_action( 'widgets_init', 'ju_widgets' );                                 // run f() to inc widgets/sidebar to admin menu to theme
add_action( 'customize_register', 'ju_customize_register');                 // run f() from theme-customizer.php 
                                                                            // that inc f() in includes/customizer folder

// Shortcodes

?>