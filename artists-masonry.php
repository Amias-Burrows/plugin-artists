<?php
/*
 * @package ArtistsMasonry
 *
 * Plugin Name: Artists Masonry (Gutenberg Branch)
 * Plugin URI: https://amias.dev
 * Description: Plugin for Masonry design.
 * Version: 1.0
 * Author: Amias Burrows
 * Author URI: https://amias.dev
 * Text Domain: Artists-Masonry
 */


defined('ABSPATH') or die("This file is not accessable directly.");

function artists_styles() {	// Includes stylsheet into website
	wp_enqueue_style('artists-masonry', plugins_url('assets/css/masonry.css', __FILE__), array(), null, 'all');
}

function artists_gutenberg_block() {	// Includes the gutenberg block item
	wp_enqueue_script('artists_masonry_block', plugin_dir_url(__FILE__) . 'assets/js/block.js', array('wp-blocks', 'wp-editor'), true, false);
}

function artists_activate() {
		// On activation of the plugin
	flush_rewrite_rules();
}

function artists_deactivate() {
		// On deactivation of the plugin
	flush_rewrite_rules();
}

function artists_uninstall() {
		// On uninstallation of the plugin
}

	// add_action for the gutenberg block js file found at ./assets/js/block.js
add_action('enqueue_block_editor_assets', 'artists_gutenberg_block');

	// Links the css file found at ./assets/css/masonry.css
add_action('wp_enqueue_scripts', 'artists_styles');

/*
	// Links activation hook to artists_activate() function
register_activation_hook( __FILE__, 'artists_activate');

	// Links deactivation hook to artists_deactivate() function
register_deactivation_hook( __FILE__, 'artists_deactivate');

	// Links uninstallation hook to artists_uninstall() function
register_uninstall_hook( __FILE__, 'artists_uninstall');
 */

?>
