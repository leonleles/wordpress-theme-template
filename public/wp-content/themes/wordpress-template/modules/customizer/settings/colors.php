<?php

function colors_settings_vars($settings) {

    $general = array(
//        'theme_color_primary' => array(
//            'label' => __('Cor de texto primária'),
//            'capability' => 'edit_theme_options',
//            'default' => '#001D2B',
//            'section' => 'colors',
//            'type' => 'color',
//        ),
    );

    return array_merge($settings, $general);
}

add_filter(get_filter_customize_settings(), 'colors_settings_vars');