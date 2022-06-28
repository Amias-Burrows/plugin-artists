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
		add_action('enqueue_block_editor_assets', array($this, 'gutenberg_block'));
	}

	function gutenberg_block() {
		wp_enqueue_script('artists_masonry_block', plugin_dir_url(__FILE__) . 'assets/js/block.js', array('wp-blocks', 'wp-editor'), true, false);
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
	//Activation
register_activation_hook( __FILE__, array($artistsMasonry, 'activate'));
//Deactivation
register_deactivation_hook( __FILE__, array( $artistsMasonry, 'deactivate'));
//Uninstall
register_uninstall_hook( __FILE__, array( $artistsMasonry, 'uninstall'));

?>
