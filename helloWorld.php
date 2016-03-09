<?php
/*
Plugin Name: Hello World <br/>
Plugin URI: http://www.njh.com
Description: this plugin enable to show hello world in the index page.
Author: Mansouri Najeh
Author URI: http://www.njh.com
Version: 1.0
*/
add_action('admin_menu', 'myfirstplugin_admin_actions');
function myfirstplugin_admin_actions()
{
add_options_page('MyFirstPlugin', 'MyFirstPlugin', 'manage_options',__FILE__, 'hello_wd');
} 
// This just echoes hello world
function hello_wd() 
{
	echo "<h1>hello world</h1>";
}

?>