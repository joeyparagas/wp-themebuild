<?php 

function ju_misc_customizer_section( $wp_customize ) {
    
    // Set the Database default settings    
    // Show search 
    $wp_customize->add_setting('ju_header_show_search', [
        'default'   => 'yes',
        'transport' => 'postMessage'                                            // change to postMessage to read js file
    ]);
    // Show cart 
    $wp_customize->add_setting('ju_header_show_cart', [
        'default'   => 'yes',
        'transport' => 'postMessage'                                            // default is 'refresh'
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


    // Have user adjust font-color of "Read More" html links
    $wp_customize->add_setting('ju_read_more_color', [
       'default'        => '#1ABC9C'                                            // normal default color 
    ]);

    // Creates a file upload box and link available if file exists
    $wp_customize->add_setting('ju_report_file', [
       'default'        => ''               
    ]);

    // Add title name in WP menu
    $wp_customize->add_section('ju_misc_section', [
        'title'     => __( 'Udemy Misc Settings', 'udemy' ),
        'priority'  => 30, 
        'panel'     => 'udemy'
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

    // Controller for color customizer
    // https://developer.wordpress.org/reference/classes/wp_customize_color_control/
    $wp_customize->add_control(
        new WP_Customize_Color_Control( 
            $wp_customize, 
            'ju_read_more_color_input', 
            array(
                'label'      => __( 'Read more link color', 'udemy' ),
                'section'    => 'ju_misc_section',
                'settings'   => 'ju_read_more_color'
            )
        )
    );

    // Controller for uploading
    // https://developer.wordpress.org/reference/classes/wp_customize_upload_control/
    $wp_customize->add_control(
        new WP_Customize_Upload_Control( 
            $wp_customize, 
            'ju_report_file_input', 
            array(
                'label'      => __( 'File Report', 'udemy' ),
                'section'    => 'ju_misc_section',
                'settings'   => 'ju_report_file'
            )
        )
    );

}

?>