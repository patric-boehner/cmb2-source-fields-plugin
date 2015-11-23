<?php
/**
 * The default template for displaying blog post source content.
 *
 * Used for single blog post.
 *
 * @package [Child Theme Name]
 * @author  Patrick Boehner
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

//* Setup repetable field variable
// https://github.com/WebDevStudios/CMB2/wiki/Field-Types#group
// http://www.billerickson.net/full-width-landing-pages-in-genesis/
// http://php.net/manual/en/control-structures.foreach.php
$reference = get_post_meta( get_the_ID(), '_cmb2_source_metaboxes_url', true );

if ($reference) {
   //* Start source sturcture
   echo '<aside class="entry-sources"><ul>';

   // Setup to iterate over our array.
   // Loop over the array given by $reference. For each iteration, the element is assigned a the value $url and the iteration is advanced by one.
   foreach ($reference as $value) {

      // Escape the value and assign a varaible
      $url = esc_url($value);

      // Echo out a line item for each
      echo '<li itemprop="citation">';
      echo '<strong>Source&colon;&nbsp;</strong><a href="' .$url. '" target="_blank" itemprop="url">' .$url. '</a>';
      echo '</li>';

   }

   // End of source structure
   echo '</ul></aside><!-- .entry-sources -->';

}
