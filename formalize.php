<?php
/*
Plugin Name: Formalize for WordPress
Plugin URI: http://www.jacopotarantino.com/projects/formalize-plugin
Description: Teach your forms some manners. Formalize by Nathan Smith makes all your forms and fields look almost exactly the same across browsers and OSs. WordPress plugin adapted and maintained by Jacopo Tarantino.
Version: 4
Author: Jacopo Tarantino
Author URI: http://www.jacopotarantino.com
License: GPLv2
*/

if ( !is_admin() ) {
  function formalize_enqueue() {
    wp_enqueue_script('formalize', plugins_url('/js/jquery.formalize.min.js', __FILE__), array('jquery'), '1.2', true );
    wp_enqueue_style('formalize_styles', plugins_url('/css/formalize.css', __FILE__) );
  }
  add_action('wp_enqueue_scripts', 'formalize_enqueue');
}

?>
