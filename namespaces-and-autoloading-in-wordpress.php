<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the
 * plugin admin area. This file also includes all of the dependencies used by
 * the plugin, and defines a function that starts the plugin.
 *
 * @link		https://tommcfarlin.com/namespaces-and-autoloading-2017/
 * @since 		1.0.0
 * @package		WCATL
 *
 * @wordpress-plugin
 * Plugin Name:	   	Namespaces and Autoloading in WordPress
 * Plugin URI:		https://tommcfarlin.com/namespaces-and-autoloading-2017/
 * Description:	   	Demonstrates how to use namespaces and autoloading in WordPress plugins.
 * Version:		   	1.0.0
 * Author:			Tom McFarlin
 * Author URI:		https://tommcfarlin.com
 * License:		   	GPL-2.0+
 * License URI:	   	http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace WCATL;
use WCATL\File;

// This file can't be accessed directly.
defined( 'WPINC' ) || die;

// Load the autoloader.
include_once( 'lib/autoloader.php' );

add_action( 'plugins_loaded', __NAMESPACE__ . '\\wcatl_start' );
/**
 * Starts the plugin by instantiating each of the classes (which is
 * included via the autoloader).
 */
function wcatl_start() {

	$file_reader = new File\File_Reader();
	$file_reader->init();

	$file_writer = new File\File_Writer();
	$file_writer->init();
}
