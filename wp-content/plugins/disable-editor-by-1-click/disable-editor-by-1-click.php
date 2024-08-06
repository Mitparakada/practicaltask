<?php 
/*
Plugin Name: Disable editor by 1 click
Plugin URL: https://www.linkedin.com/in/mit-parakada-917818195/
Description: Disable Gutenberg Block editor by 1 click, Disable Gutenberg Block editor in all Post Type(including custom post type)
Version: 2.0.13
Author: Mit Parakada
Author URI: https://www.linkedin.com/in/mit-parakada-917818195/
*/
/*
 * Register  Disable editor by 1 click
 *
*/

if (version_compare($GLOBALS['wp_version'], '5.0-beta', '>')) {
	// WP > 5 beta
	add_filter('use_block_editor_for_post_type', '__return_false', 10);
} else {
	// WP < 5 beta
	add_filter('gutenberg_can_edit_post_type', '__return_false', 10);
}