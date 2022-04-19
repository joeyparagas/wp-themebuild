<?php 

function ju_misc_customizer_section( $wp_customize ) {
    
    // Set the Database default settings    
    // Show search 
    $wp_customize->add_setting('ju_header_show_search', [
        'default'   => 'yes'
    ]);
    // Show cart 
    $wp_customize->add_setting('ju_header_show_cart', [
        'default'   => 'yes'
    ]);
    // Copyright info 
    $wp_customize->add_setting('ju_footer_copyright_text', [
        'default'   => 'Copyright &copy; 2022 All Rights Reserved.'
    ]);
    // Terms of Service page
    $wp_customize->add_setting('ju_footer_tos_page', [
        'default'   => '0'                                                      // set value to 0 so WP doesn't set value 
    ]);
    // Privacy page 
    $wp_customize->add_setting('ju_footer_privacy_page', [
        'default'   => '0'                                                      // set value to 0 so WP doesn't set value 
    ]);

    // Add title name in WP menu
    $wp_customize->add_section('ju_misc_section', [
        'title'     => __( 'Udemy Misc Settings', 'udemy' ),
        'priority'  => 30
    ]);

    // Set controller settings
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ju_header_show_search_input', 
        [
            'label'     => __( 'Show Search Button in Header', 'udemy' ),       // title of sub-menu
            'section'   => 'ju_misc_section',                                   // callback to section/menu to go under
            'settings'  => 'ju_header_show_search',                             // callback to which setting to control 
            'type'      => 'checkbox',                                          // type of input
            'choices'   => [                                                    // types of checkbox choices
                'yes'   => 'Yes'                                                    // value will be checked against user selection
                                                                                    // since there's only 1 selection, then Yes 
            ]
        ]
    ));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ju_header_show_cart_input', 
        [
            'label'     => __( 'Show Cart Button in Header', 'udemy' ),         // title of sub-menu
            'section'   => 'ju_misc_section',                                   // callback to section/menu to go under
            'settings'  => 'ju_header_show_cart',                               // callback to which setting to control 
            'type'      => 'checkbox',                                          // type of input
            'choices'   => [                                                    // types of checkbox choices
                'yes'   => 'Yes'                                                    // value will be checked against user selection
                                                                                    // since there's only 1 selection, then Yes 
            ]
        ]
    ));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ju_footer_copyright_text_input', 
        [
            'label'     => __( 'Input Copyright text', 'udemy' ),               // title of sub-menu
            'section'   => 'ju_misc_section',                                   // callback to section/menu to go under
            'settings'  => 'ju_footer_copyright_text',                          // callback to which setting to control 
            'type'      => 'text'                                               // this is optional as it's the default setting
        ]
    ));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ju_footer_tos_page_input', 
        [
            'label'     => __( 'Footer TOS page', 'udemy' ),                    // title of sub-menu
            'section'   => 'ju_misc_section',                                   // callback to section/menu to go under
            'settings'  => 'ju_footer_tos_page',                                // callback to which setting to control 
            'type'      => 'dropdown-pages'                                     // dropdown showing all pages available
        
        ]
    ));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ju_footer_privacy_page_input', 
        [
            'label'     => __( 'Footer Privacy page', 'udemy' ),                // title of sub-menu
            'section'   => 'ju_misc_section',                                   // callback to section/menu to go under
            'settings'  => 'ju_footer_privacy_page',                            // callback to which setting to control 
            'type'      => 'dropdown-pages'                                      // dropdown showing all pages available
        ]
    ));

}

?>