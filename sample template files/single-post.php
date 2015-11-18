<?php

//* Singular Blog Post Tesmplate
//**********************************************

/**
 *
 * @package Child Theme Name
 * @author  Patrick Boehner
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

//* Security
//**********************
if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


//* Entry Content
//**********************

//* Inserting custom metadata
// https://github.com/WebDevStudios/CMB2/wiki/Basic-Usage
// https://codex.wordpress.org/Validating_Sanitizing_and_Escaping_User_Data
add_action( 'genesis_entry_content', 'pb_register_source_meta' );
function pb_register_source_meta() {

   //* Include the post format-specific template for the post source content.
   get_template_part( 'content', 'post-source' );

}

//**********************
//* This file handles single entries.

//* Run the Genesis loop
genesis();
