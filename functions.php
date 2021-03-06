<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
    wp_enqueue_style('customizations',get_stylesheet_directory_uri().'/styles/mercadeostyle.css',array(''),'0.8','all');
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
    $lang = get_stylesheet_directory() . '/languages';
    load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );
add_filter('upload_mimes', 'my_myme_types');

function my_myme_types( $mime_types ) {

    $mime_types['ttf'] = 'application/x-font-ttf';
    $mime_types['eot'] = 'application/vnd.ms-fontobject';
    return $mime_types;
}
// function theme_enqueue_styles() {
//     wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );

    // wp_enqueue_style('daterangepickercss','https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.16.1/daterangepicker.min.css',array('child-style'),'0.16.1','all');
    // wp_enqueue_style('customizations',get_stylesheet_directory_uri().'/styles/mercadeostyle.css',array('daterangepickercss'),'0.8','all');
    // wp_enqueue_script('momentjs','https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js',array('jquery'));
    // wp_enqueue_script('momentjses','https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/locale/es-us.js',array('momentjs'));
    // wp_enqueue_script('daterangepicker',
    	// get_stylesheet_directory_uri().'/js/daterangepicker.js',
    	// 'https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.16.1/jquery.daterangepicker.min.js',
    	// array('momentjses'));
	// wp_enqueue_script('customjs',get_stylesheet_directory_uri().'/js/myjs.js',array('daterangepicker'));


// }
// add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

// function avada_lang_setup() {
// 	$lang = get_stylesheet_directory() . '/languages';
// 	load_child_theme_textdomain( 'Avada', $lang );
// }
// add_action( 'after_setup_theme', 'avada_lang_setup' );
// require 'optionspage.php';
// require 'inc/paquetes.php';




