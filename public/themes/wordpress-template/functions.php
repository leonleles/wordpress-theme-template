<?php

if (is_readable(__DIR__ . '/vendor/autoload.php'))
    require_once __DIR__ . '/vendor/autoload.php';

## Load registers
require_once __DIR__ . '/inc/register_loader.php';
require_once __DIR__ . '/modules/register_loader.php';


function handler_enqueue_styles() {
    wp_enqueue_style('styles-css', get_stylesheet_directory_uri() . '/bundle/index.css');
}
add_action('wp_enqueue_scripts', 'handler_wp_add_custom_css');


function handler_enqueue_scripts() {
    wp_enqueue_script( 'scripts-js', get_stylesheet_directory_uri() . '/bundle/index.js', false );
}
add_action( 'wp_enqueue_scripts', 'handler_enqueue_scripts' );