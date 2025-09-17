<?php

function mytheme_enqueue_styles() {
    wp_enqueue_style('parent_theme', get_template_directory_uri().'/style.css');
    wp_enqueue_style('child_theme', get_stylesheet_directory_uri().'/style.css');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

function typewriter_script() {
	//if (is_page('Homepage')) {
		 wp_enqueue_script('typewriter', get_stylesheet_directory_uri() . '/js/typewriter.js', array(), null, false );
	//}
}
add_action( 'wp_enqueue_scripts', 'typewriter_script' );