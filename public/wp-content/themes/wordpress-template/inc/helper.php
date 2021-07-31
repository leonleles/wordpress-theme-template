<?php

## Customize functions global

# Filter name of register panels
function get_filter_customize_panels() {
    return 'wp_customize_panels';
}

# Filter name of register sections
function get_filter_customize_sections() {
    return 'wp_customize_sections';
}

# Filter name of register sections
function get_filter_customize_settings() {
    return 'wp_general_settings';
}

# Directory singular single
function bp_get_single_directory() {
    return 'singular-pages/post/';
}

# Directory singular page
function bp_get_page_directory() {
    return 'singular-pages/page/';
}

function get_page_by_template($template = '') {
    $args = array(
        'meta_key' => '_wp_page_template',
        'meta_value' => $template
    );
    return get_pages($args);
}

function filter_page_template_hierarchies($templates = array()) {
    $templates = array_map(function ($page) {
        return bp_get_page_directory() . $page;
    }, $templates);

    return $templates;
}

function filter_single_template_hierarchies($templates = array()) {
    $templates = array_map(function ($single) {
        return bp_get_single_directory() . $single;
    }, $templates);

    return $templates;
}

function bp_render_default_logo($html) {
    $custom_logo_id = get_theme_mod('custom_logo');

    if (!$custom_logo_id) {
        $default_attr = array(
            'src' => bp_get_images_directory() . 'fasa-logo.png',
            'class' => "custom-logo",
            'alt' => get_bloginfo('name'),
        );

        $attr = array_map('esc_attr', $default_attr);
        $html = rtrim("<a href='/'><img ");

        foreach ($attr as $name => $value) {
            $html .= " $name=" . '"' . $value . '"';
        }

        $html .= ' /></a>';
    }
    return $html;
}

function bp_menu_filter_limit($items, $args) {
    if ($args->theme_location == 'primary_menu') {
        bp_menu_filter_limit_items($items, 5);
    } else if ($args->theme_location == 'footer_menu') {
        bp_menu_filter_limit_items($items, 4);
    } else if ($args->theme_location == 'solutions_menu') {
        bp_menu_filter_limit_items($items, 3);
    }
    return $items;
}

function bp_register_page_templates($page_templates) {
    $templates = [
        'page-fale-conosco.php' => 'Fale conosco',
        'page-items.php' => 'Página de ítens'
    ];

    return array_merge($page_templates, $templates);
}

function bp_register_dynamic_location_menu() {
    $pages = get_page_by_template('page-items.php');

    if (!empty($pages)) {
        foreach ($pages as $page) {
            $location_name = "menu_page_$page->ID";

            register_nav_menus(array(
                $location_name => __($page->post_title)
            ));

            if (function_exists('acf_add_local_field_group')) {
                acf_add_local_field_group(array(
                    'key' => 'group_609c4f7c46b4c' . $page->ID,
                    'title' => 'Adicionais',
                    'fields' => array(
                        array(
                            'key' => 'field_609c4f9af6a9f',
                            'label' => 'Icone',
                            'name' => 'icone',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'return_format' => 'array',
                            'preview_size' => 'thumbnail',
                            'library' => 'all',
                            'min_width' => '',
                            'min_height' => '',
                            'min_size' => '',
                            'max_width' => '',
                            'max_height' => '',
                            'max_size' => '',
                            'mime_types' => 'svg',
                        ),
                        array(
                            'key' => 'field_609c4fbf06280',
                            'label' => 'Descrição',
                            'name' => 'descricao',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                    ),
                    'location' => array(
                        array(
                            array(
                                'param' => 'nav_menu_item',
                                'operator' => '==',
                                'value' => "location/$location_name",
                            ),
                        ),
                    ),
                    'menu_order' => 0,
                    'position' => 'normal',
                    'style' => 'default',
                    'label_placement' => 'top',
                    'instruction_placement' => 'label',
                    'hide_on_screen' => '',
                    'active' => true,
                    'description' => '',
                ));
            }
        }
    }
}

function bp_custom_style_colors() {
    $colors_scheme = [];

    $theme_color_primary = get_theme_mod('theme_color_primary');
    $theme_color_secondary = get_theme_mod('theme_color_secondary');
    $theme_color_white = get_theme_mod('theme_color_white');
    $theme_color_light = get_theme_mod('theme_color_light');
    $theme_color_white_gray = get_theme_mod('theme_color_white_gray');

    $theme_bg_primary = get_theme_mod('theme_bg_primary');
    $theme_bg_primary_dark = get_theme_mod('theme_bg_primary_dark');
    $theme_bg_white = get_theme_mod('theme_bg_white', '#ffffff');
    $theme_bg_white_gray = get_theme_mod('theme_bg_white_gray');
    $theme_bg_white_gray_2 = get_theme_mod('theme_bg_white_gray_2');

    $theme_color_gradient_1 = get_theme_mod('theme_color_gradient_1');
    $theme_color_gradient_2 = get_theme_mod('theme_color_gradient_2');


    if ($theme_color_primary) $colors_scheme[] = "--color-primary: $theme_color_primary !important";
    if ($theme_color_secondary) $colors_scheme[] = "--color-secondary: $theme_color_secondary !important";
    if ($theme_color_white) $colors_scheme[] = "--color-white: $theme_color_white !important";
    if ($theme_color_light) $colors_scheme[] = "--color-light: $theme_color_light !important";
    if ($theme_color_white_gray) $colors_scheme[] = "--color-white-gray: $theme_color_white_gray !important";

    if ($theme_bg_primary) $colors_scheme[] = "--background-primary: $theme_bg_primary !important";
    if ($theme_bg_primary_dark) $colors_scheme[] = "--background-primary-dark: $theme_bg_primary_dark !important";
    if ($theme_bg_white) $colors_scheme[] = "--background-white: $theme_bg_white !important";
    if ($theme_bg_white_gray) $colors_scheme[] = "--background-white-gray: $theme_bg_white_gray !important";
    if ($theme_bg_white_gray_2) $colors_scheme[] = "--background-white-gray-2: $theme_bg_white_gray_2 !important";

    if ($theme_color_gradient_1) $colors_scheme[] = "--gradient-1: $theme_color_gradient_1 !important";
    if ($theme_color_gradient_2) $colors_scheme[] = "--gradient-2: $theme_color_gradient_2 !important";

    $style = implode(';', $colors_scheme);

    if (!empty($style)) {
        echo "<style>
                :root {
                    $style
                }
              </style>";
    }

}