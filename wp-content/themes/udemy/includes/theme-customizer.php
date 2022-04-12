<?php 

// Customizer 
// https://developer.wordpress.org/reference/classes/wp_customize_manager/

function ju_customize_register( $wp_customize ) {
    // add Udemy Social Settings customizer menu links 
    ju_social_customizer_section( $wp_customize );
}

?>