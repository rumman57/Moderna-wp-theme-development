<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset') ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">

                     <?php
                       if ( function_exists( 'ot_get_option' ) ) {
						  $headerlogoimg = ot_get_option( 'headerlogoimg' );
						  $headerlogotext = ot_get_option( 'headerlogotxt' );
						}
						if($headerlogoimg!= '')
						{
							echo '<img src="'.$headerlogoimg.'">';
						}
						else
						{
							echo '<span>'.$headerlogotext.'</span>';
						}
                     ?>
                 

                    </a>
                </div>

		 <?php

		  $defaults = array(
					    'theme_location'  => 'primary_menu',
					    'menu_class'      => 'nav navbar-nav',
					     'container'      => 'div',
					      'container_class' =>'navbar-collapse collapse',
					     'fallback_cb' => 'moderna_fallback_menu'
					);

					
		add_filter( 'nav_menu_css_class', 'additional_active_item_classes', 10, 2 );

				function additional_active_item_classes($classes = array(), $menu_item = false){

				    if(in_array('current-menu-item', $menu_item->classes)){
				        $classes[] = 'active';
				    }

				    return $classes;
				}
			function moderna_fallback_menu(){
			 echo '<div class="navbar-collapse collapse">';
			  echo '<ul class="nav navbar-nav">';
			  if('page' != get_option('show_on_front'))
			  {
			    echo '<li><a href="'.site_url().'/">Home</a></li>';
			  }
			  wp_list_pages('title_li=');
			  echo "</ul>";
			  echo "</div>";

			}	

		     wp_nav_menu( $defaults );

		 ?>

                   <!-- <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="components.html">Components</a></li>
								<li><a href="pricingbox.html">Pricing box</a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>-->
            </div>
        </div>
	</header>
	<!-- end header -->
