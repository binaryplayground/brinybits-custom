<?php
/*
 * Plugin Name:       Brinybits.au custom code
 * Plugin URI:        https://brinybits.au/
 * Description:       Custom code.
 * Version:           0.1
 * Requires at least: 6.0
 * Requires PHP:      8.0
 * Author:            findingsimple
 * Author URI:        https://findingsimple.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://github.com/binaryplayground/brinybits-custom/
 * Text Domain:       brinybits-custom
 */

add_action('wp_head', 'brinybits_add_typekit');

function brinybits_add_typekit(){
	if ( ! is_admin() ) { 
		echo '<link rel="stylesheet" href="https://use.typekit.net/jyb5iaa.css"><style>.wp-block-site-title a { font-family: "gridlite-pe-variable", sans-serif;
font-variation-settings: "ELSH" 3, "RECT" 1, "BACK" 1, "wght" 900; }</style>';
	}
};

function add_loginout_block_to_primary_navigation( $hooked_block_types, $relative_position, $anchor_block_type, $context ) {

	// Is $context a Navigation menu?
	if ( ! $context instanceof WP_Post || 'wp_navigation' !== $context->post_type ) {
		return $hooked_block_types;
	}
	
	if ( 'last_child' === $relative_position && 'core/navigation' === $anchor_block_type ) {
		$hooked_block_types[] = 'core/loginout';
	}

	return $hooked_block_types;
}
//add_filter( 'hooked_block_types', 'add_loginout_block_to_primary_navigation', 10, 4 );