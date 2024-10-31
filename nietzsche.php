<?php
/*
 * Plugin Name: Nietzsche - WP Head Cleaner
 * Description: This plugin cleans up the wp_head() and removes unnecessary code.
 * Version: 1.3
 * Author: Dead Writers Society
 * Author URI: https://deadwriterssociety.com
 * License: GPLv2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: nietzsche
 * Domain Path: /languages
 */

function nietzsche_disable_feeds() {
	// Redirects all feeds to home page.
	$url = site_url();
	wp_redirect( $url );
}

// Disables feeds.
add_action( 'do_feed', 'nietzsche_disable_feeds', 1 );
add_action( 'do_feed_rdf',  'nietzsche_disable_feeds', 1 );
add_action( 'do_feed_rss',  'nietzsche_disable_feeds', 1 );
add_action( 'do_feed_rss2', 'nietzsche_disable_feeds', 1 );
add_action( 'do_feed_atom', 'nietzsche_disable_feeds', 1 );

// Disables comments feeds.
add_action( 'do_feed_rss2_comments', 'nietzsche_disable_feeds', 1 );
add_action( 'do_feed_atom_comments', 'dnietzsche_disable_feeds', 1 );

remove_action( 'wp_head', 'wp_generator' );                           // Removes WordPress version.
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );            // Removes shortlink.
remove_action( 'wp_head', 'rsd_link' );                               // Removes Really Simple Discovery link.
remove_action( 'wp_head', 'feed_links', 2 );                          // Removes RSS feed links.
remove_action( 'wp_head', 'feed_links_extra', 3 );                    // Removes all extra RSS feed links.
remove_action( 'wp_head', 'wlwmanifest_link' );                       // Removes wlwmanifest.xml.
remove_action( 'wp_head', 'wp_resource_hints', 2 );                   // Removes meta rel=dns-prefetch href=//s.w.org
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // Removes relational links for the posts.

// Removes Emoji icons.
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// Removes WordPress REST API.
remove_action( 'template_redirect', 'rest_output_link_header', 11 );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' );
remove_action( 'auth_cookie_malformed', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_expired', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_username', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_hash', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_valid', 'rest_cookie_collect_status' );
remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );
add_filter( 'rest_authentication_errors', 'disable_wp_rest_api' );
remove_action( 'init', 'rest_api_init' );
remove_action( 'rest_api_init', 'rest_api_default_filters', 10 );
remove_action( 'rest_api_init', 'register_initial_settings', 10 );
remove_action( 'rest_api_init', 'create_initial_rest_routes', 99 );
remove_action( 'parse_request', 'rest_api_loaded' );
add_filter( 'rest_enabled', '__return_false' );
add_filter( 'rest_jsonp_enabled', '__return_false' );

// Removes oEmbeds.
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

?>