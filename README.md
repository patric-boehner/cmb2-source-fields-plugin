# Source Fields Meta Box - Using CMB2

Template for a basic source fields plugin with custom meta fields using the [CMB2 tool kit](https://github.com/WebDevStudios/cmb2) for easily adding source links to posts. There are two versions, the active version wich allows only for a repeatable url fields and one with a repeatable group of fields that can be expanded upon to add additional meta fields.

This has only just been quickly put together so I could stop thinking about it and have something to turn to when I next have more time. It contains only one repeatable field for a url, but could include additional options for heading titles and footnoting.

## Solving a problem
This has been something i wanted for my own personal blog ever since moving it to wordpress. My blog is mainly meant for me, as a personal repository of creative inspiration. So most of the content, mainly images and video, come from other sources. I have been manually entering the links for those sources at the bottom of posts but this could be done more easily and consistently with repeatable custom meta fields.

## Contents

The template source fields plugins contains the following files:

- ```README.md```. The file your currently reading.
- ```readme.txt```. The required wordpress plugin readme with additional details and change log.
- ```LICENSE```. The GPLv2 license text.
- ```index.php```. Never hurts to include a blank index file.
- ```/sample template file```s. See the sample files section bellow for further details.
- ```pb-cmb-source-fields.php```. The primary plugin file in which all other part files are included.
- ```/includes```. Folder containing all the necessary part files.
   - ```source-fields-metaboxes.php```. Contains the functions to register the repeatable group of custom meta boxes.
   - ```source-fields-metaboxes-v2.php```. Contains the functions to register the repeatable fields of custom meta boxes.
   - ```source-fields-notices.php```. Contains any plugin notices. In particular a check to see if CMB2 is already installed upon the plugins activation.
- ```/css```
	- ```cmb2-custom.css```. Contains some custom css to modify how cmb2 handles repeatable groups. The css file is enqueued in the ```pb-cmb-source-fields.php```, file but is commented out by default.

## Structure

For the sake of reference and later styling, the structure for the source fields output via the ```content-post-source.php``` file is outlined bellow.

```php
<aside class="entry-sources">
   <ul>
      <li itemprop="citation">
      <strong>Source: </strong>
         <a href=" Source URL " target="_blank" itemprop="url"><!-- Source URL --></a>
      </li>
   </ul>
</aside>
<!-- .entry-sources -->'

```

## Sample CSS

Just some quick sample css for styling cmb2 repeatable group fields after playing around in inspector. I haven't checked CMB2's css file to look at the proper structure of the selectors. See the sample css file for more ideas.

```css

.cmb-row.cmb-repeat-group-field.table-layout {
    width: 60%;
    display: inline-block
}
.cmb-row.cmb-remove-field-row {
    width: 40%;
    display: inline-block
}

```

## Sample Files

The template plugin contains a folder called sample template files. This folder contains samples of the necessary theme template files to output the custom meta boxes for the testimonial post type.

**Contents**

- ```content-post-source.php```. Contains the necessary code to output the repeatable group meta box approach.
- ```content-post-source-v2.php```. Contains the necessary code to ouput the repeatable fields meta box approach.
- ```single-post.php```

#### Notice

I build the post type sample template files on the Genesis Framework. The plugin itself will run independent of the theme being used, but the single- sample template files contain functions and hooks specific to the Genesis Framework. Each is using the get_template_part( 'content', 'post-source' ); function to include the ```pb-cmb-source-fields.php``` file.

The ```pb-cmb-source-fields.php``` contains all the functions to output the source custom metadata and all its basic markup structure, and can be used within any theme. You will simply need to modify your loop to include it.

## Installation

1. Manually upload the ```cmb2-source-fields``` plugin to your ```/wp-content/plugins/``` directory.
   - Alternatively upload the cpt-testimonials.zip file through the ```Plugins``` menu in your wordpress admin by clicking ```Add New``` > ```Upload Plugin```.
2. Activate the plugin through the ```Plugins``` menu in WordPress.
3. Download CMB2 from the wordpress plugin directory, https://wordpress.org/plugins/cmb2/
4. Manually upload the ```cmb2``` plugin to your ```/wp-content/plugins/``` directory.
5. Activate the CMB2 plugin through the ```Plugins``` menu in WordPress.

## Required Plugins
CMB2 can be built within the plugin itself, but for the sake of keeping the template plugin easy to update and expand upon, i have chosen not to included it. Otherwsie you will need to modify the plugin and include CMB2 on your own.

To use the plugin as is, you will need to install the following plugin:

- [CMB2](https://github.com/WebDevStudios/CMB2)

## To Do

- Need to setup function to reuse the appropriate template file for both single and archive pages.
- Review the Schema structure.

## Change Log
Please see the the ```readme.txt``` file included in the root of the plugin’s directory for a complete change log.

## License
License: GPLv2 or later  
License URI: [http://www.gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)

> This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
>
> This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

A copy of the license is included in the root of the plugin’s directory. The file is named ```LICENSE```.
