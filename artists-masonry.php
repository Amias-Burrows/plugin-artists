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
		add_action('admin_menu', array($this,  'page'));
		add_action('init', array($this, 'register_block'));
		add_action('admin_init', array($this, 'settings'));
		add_action('enqueue_block_editor_assets', array($this, 'gutenberg_block'));
	}

	function gutenberg_block() {
		wp_enqueue_script('artists_masonry_block', plugin_dir_url(__FILE__) . 'assets/js/block.js', array('wp-blocks', 'wp-editor'), true, false);
	}

	function styles() {
		wp_enqueue_style('artists-masonry', plugins_url('assets/css/masonry.css', __FILE__), array(), null, 'all');
	}

	function page() {
		add_options_page('Homepage Menu', 'AR Burrows Homepage Menu', 'manage_options', 'ar-burrows-homepage-menu', array($this, 'menu_contents') );
	}

	function settings() {
			//First Setting
		add_settings_section('arb_masonry_section', 'subtitle', 'Description of the section.  Lorem ipsum dolor sit amet', 'ar-burrows-homepage-menu');
		add_settings_field('arb_masonry_location', 'Display Location', array($this, 'location_html'), 'ar-burrows-homepage-menu', 'arb_masonry_section');
		register_setting('ar-burrows-masonry', 'arb_masonry_location', array('sanitise_callback' => 'sanitize_text_field', 'default' => '0'));
	}

	function location_html() { ?>
		<p>section</p>
	 <?php }

	function menu_contents() {?>
		<div class='wrap'>
			<h1>Homepage Menu Settings</h1>
		</div>
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

?>
