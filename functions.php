<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'swipercss', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css' );
}

function add_theme_scripts() {
	wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/script.js', array( 'jquery' ), 1.1, true );
    wp_enqueue_script( 'skrollr', 'https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js' );
    wp_enqueue_script( 'swiperjs', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js' );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts', 999 );

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}