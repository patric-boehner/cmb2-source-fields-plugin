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
