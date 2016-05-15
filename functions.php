<?php
// This will add the child theme style.css file
add_action( 'wp_enqueue_scripts', 'child_theme_actions' );

function child_theme_actions() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}


// ***
// This will add the custom js file. ***You need to add the file to your child theme for it to work. /js/custom.js
// add_action( 'wp_enqueue_scripts', 'add_custom_js' );

// // The function will add a custom.js to your child theme directory
// function add_custom_js() {

// 	//This conditional statement will add the custom js only to pages other than the admin pages. 
// 	if ( is_admin() ) {
// 	  return;
// 	} else {
// 	  	wp_enqueue_script( 'theme_js', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0', true );
// 	}

// }

?>