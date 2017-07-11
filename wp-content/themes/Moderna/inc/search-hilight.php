<?php
  
  //This is the main search term hightlighting code

function search_excerpt_highlight() {
    $excerpt = get_the_excerpt();
    $keys = implode('|', explode(' ', get_search_query()));
    $excerpt = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $excerpt);

    echo '<p>' . $excerpt . '</p>';
}

function search_title_highlight() {
    $title = get_the_title();
    $keys = implode('|', explode(' ', get_search_query()));
    $title = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $title);

    echo $title;
}

          //This is the another search term hightlighting code

/*function highlight_results($text){
     if(is_search() && !is_admin()){
     $sr = get_query_var('s');
     $keys = explode(" ",$sr);
     $keys = array_filter($keys);
     $regEx = '\'(?!((<.*?)|(<a.*?)))(\b'. implode('|', $keys) . '\b)(?!(([^<>]*?)>)|([^>]*?</a>))\'iu';
      $text = preg_replace($regEx, '<strong class="search-highlight">\0</strong>', $text);
	}
    return $text;
}
add_filter('the_excerpt', 'highlight_results');
add_filter('the_content', 'highlight_results');
add_filter('the_title', 'highlight_results');*/
            
            //Search Click Handle

function SearchFilter1($query) {
   // If 's' request variable is set but empty
   if (isset($_GET['s']) && empty($_GET['s']) && $query->is_main_query()){ 
    
     $query->is_search = false;
      $query->is_home = true;
 
 }
   return $query;
}
add_filter('pre_get_posts','SearchFilter1');


                 //Search Category


function SearchFilter2($query) {

if ( $query->is_search) {


$query->set( 'post_type', array( 'post') );

}

return $query;

}
add_filter('pre_get_posts','SearchFilter2');











?>
