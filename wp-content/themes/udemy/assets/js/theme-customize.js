/**
 * Created by test on 3/27/2017.
 */
(function ($) {
    console.log(wp);
    // Show/hide search button in customizer menu
    // Runs JS on the fly without page refresh

    // Call wp.customize to access object, then call the setting and run callback function
    wp.customize('ju_header_show_search', function (value) {
        // bind the value to see if it has changed from the default state
        value.bind(function (new_val) {
            if (new_val) {
                $('#top-search').show();
            } else {
                $('#top-search').hide();
            }
        });
    });

    // Do the same thing w/ the shopping cart 
    // Note: this can be shorten by running the function once and calling it twice (see below)
    wp.customize('ju_header_show_cart', function (value) {
        // bind the value to see if it has changed from the default state
        value.bind(function (new_val) {
            if (new_val) {
                $('#top-cart').show();
            } else {
                $('#top-cart').hide();
            }
        });
    });

    /*
    toggleVisible('ju_header_show_cart', '#top-cart');
    toggleVisible('ju_header_show_search', '#top-search');
    
    function toggleVisible(setting, selector) {
        wp.customize(setting, function (value) {
        value.bind(function (new_val) {
            if (new_val) {
            if ($(selector).length > 0) {
                $(selector).show();
            } else {
                wp.customize.preview.send('refresh');
            }
            } else {
            $(selector).hide();
            }
        });
        });
    } 
    */
})(jQuery);