<?php
// Hooks your functions into the correct filters
function my_add_mce_button() {
	// check user permissions
	if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
		return;
	}
	// check if WYSIWYG is enabled
	if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'moderna_tinymce_plugin' );
		add_filter( 'mce_buttons', 'my_register_mce_button' );
	}
}
add_action('admin_head', 'my_add_mce_button');

// Declare script for new button
function moderna_tinymce_plugin( $plugin_array ) {
	$plugin_array['moderna_1st_button'] = $plugin_array['moderna_2nd_button'] = get_template_directory_uri() .'/js/modernaTinyMCE.js';
	/*$plugin_array['moderna_2nd_button'] = get_template_directory_uri() .'/js/modernaTinyMCE.js';*/
	return $plugin_array;
}

// Register new button in the editor
function my_register_mce_button( $buttons ) {
	array_push( $buttons, 'moderna_1st_button' );
	array_push( $buttons, 'moderna_2nd_button' );
	array_push( $buttons, 'video_control' );
	return $buttons;
}





?>