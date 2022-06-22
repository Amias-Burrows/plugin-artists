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
	function __contruct() {
	}

	function styles() {
		wp_enqueue_style('artists-masonry', plugins_url('assets/css/masonry.css', __FILE__), array(), null, 'all');
	}

	function settings() {
		add_options_page('Homepage Menu', 'AR Burrows Homepage Menu', 'manage_options', 'ar-burrows-homepage-menu', array($artistsMasonry, 'menu_contents') );
	}

	function menu_contents() {?>
		<p>This is the plugin contents</p>
	<?php
	}

	function register_block() {
		register_block_type(__DIR__ . 'artists-masonry');
	}

	function activate() {
		flush_rewrite_rules();
	}

	function deactivate() {
		flush_rewrite_rules();
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

add_action('wp_enqueue_scripts', array($artistsMasonry, 'styles'));
add_action('admin_menu', array($artistsMasonry,  'settings'));
add_action('init', array($artistsMasonry, 'register_block'));
?>
