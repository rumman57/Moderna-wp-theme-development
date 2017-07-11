<?php

add_action( 'widgets_init', 'sidebar_register' );
function sidebar_register() {
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar', 'theme-slug' ),
        'id'            => 'ft_sidebar',
        'description'   => __( 'Footer Sidebar' ),
        'before_widget' => ' <div class="col-lg-3"><div class="widget footer_wid">',
	    'after_widget'  => '</div></div>',
	    'before_title'  => '<h5 class="widgetheading">',
	    'after_title'   => '</h5>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar1', 'theme-slug' ),
        'id'            => 'ft_sidebar1',
        'description'   => __( 'Footer Sidebar1' ),
        'before_widget' => '<div class="flickr_badge">',
	    'after_widget'  => '</div>',
	    'before_title'  => '',
	    'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __( 'Main Blog Sidebar', 'theme-slug' ),
        'id'            => 'blogsidebar',
        'description'   => __( 'Main Blog Sidebar' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgetheading">',
        'after_title'   => '</h4>',
    ) );
}













?>