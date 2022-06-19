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
		function styles() {
			wp_enqueue_style('artists-masonry', plugins_url('assets/css/masonry.css', __FILE__), array(), null, 'all');
		}
		function register_block() {
			register_block_type(__DIR__ . 'artists-masonry');
		}
	}

	if (class_exists('artistsMasonry')) {
		$artistsMasonry = new artistsMasonry();
	}

	add_action('wp_enqueue_scripts', array($artistsMasonry, 'styles'));
	add_action('init', array($artistsMasonry, 'register_block'));
?>
