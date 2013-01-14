<?php
/*
Plugin Name: Formalize for WordPress
Plugin URI: http://www.jacopotarantino.com/projects/formalize-plugin
Description: Teach your forms some manners. Formalize by Nathan Smith makes all your forms and fields look almost exactly the same across browsers and OSs.
Version: 2
Author: Jacopo Tarantino
Author URI: http://www.jacopotarantino.com
License: GPLv2
*/

$f_dir = plugins_url() . '/Formalize%20WordPress%20Plugin/';

if ( !is_admin() ) {
	wp_enqueue_script('formalize', $f_dir . 'jquery.formalize.min.js', array('jquery'));
	wp_enqueue_style('formalize_styles', $f_dir . 'formalize.css');
}
?>
