<?php 

function ju_customize_preview_init() { 
    // This function runs stylesheets and scripts only

    wp_enqueue_script( 
        'ju_theme_customizer',                                      // name of this specfiic action
        get_theme_file_uri( '/assets/js/theme-customize.js'),       // where file is found
        ['jquery', 'customize-preview'],                            // dependencies needed 
                                                                    // customize
        false,                                                      // version #
        true                                                        // load in footer?
    );

};
?>