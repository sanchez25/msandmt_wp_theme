<?php

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'comment_text', 'wpautop' );

add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}

function replace_content($content)
{
	$content = str_replace('&nbsp;', ' ', $content);
	return $content;
}

add_filter('the_content','replace_content');
add_filter('the_excerpt', 'replace_content');

add_action( 'wp_enqueue_scripts', 'my_scripts' );
function my_scripts(){
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'more', get_template_directory_uri() . '/js/main.js', array(), true, true );
	wp_enqueue_script( 'mask', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', array(), '1.4.1', true );
}

add_action( 'wp_enqueue_scripts', 'style_theme' );
function style_theme() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

