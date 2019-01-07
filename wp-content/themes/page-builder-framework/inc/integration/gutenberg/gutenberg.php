<?php
/**
 * Gutenberg Integration
 *
 * @package Page Builder Framework
 * @subpackage Integration/Gutenberg
 */
 
// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Theme Setup
add_action('after_setup_theme', 'wpbf_gutenberg_theme_setup');

function wpbf_gutenberg_theme_setup() {

	// Gutenberg Wide Aligned Elements
	add_theme_support( 'align-wide' );

}

// Generate Customizer CSS
function wpbf_generate_gutenberg_css() {
 
	ob_start();
	include_once( get_template_directory() . '/inc/integration/gutenberg/gutenberg-styles.php' );
	return wpbf_minify_css( ob_get_clean() );

}

// Editor Styles
function wpbf_gutenberg_block_editor_assets() {

	$inline_styles = wpbf_generate_gutenberg_css();
	wp_enqueue_style( 'wpbf-gutenberg-style', get_template_directory_uri() . '/css/block-editor-styles.css', '', WPBF_VERSION );
	wp_add_inline_style( 'wpbf-gutenberg-style', $inline_styles );

}

add_action( 'enqueue_block_editor_assets', 'wpbf_gutenberg_block_editor_assets' );