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

/**
 * Changes the logo title (hover text)
 */
function brinybits_login_logo_url_title() {
    return get_bloginfo( 'name' );
}
add_filter( 'login_headertext', 'brinybits_login_logo_url_title' );

/**
 * Changes the logo URL to the website's homepage
 */
function brinybits_login_logo_url() {
    return get_bloginfo( 'wpurl' );
}
add_filter( 'login_headerurl', 'brinybits_login_logo_url' );
