<?php
/**
 * Change the default excerpt length for posts
 */
function custom_excerpt_length($length) {
	return 25; // Change this number to set your desired excerpt length
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

function custom_excerpt_more($more) {
	return '...'; // Modify this to change the excerpt end string
}
add_filter('excerpt_more', 'custom_excerpt_more');