<?php
register_nav_menus( array(
	'main_menu' => 'Main Menu',
	'footer_menu' => 'Footer Menu',
    'portfolio_menu' => 'Portfolio Menu'
) );



            // code which used to main code e ....purata php er vitor e thakbe


/*
 $defaults = array(
    'theme_location'  => ,
    'menu'            => ,
    'container'       => 'div',
    'container_class' => 'menu-{menu slug}-container',
    'container_id'    => ,
    'menu_class'      => 'menu',
    'menu_id'         => ,
    'echo'            => true,
    'fallback_cb'     => 'moderna_fallback_menu',
    'before'          => ,
    'after'           => ,
    'link_before'     => ,
    'link_after'      => ,
    'items_wrap'      => '<ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>',
    'depth'           => 0,
    'walker'          =>
);

function additional_active_item_classes($classes = array(), $menu_item = false){

	    if(in_array('current-menu-item', $menu_item->classes)){
	        $classes[] = 'active';
	    }                          // Ei function ta active class er jonno

	    return $classes;
	}

function moderna_fallback_menu(){
			 echo '<div class="navbar-collapse collapse">';
			  echo '<ul class="nav navbar-nav">';
			  if('page' != get_option('show_on_front'))   
			  {
			    echo '<li><a href="'.site_url().'/">Home</a></li>';
			  }
			  wp_list_pages('title_li=');  // Ei function ta fall back cv er jonno
			  echo "</ul>";
			  echo "</div>";
			}	
 
 wp_nav_menu( $defaults ); 


*/













 
?>