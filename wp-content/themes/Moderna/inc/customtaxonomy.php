<?php
function portfolio_texonomy() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => 'Categories',
		'search_items'      => 'a',
		'all_items'         => __( 'All Categories' ),
		'parent_item'       => __( 'Parent Category' ),
		//'parent_item_colon' => __( 'Parent Category:' ),
		'edit_item'         => __( 'Edit Category' ),
		'update_item'       => __( 'Update Category' ),
		'add_new_item'      => __( 'Add New Category' ),
		'new_item_name'     => __( 'New Category Name' ),
		'menu_name'         => __( 'Portfolio Categories' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
	);

	register_taxonomy('portfolio','portfolio', $args );

}
  add_action('init','portfolio_texonomy');

?>