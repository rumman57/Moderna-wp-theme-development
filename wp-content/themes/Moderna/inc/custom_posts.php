<?php

function getCustomPost()
{
		register_post_type('slider',array(
      'labels' => array(
          'name' => "custom_slider_moderna",
          'menu_name' =>"Custom Slider",
          'all_items' => "AllCustomSlider",
          'add_new' => 'AddNewSlider',
          'add_new_item' =>'Add A Custom Slider'
      	),
      'public'=> true,
      'supports' => array(
            'title','editor','thumbnail','custom-fields','page-attributes','revisions','author'
      	)
	));
    register_post_type('business_template',array(
      'labels' => array(
          'name' => "custom_business_template",
          'menu_name' =>"Custom Business Template",
          'all_items' => "AllCustomBusinessTemplate",
          'add_new' => 'Add_A_New_Custom_Template',
          'add_new_item' =>'Add A Custom Template'
        ),
      'public'=> true,
      'supports' => array(
            'title','editor','thumbnail','custom-fields','page-attributes','revisions','author'
        )
  ));
    register_post_type('portfolio',array(
      'labels' => array(
          'name' => "portfolio",
          'menu_name' =>"portfolio",
          'all_items' => "AllPortfolio",
          'add_new' => 'Add A Portfolio',
          'add_new_item' =>'Add A Portfolio'
        ),
      'public'=> true,
      'supports' => array(
            'title','editor','thumbnail','custom-fields','page-attributes','revisions','author'
        )
  ));
     register_post_type('pricingbox',array(
      'labels' => array(
          'name' => "Pricing Box",
          'menu_name' =>"Pricing Box",
          'all_items' => "PricingBox",
          'add_new' => 'Manage Pricng Box ',
          'add_new_item' =>'Manage Yourself for pricing box'
        ),
      'public'=> true,
      'supports' => array(
            'title','editor','thumbnail','custom-fields','page-attributes','revisions','author'
        )
  ));
}
add_action('init','getCustomPost');














?>