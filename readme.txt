=== Plugin Name ===
Contributors: gerhard
Plugin URI: http://blog.ninjasforhire.co.za/99/ninja-columns-wordpress-plugin/
Tags: columns
Author: Ninjas for Hire
Author URI: http://www.ninjasforhire.co.za
Donate link: http://blog.ninjasforhire.co.za/99/ninja-columns-wordpress-plugin/
Requires at least: 3.0
Tested up to: 3.4.2
Stable tag: trunk

The plugin will allow users to easily split content into columns using short-codes.

== Description ==

This plugin is currently  aimed at developers so it doesn't come with any CSS or JavaScript, it just ads the DIVs for the columns, the rest is up to the developer's imagination. This will allow developers to easily add column functionality to custom Wordpress implementations.

== Installation ==

1. Copy the PHP file from the zip file into your WordPress "plugins" folder.
2. Log in to your installation of WordPress.
3. Go to the "Plugins" menu and activate the plugin called "Ninja Columns"
4. Enjoy!

== Frequently Asked Questions ==

= Where is a good place I can ask questions about this plugin? =

The best place would be on the plugin development page at the following location: http://blog.ninjasforhire.co.za/99/ninja-columns-wordpress-plugin/

== Changelog ==

= 1.0 =
* First Version of the plugin.

== Usage ==

**How do users use it?**

To split the content into columns, you simply add the shortcode *[columnbreak]* where you want the one column to end and the next one to start.

It will add a container around the columns with the class 'ninja_columns' and the class 'colsid_{post-id}' that will allow you to target the post or page specifically.
