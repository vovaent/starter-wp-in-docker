<?php
/**
 * Plugin Name: Benefits gallery
 * Version: 1.0
 * Author: Vovaent
 *
 * @package my-awesome-plugin
 */

/**
 * Output "Hello"
 */
function hello() {
	echo 'hello';
}
add_action( 'wp_footer', 'hello' );
