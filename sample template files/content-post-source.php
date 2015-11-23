<?php
/**
 * The default template for displaying blog post source content.
 *
 * @package [Child Theme Name]
 * @author  Patrick Boehner
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

//* Setup repetable group variable
// https://github.com/WebDevStudios/CMB2/wiki/Field-Types#group
// http://www.billerickson.net/full-width-landing-pages-in-genesis/
$entries = get_post_meta( get_the_ID(), 'source_repeat_group', true );

// Conditional check to see if there is custom meta via variable
// We want to avoid adding the html structure if there are no entires
if ( $entries ) {

   //* Start source sturcture
   echo '<aside class="entry-sources"><ul>';

   //* Save repetable entires to arry of variable
   foreach ( (array) $entries as $key => $entry ) {

      //* Setup URL
      // Check is meta field variable is set and not null
      if ( isset( $entry['url'] ) )
      // Setup variable to get metadata and esc
      $url = esc_url( $entry['url'] );

      // Setup conditional check
      if( ! empty( $url ) ){
         echo '<li itemprop="citation">';
         echo '<strong>Source&colon;&nbsp;</strong><a href="' .$url. '" target="_blank" itemprop="url">' .$url. '</a>';
         echo '</li>';
      }

   }

   // End of source structure
   echo '</ul></aside><!-- .entry-sources -->';

}

?>
