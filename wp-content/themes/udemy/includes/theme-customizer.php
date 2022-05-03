<?php 

// Customizer 
// https://developer.wordpress.org/reference/classes/wp_customize_manager/

function ju_customize_register( $wp_customize ) {
    // Use the following to output $wp_customzie object
    // echo '<pre>';
	// var_dump( $wp_customize );
	// echo '</pre>';

    // Edit default/existing panels
    // Change "Site Identity" section name to "General"
    $wp_customize->get_section( 'title_tagline' )-> title = 'General';

    // Create pannels
    $wp_customize->add_panel( 'udemy',  [
        'title'             => __( 'Udemy', 'udemy' ),
        'description'       => '<p>Udemy Theme Settings</p>',
        'priority'          => 160
    ]);

    // add Udemy Social Settings customizer menu links
    
    // runs customizer/social.php
    ju_social_customizer_section( $wp_customize );

    // runs misc.php function
    ju_misc_customizer_section( $wp_customize );
}

?>