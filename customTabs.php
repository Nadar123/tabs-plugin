<?php
/*
  Plugin Name: custom-tabs-plugin
  Description: Custom tabs Plugin  help you manage and tabs on your WordPress site.
  Version: 1.0
  Author: Nadar Rossano
  Author URI: http://localhost:10003/
  Text Domain: riskifiedomin
*/


// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}
// Check ACF functions.
if( !class_exists('acf') ) {
  die('Please install and activate Advanced Custom Fields plugin.');
}

// Register enqueue scripts js/css.
require_once plugin_dir_path(__FILE__) . './includes/enqueue/enqueue.php';

// Register the custom tabs shortcode.
require_once plugin_dir_path(__FILE__) . './shortcodes/shortcodes.php';

// Register option ACF page.
require_once plugin_dir_path(__FILE__) . './includes/options/options.php';
