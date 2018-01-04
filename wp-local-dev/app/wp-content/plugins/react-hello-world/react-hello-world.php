<?php

/*
Plugin Name: React-Hello-World
Description: Plugin Created from basic create-react-app cmd
Version: 0.0.1
*/

/*

// add the CSS file to the header
wp_enqueue_style( 'prefix-style', plugins_url('css\main.9a0fe4f1.css', __FILE__) );
 
// add the JS file to the footer - true as the last parameter
wp_enqueue_script( 'plugin-scripts', plugins_url('js/main.350b4a43cde67bd603fc.js', __FILE__),array(),  '0.0.1', true );
*/
function wp_react_hello_world() {
  echo '<div id="root"></div>';
}
add_shortcode('react-hello-world','wp_react_hello_world');

function include_react_files() {
	// add the CSS file to the header
	wp_enqueue_style( 'prefix-style', plugins_url('build/static/css/main.c17080f1.css', __FILE__) );
	 
	// add the JS file to the footer - true as the last parameter
	wp_enqueue_script( 'plugin-scripts', plugins_url('build/static/js/main.80860eb5.js', __FILE__),array(),  '0.0.1', true );
}

add_action( 'wp_enqueue_scripts', 'include_react_files' );


?>