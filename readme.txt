=== Nietzsche - WP Head Cleaner ===
Contributors: deadwriterssociety
Plugin Name: Nietzsche - WP Head Cleaner
Tags: cleanup, cleaner, clean, remove, wp_head, head, header, wphead clean, clean up header, wp clean up, wp cleanup
Requires at least: 4.7
Tested up to: 5.3
Stable tag: 1.3
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin cleans up the wp_head() and removes unnecessary code.

== Description ==

Light and fast wp_head() cleaner. Just activate it and all unnecessary code will be deleted from site header section. It will improve loading speed of your website.

This plugin will remove:

* WordPress version
* shortlink
* Really Simple Discovery link
* RSS feed links
* all extra RSS feed links
* wlwmanifest.xml
* meta rel=dns-prefetch href=//s.w.org
* the next and previous post links
* Emoji icons
* WordPress REST API
* oEmbed

Feeds (RSS, RSS2, Atom & RDF) and comments feeds will be disabled and redirected to home page for security reasons.

== Installation ==

= FTP =

1. Unzip the plugin file and extract the folder.
2. Upload the **nietzsche** folder to the /wp-content/plugins/ directory.
3. Activate the plugin through the `Plugins` menu in WordPress.

= Dashboard =

1. Upload the plugin through `Plugins` -> `Add new` menu in WordPress.
2. Activate the plugin through the `Plugins` menu in WordPress.

== Frequently Asked Questions ==

= I installed the plugin. What's next? =

Just activate it. No more needs to be done.
	
== Changelog ==

= 1.3 =
* Unsecure REST API features are removed.

= 1.2 =
* Feeds (RSS, RSS2, Arom & RDF) and comments feeds are disabled and redirected to home page for security reasons.

= 1.1 =
* Added oEmbed to remove from wp_head.

= 1.0 =
* Initial release.