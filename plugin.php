<?php
/*
Plugin Name: Simple Custom CSS
Description: Allows user to customize the CSS of their site, thru the admin dashboard, without affecting the parent theme's CSS.
Author: Leroy Rosales LAITS
Author URI: wikis.la.utexas.edu/sta/blogs/ljames

Version: 1.0

Many thanks go out out Stacy Vlasits and Suloni Robertson for making this possible.

Table of Contents

** Main Hooks
** Menu
** Register Settings
** Menu Text

*/

/** Main Hooks
---------------------------------------------*/

if ( is_admin() ) {
 	$parent_theme_directory = end(explode("/", get_template_directory_uri())); 
	if ( 'genesis' == $parent_theme_directory ) {
		add_action( 'admin_menu', 'custom_css_genesis_menu');
	} else {
		
		add_action( 'admin_menu', 'custom_css_menu');
	}
	add_action( 'admin_init', 'custom_css_register_settings');

} else {
	add_action( 'wp_head', 'custom_css_start_up' );
}


/** Initializes Menu
---------------------------------------------*/
function custom_css_genesis_menu() {
	add_submenu_page(
		'genesis',
		'Simple Custom CSS',
		'Simple Custom CSS',
		'manage_options',
		'custom_css',
		'custom_css_menu_callback' );
}

function custom_css_menu() {
	add_submenu_page(
		'options-general.php',
		'Simple Custom CSS',
		'Simple Custom CSS',
		'manage_options',
		'custom_css',
		'custom_css_menu_callback' );
}

function custom_css_menu_callback() {
	?>
	<div class="wrap">
	<h2>Customize CSS</h2>
	<form action="options.php" method="post">
	<?php settings_fields('custom_css_options'); ?>
	<?php do_settings_sections('custom_css'); ?>
	<input name="Submit" type="submit" value="Save Changes" />
	</form></div>
	<?php
	}

/** Registers the settings
---------------------------------------------*/
function custom_css_register_settings() {
	register_setting(
		'custom_css_options',
		'custom_css_options',
		'custom_css_options_validate'
		);
	add_settings_section(
		'custom_css_settings_section',
		'Custom CSS Settings',
		'custom_css_section_text',
		'custom_css'
	);
	add_settings_field(
		'custom_css_options_the_css', 
		'<h3>Plugin your code here:</h3>', 
		'custom_css_the_css_input', 
		'custom_css', 
		'custom_css_settings_section'
	);
}

function custom_css_the_css_input() {
  $options = get_option('custom_css_options');
   echo "<textarea id='the_css' name='custom_css_options[the_css]' rows='30' cols='100' type='textarea' value='{$options['the_css']}' >{$options['the_css']}</textarea>";
}

function custom_css_options_validate($input) {
	return $input;
}

/** Text that shows up on the menu page
---------------------------------------------*/
function custom_css_section_text() {
  echo  '<h1>Howdy</h1>
         <p>With this plugin you can manipulate the CSS of your site without affecting your parent theme. Just match the class or ID with your site&apos;s CSS in the box below and always be sure to <em>save your changes</em>!</p>
        ';
}


function custom_css_start_up() {
	$options = get_option('custom_css_options');
	$my_css = $options['the_css'];
	echo '<style type="text/css">' . "\n" . $my_css . '</style>';
}
?>