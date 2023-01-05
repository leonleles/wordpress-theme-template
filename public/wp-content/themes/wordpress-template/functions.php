<?php


define( 'WP_DEBUG', true );
@ini_set( 'display_errors', 1);

if (is_readable(__DIR__ . '/vendor/autoload.php'))
    require_once __DIR__ . '/vendor/autoload.php';

## Load registers
require_once __DIR__ . '/inc/register_loader.php';
require_once __DIR__ . '/modules/register_loader.php';
require_once __DIR__ . '/blocks/register_loader.php';

function handler_enqueue_styles() {
    wp_enqueue_style('theme-styles-css', get_stylesheet_directory_uri() . '/build/theme.css');
    wp_enqueue_style('public-styles-css', get_stylesheet_directory_uri() . '/build/public.css');
    wp_enqueue_style('font-family', 'https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap');
}

add_action('wp_enqueue_scripts', 'handler_enqueue_styles');

function handler_enqueue_scripts() {
    wp_enqueue_script('scripts-js', get_stylesheet_directory_uri() . '/build/theme.js', false);
    wp_enqueue_script('public-scripts-js', get_stylesheet_directory_uri() . '/build/public.js', ['wp-element']);

    wp_localize_script('scripts-js', 'wp_theme_template', [
        'rest_url' => get_rest_url(),
    ]);
}

add_action('wp_enqueue_scripts', 'handler_enqueue_scripts');