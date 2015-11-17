# Source Fields Meta Box - Using CMB2

Template for a basic source fields plugin with custom meta fields using the [CMB2 tool kit](https://github.com/WebDevStudios/cmb2) for easily adding source links to posts.

This has only just been quickly put together so I could stop thinking about it and have something to trun to when I next have more time. It contains only one repeatable field for a url, but could include additional options for heading titles and footnoting.

It will also need a little custom css on the admin end, as cmb2's retable group fields are a little bulky out of the box, especialy for a single line meta box.

## Solving a problem
This has been something i wanted for my own personal blog ever since moving it to wordpress. My blog is mainly meant for me, as a personal repository of creatuve inspiration. So most of the content, mianly images and video, come from other sources. I have been manualy entering the links for those sources at the bottom of posts but this could be done more easily and consistently with repeatable custom meta fields.

## Sample CSS

Just some quick sample css for styling cmb2 repeatable group fields.

```css

.cmb-row.cmb-repeat-group-field.table-layout {
    width: 60%;
    display: inline-block;
    float: left;
}
.cmb-row.cmb-remove-field-row {
    width: 40%;
    display: inline-block;
}

```

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
