<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category Source Fields
 * @package  CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */


//**********************************************
//* Security
//**********************************************

//* Blocking direct access to the plugin PHP file
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


//**********************************************
//* Repeatable Source Fields
//**********************************************
// https://github.com/WebDevStudios/CMB2/wiki/Field-Types#group

add_action( 'cmb2_admin_init', 'pb_cmb2_source_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function pb_cmb2_source_metaboxes() {

// Start with an underscore to hide fields from custom fields list
$prefix = '_cmb2_source_metaboxes_';

   $cmb = new_cmb2_box( array(
      'id'            => 'source_metabox',
      'title'         => __( 'Sources', 'cmb2' ),
      'object_types'  => array( 'post', ), // Post type
      'context'       => 'advanced', //  'normal', 'advanced', or 'side'
      'priority'      => 'core', //  'high', 'core', 'default' or 'low'
      'show_names'    => true, // Show field names on the left
      'cmb_styles'    => false, // false to disable the CMB stylesheet
      // 'closed'     => true, // Keep the metabox closed by default
      ) );


   // Id's for group's fields only need to be unique for the group. Prefix is not needed.
   $cmb->add_field( array(
       'name' => '',
       'id'   => $prefix . 'url',
       'type' => 'text_url',
       'protocols' => array( 'http', 'https' ), // Array of allowed protocols
       'repeatable' => true,
   ) );

}
