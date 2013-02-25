=== Plugin Name ===
Contributors: stacyvlasits,leroyjames 
Donate link: http://example.com/
Tags: css, simple, custom, customize
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows user to customize the CSS of their site, thru the admin dashboard, without affecting the parent theme's CSS.

== Description ==

A simple CSS editor that allows the user to manipulate their own sites' CSS without making actual changes to the theme's own CSS. Compatible with Genesis as well. Genesis users will find the 'Simple Custom CSS' menu option under Genesis settings. Non-Genesis users will find it simply under 'Settings'.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload the 'simple-custom-css.zip' file to 'wp-content/plugins'
2. Unzip the file
3. Activate the plugin through the 'Plugins' menu in WordPress
4. 'Simple Custom CSS' option will now appear under 'Settings', or for Genesis users under the Genesis Settings.
5. Make your edits to your CSS in the 'Simple Custom CSS' menu.

== Frequently Asked Questions ==

- Why am I not seeing changes to my CSS?

Simple Custom CSS really works best when you're referencing the exact div and class you want to edit. For instance, if you've got an h1 and it's id is also 'dog' you'll want to add:

h1 #dog {
	color: red;
}

Instead of this

#dog {
	color: red;
}


= What about foo bar? =


== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets 
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png` 
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 1.0 =


= 0.5 =


== Upgrade Notice ==


== Credits ==

Suloni Robertson
Stacy Vlasits
The University of Texas in Austin STA program


`<?php code(); // goes in backticks ?>`