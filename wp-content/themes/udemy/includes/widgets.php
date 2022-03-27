<?php 

function ju_widgets() {

  // Add sidebar to admin menu -> Appearance/Widgets
  register_sidebar( [
    'name'            =>  __('My First Theme Sidebar', 'udemy'), 
    'id'              =>  'ju_sidebar',
    'description'     =>  __('Sidebar for the theme Udemy', 'udemy'),
    'before_widget'   =>  '<div id="%1$s" class="widget clearfix %2$s">', // replaces default <li> to div
                                                                          // % vars = placeholders for 3P widgets to set own id/class
    'after_widget'    =>  '</div>',
    'before_title'    =>  '<h4>',                                         // sets witdget title to h4
    'after_title'     =>  '</h4>'                                         // due to Gutt. had to create Widget groups to show titles
  ]);

}
?>