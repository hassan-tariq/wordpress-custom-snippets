<?php
/**
 * Add a custom widget to the WordPress dashboard
 */
function add_custom_dashboard_widget() {
	wp_add_dashboard_widget(
		'custom_dashboard_widget',
		'Custom Dashboard Widget',
		'custom_dashboard_widget_content'
	);
}
add_action('wp_dashboard_setup', 'add_custom_dashboard_widget');

function custom_dashboard_widget_content() {
	echo '<p>Welcome to your custom dashboard widget! Add your content here.</p>';
}