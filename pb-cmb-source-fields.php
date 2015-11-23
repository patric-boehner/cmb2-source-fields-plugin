<?php

/*
Plugin Name: Source Fields - Custom Metabox (Required)
Plugin URI: www.patrickboehner.com
Description: A simple plugin to add repetable url custom meta boxes to posts for adding source links. This is a default plugin that must be used as part of the sites functionality. Removing or turning this plugin off will effect your ability to edit and display the source links on your site. It can be used with any WordPress theme as long as this plugin is active. See the readme file for more details.
Version: 100.1.0
Author: Patrick Boehner
Author URI: http://patrickboehner.com
License: GPL-2.0+
*/

/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
*/

/*
To activate this as a plugin just add to wp-contents/plugins and activate in Dashboard.
*/


//**********************************************
//* Security
//**********************************************

//* Blocking direct access to the plugin PHP file
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


//**********************************************
//* Load Plugin Files
//**********************************************

//* CMB2 plugin required notice
require plugin_dir_path( __FILE__ ) . 'includes/source-fields-notices.php';


//* Add Support for Testimonial Specific Custom Metaboxes (cmb2)
if( !class_exists("CMB2") ){
	// require_once( plugin_dir_path(__FILE__)."includes/source-fields-metaboxes.php" );
	require_once( plugin_dir_path(__FILE__)."includes/source-fields-metaboxes-v2.php" );
}

// Load Custom CMB2 Stylesheet in Admin Post Edit Screen
// add_action('admin_enqueue_scripts', 'pb_cmb2_custom_style');
// function pb_cmb2_custom_style( $hook ) {
// 	if ( 'post.php' != $hook ) {
//         return;
//     }
//   wp_enqueue_style('cmb2-custom', plugin_dir_url( __FILE__ ) .'css/cmb2-custom.css', '1.0.1', true );
// }
