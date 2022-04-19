<?php 

function ju_social_customizer_section( $wp_customize ){ 

    // Add the database default setting
    $wp_customize->add_setting( 'ju_facebook_handle', [
        // Add settings; default is only one mandatory
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
        'default'   => ''
    ]);

    // Add Title name on WP menu
    $wp_customize->add_section( 'ju_social_section', [
        'title'     => __('Udemy Social Settings', 'udemy'),
        'priority'  => 30                                           // Lower the number, higher placement it receives
    ]);

    // Create an input field; 
    // You can add specific classes to help add different options like radio buttons, colors, etc; link listed in link below 
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ju_social_facebook_input', 
        array (
            'label'     => __( 'Facebook Handle', 'udemy' ),        // title of submenu
            'section'   => 'ju_social_section',                     // callback to section/menu to go under
            'settings'  => 'ju_facebook_handle',                    // callback to which setting to control
            'type'      => 'text'                                   // type of input (input text box)
            )
        )
    ); 

    // This seems to be a more modern way of doing it instead of using the new WP_Customize_Control object
    // $wp_customize->add_control( 'ju_social_facebook_input', [
    //     'section'   => 'ju_social_section',
    //     'label'     => __( 'Facebook Handle', 'udemy' ),
    //     'settings'  => 'ju_facebook_handle'
    // ]);


    // ---------------------
    // Create one for Twitter, Insta, phone # and email
    $wp_customize->add_setting ( 'ju_twitter_handle', [ 'default' => '' ]);
    $wp_customize->add_setting ( 'ju_insta_handle', [ 'default' => '' ]);
    $wp_customize->add_setting ( 'ju_phone_number', [ 'default' => '' ]);
    $wp_customize->add_setting ( 'ju_email_address', [ 'default' => '' ]);

    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize,
        'ju_social_twitter_input', 
        array (
            'label'     => __( 'Twitter Handle', 'udemy' ),
            'section'   => 'ju_social_section', 
            'settings'  => 'ju_twitter_handle', 
            'type'      => 'text'
        )
    ));

    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize,
        'ju_social_insta_input', 
        array (
            'label'     => __( 'Instagram Handle', 'udemy' ),
            'section'   => 'ju_social_section', 
            'settings'  => 'ju_insta_handle', 
            'type'      => 'text'
        )
    ));

    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize,
        'ju_social_phone_input', 
        array (
            'label'     => __( 'Phone Number', 'udemy' ),
            'section'   => 'ju_social_section', 
            'settings'  => 'ju_phone_number', 
            'type'      => 'text'
        )
    ));

    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize,
        'ju_social_email_input', 
        array (
            'label'     => __( 'Email Address', 'udemy' ),
            'section'   => 'ju_social_section', 
            'settings'  => 'ju_email_address', 
            'type'      => 'text'
        )
    ));
}

?>