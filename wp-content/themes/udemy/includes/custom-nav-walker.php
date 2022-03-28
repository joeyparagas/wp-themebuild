<?php 

// Walker class to output sub-menus - changes submenu structure to the way you want vs default WP structure
class JU_Custom_Nav_Walker extends Walker_Nav_menu { 

  // Overwrite default start_lvl WP function - starts submenu html
  public function start_lvl(&$output, $depth = 0, $args=[]){ 
    $output .= '<ul class="special-class">';    // always append output (.=) , not reset (=)
  }
  
  // overwite default start_el WP function 
  public function start_el(&$output, $item, $depth = 0, $args=[], $id = 0){ 
    //$args - array values are in header.php->wp_nav_menu
    $output .= '<li class="special-class-item">';                       // create li element
    $output .= $args->before;                                           // array values were never set but good practice to insert
                                                                        // other devs can overwrite these settings
    $output .= '<a href="' . $item->url . '">';                         // set up anchor links to submenu
    $output .= $args->link_before . $item->title . $args->link_after;   // link before, title and after
    $output .= '</a>';                                                  // close tag
    $output .= $args->after;                                            // see $args->before ^^^
  }

  // end_el closes li/element tag 
  public function end_el(&$output, $item, $depth = 0, $args=[], $id = 0){ 
    $output .= '</li>';
  } 

  // Overwrite default end_lvl WP function - ends submenu html
  public function end_lvl(&$output, $depth = 0, $args=[]){ 
    $output .= '</ul>';
  }

}


?>