<?php
/**
 * Disable XML-RPC functionality for improved security
 */
add_filter('xmlrpc_enabled', '__return_false');

// Remove XML-RPC headers
function remove_xmlrpc_headers() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'remove_xmlrpc_headers');