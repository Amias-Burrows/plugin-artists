<?php
/*
 * @package ArtistsMasonry
 *
 * Plugin Name: Artists Masonry
 * Plugin URI: https://amias.dev
 * Description: Plugin for Masonry design.
 * Version: 1.0
 * Author: Amias Burrows
 * Author URI: https://amias.dev
 * Text Domain: Artists-Masonry
 */


defined('ABSPATH') or die("This file is not accessable directly.");

class artistsMasonry {
	function __construct() {
		add_action('wp_enqueue_scripts', array($this, 'styles'));
	}


	function styles() {
		wp_enqueue_style('artists-masonry', plugins_url('assets/css/masonry.css', __FILE__), array(), null, 'all');
	}

	function activate() {
		flush_rewrite_rules();
	}

	function deactivate() {
		flush_rewrite_rules();
	}

	function uninstall() {
	}
}

if (class_exists('artistsMasonry')) {
	$artistsMasonry = new artistsMasonry();
}

function artists_styles() {
	wp_enqueue_style('artists-masonry', plugins_url('assets/css/masonry.css', __FILE__), array(), null, 'all');
}

function artists_gutenberg_block() {
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

	// Links activation hook to artists_activate() function
register_activation_hook( __FILE__, 'artists_activate');

	// Links deactivation hook to artists_deactivate() function
register_deactivation_hook( __FILE__, 'artists_deactivate');

	// Links uninstallation hook to artists_uninstall() function
register_uninstall_hook( __FILE__, 'artists_uninstall');

?>
