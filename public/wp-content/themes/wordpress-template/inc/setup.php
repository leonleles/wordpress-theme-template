<?php

add_filter('page_template_hierarchy', 'filter_page_template_hierarchies');

add_filter('single_template_hierarchy', 'filter_single_template_hierarchies');

add_filter('get_custom_logo', 'bp_render_default_logo');

add_filter('wp_nav_menu_objects', 'bp_menu_filter_limit', 10, 2);

add_filter('theme_page_templates', 'bp_register_page_templates');

add_action('init', 'bp_register_dynamic_location_menu');

add_action( 'wp_enqueue_scripts', 'bp_custom_style_colors', 15);