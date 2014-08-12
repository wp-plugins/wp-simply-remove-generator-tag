<?php
/*
Plugin Name: WP-Simply remove generator tag
Plugin URI: 
Description: This plugin removes the WordPress version from your header
Author: Thimo Grauerholz
Author URI: http://lovetee.de
Tags: meta, generator, security, remove generator, wordpress version, webmaster
Version: 1.0
*/

add_filter( 'the_generator', '__return_null' );
?>