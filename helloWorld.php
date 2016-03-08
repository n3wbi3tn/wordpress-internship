<?php
/*
Plugin Name: Hello World <br/>
Plugin URI: http://www.njh.com
Description: this plugin enable to show hello world in the index page.
Author: Mansouri Najeh
Author URI: http://www.njh.com
Version: 1.0
*/
// This just echoes hello world
function hello_wd() {
	$h = "hello world";
	echo "<p id='hw'>$h</p>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'hello_wd' );

?>