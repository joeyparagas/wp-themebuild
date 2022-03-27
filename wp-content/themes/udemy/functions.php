<?php 

// Setup
define( 'JU_DEV_MODE', true );    // define dev mode for $ver, true = prevents caching of css/js files


// Includes
include( get_theme_file_path('/includes/front/enqueue.php'));       // code to inc css/js files
include( get_theme_file_path('/includes/setup.php'));               // code to inc menu/thumbnails
include( get_theme_file_path('/includes/custom-nav-walker.php'));   // code to inc walker class 
                                                                    // Currently not being used (see index.php->wp_nav_menu)
include( get_theme_file_path('/includes/widgets.php'));             // code to inc widgets/sidebar

// Hooks
// https://codex.wordpress.org/Plugin_API/Action_Reference
add_action( 'wp_enqueue_scripts', 'ju_enqueue');                    // run f() to inc css/js files
add_action( 'after_setup_theme', 'ju_setup_theme');                 // run f() to menus/thumbnails
add_action( 'widgets_init', 'ju_widgets' );                         // run f() to inc widgets/sidebar to admin menu to theme

// Shortcodes

?>