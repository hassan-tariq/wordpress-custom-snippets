<?php
/**
 * Add a new custom image size for your theme
 */
function add_custom_image_sizes() {
	add_image_size('custom-thumbnail', 300, 200, true);
	add_image_size('custom-medium', 600, 400, false);
}
add_action('after_setup_theme', 'add_custom_image_sizes');

// Add the new image sizes to the media library selection
function custom_image_sizes_choose($sizes) {
	return array_merge($sizes, array(
		'custom-thumbnail' => __('Custom Thumbnail'),
		'custom-medium' => __('Custom Medium'),
	));
}
add_filter('image_size_names_choose', 'custom_image_sizes_choose');

// new comment
