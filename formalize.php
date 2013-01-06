<?php
/*
Plugin Name: Formalize for WordPress
Plugin URI: http://www.jacopotarantino.com/projects/formalize-plugin
Description: Teach your forms some manners. Formalize by Nathan Smith makes all your forms and fields look almost exactly the same across browsers and OSs.
Version: 1.0
Author: Jacopo Tarantino
Author URI: http://www.jacopotarantino.com
License: GPL2
*/

$f_dir = plugins_url() . '/formalize-plugin/';

wp_enqueue_script('formalize', $f_dir . 'js/jquery.formalize.min.js', array('jquery'));
wp_enqueue_style('formalize_styles', $f_dir . 'css/formlize.css');
?>
