<?php
/*
 * Plugin Name: Track a Click on Google Analytics
 * Plugin URI: https://www.inkmyweb.com/wordpress/track-click-google-analytics-wordpress-shortcode-plugin
 * Description: A simple shortcode to insert Google Analytics event tracking code on your links.
 * Version: 0.4
 * Author: Ink my web
 * Author URI: https://www.inkmyweb.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: tac-ga
*/

function tac_ga_shortcode( $atts, $content = null ) {
	$ax = shortcode_atts( array(
		'url' => '#',
		'category' => null,
		'action' => null,
		'label' => null,
		'value' => null
	), $atts );

	$s = "'send'";
	$e = ", 'event'";
	$c = is_null($ax['category']) ? ", 'link'" : ", '".esc_attr($ax['category'])."'";
	$a = is_null($ax['action']) ? ", 'click'" : ", '".esc_attr($ax['action'])."'";
	$l = is_null($ax['label']) ? ", '".esc_attr( $ax['url'] )."'" : ", '".esc_attr($ax['label'])."'";
	$v = is_null($ax['value']) ? null : ", ".esc_attr($ax['value'])."";

	$ga = "ga($s$e$c$a$l$v)";

	return '<a href="' . esc_attr($ax['url']) . '" onClick="' . $ga . '">' . $content . '</a>';
}

add_shortcode( 'tac_ga', 'tac_ga_shortcode' );
