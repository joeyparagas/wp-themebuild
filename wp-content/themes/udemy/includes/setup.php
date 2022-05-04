<?php 
function ju_setup_theme() {

  // add featured image to blog edit page
  add_theme_support( 'post-thumbnails');                                  

  // new way to add titles to pages instead of wp_title();
  add_theme_support( 'title-tag' );

  // new way to add  custom logo 
  add_theme_support( 'custom-logo' );
  
  // RSS Feed
  // https://codex.wordpress.org/Automatic_Feed_Links
  add_theme_support( 'automatic-feed-links' );

  // HTML5 Support
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

  // Dummy content - https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7
  add_theme_support( 'starter-content', [
    // Create filler content for the following WP items: 

    // Place three core-defined widgeets in the sidebar area
    'widgets'         => [
      'ju_sidebar'    => [ 'text_business_info', 'search', 'text_about']      // adds bus addy/hrs, search bar, about txt
    ],

    // Create the custom image attachments used as post thumbnails for pages
    'attachments'     => [
      'image-about'   => [ 
        'post_title'  => __('About', 'udemy'),
        'file'        => 'assets/images/about/1.jpg',                          // URL relative to the template director
      ],
    ],

    // Specify the core-defined pages to create and add custom thumbnails to some of them
    'posts'               => [
      'home'              => [ 'thumbnail' => '{{image-about}}',],            // {{ looks for any images w/ ID image-about }}
      'about'             => [ 'thumbnail' => '{{image-about}}',],            // Note: image-about is reference previously 
      'contact'           => [ 'thumbnail' => '{{image-about}}',],
      'blog'              => [ 'thumbnail' => '{{image-about}}',],
      'homepage-section'  => [ 'thumbnail' => '{{image-about}}',],
    ],

    // Default to a static front page and assign the front and post pages
    'options'         => [
      // Note: These reference the 'posts' defined previously 
      'show_on_front'     => 'page',                                  // overwirtes homepage: blog posts or single page
      'page_on_front'     => '{{home}}',                              // which actual page goes on homepage 
      'page_for_posts'    => '{{blog}}',                              // which actual page will be for post page
    ],

    // Set the front page section theme mods to the IDs of the core-registered pages
    'theme_mods'      => [
      'ju_facebook_handle'      =>  'udemy',                          // overwrites theme settings created
      'ju_twitter_handle'       =>  'udemy',
      'ju_instagram_handle'     =>  'udemy',
      'ju_email'                =>  'udemy',
      'ju_phone_number'         =>  'udemy',
      'ju_header_show_search'   =>  'yes',
      'ju_header_show_cart'     =>  'yes',
    ],

    // Set up nav menus for each of the two areas registered in the theme
    'nav_menus'       => [
      // Assign a menu to the 'top' location
      'primary'       =>  array(
        'name'        =>  __( 'Primary Menu', 'udemy' ),
        'items'       => array(
          'link_home',              // core 'home' page is a link in case of a static front page is not used
          'page_about',
          'page_blog',
          'page_contact',
        ),
      ),

      // Assign a menu to the 'social' location
      'secondary'     =>  array(
        'name'        =>  __( 'Secondary Menu', 'udemy' ),
        'items'       =>  array(
          'link_home',              // core 'home' page is a link in case of a static front page is not used
          'page_about',
          'page_blog',
          'page_contact',
        ),
      ),
    ],

  ]);
  


  // adding menu in WP admin section
  // __() creates multi-lingual translations for string
  register_nav_menu( 'primary', __( 'Primary Menu', 'udemy' ) );          // create primary menu
  register_nav_menu( 'secondary', __( 'Secondary Menu', 'udemy' ) );      // create secondary menu

  // Ads
  if (function_exists('quads_register_ad')){                              // check to see plugin exists/activated
    quads_register_ad( array(
        'location'    => 'udemy_header', 
        'description' => 'Udemy Header position'
      ) );
  };

}
?>