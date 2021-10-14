<?php
/**
 * Plugin Name: Custom Notice Block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function o4t_notice_block_admin() {
	wp_enqueue_script(
		'o4t-notice-block-editor',
		plugins_url( 'block.js', __FILE__ ),
		array( 'wp-blocks', 'wp-element' )
	);

	wp_enqueue_style(
		'o4t-notice-block-editor',
		plugins_url( 'block.css', __FILE__ ),
		array()
	);
}

add_action( 'enqueue_block_editor_assets', 'o4t_notice_block_admin' );

function o4t_notice_block_frontend() {

	wp_enqueue_style(
		'o4t-notice-block-editor',
		plugins_url( 'block.css', __FILE__ ),
		array()
	);
}

add_action( 'wp_enqueue_scripts', 'o4t_notice_block_frontend' );

require_once 'acf-notice-block.php';