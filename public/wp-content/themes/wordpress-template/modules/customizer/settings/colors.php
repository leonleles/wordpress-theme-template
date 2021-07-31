<?php

function colors_settings_vars($settings) {

    $general = array(
        'theme_color_primary' => array(
            'label' => __('Cor de texto primária'),
            'capability' => 'edit_theme_options',
            'default' => '#001D2B',
            'section' => 'colors',
            'type' => 'color',
        ),
        'theme_color_secondary' => array(
            'label' => __('Cor de texto secundária'),
            'capability' => 'edit_theme_options',
            'section' => 'colors',
            'type' => 'color',
        ),
        'theme_color_white' => array(
            'label' => __('Cor de texto branca'),
            'capability' => 'edit_theme_options',
            'section' => 'colors',
            'type' => 'color',
        ),
        'theme_color_light' => array(
            'label' => __('Cor de texto leve'),
            'capability' => 'edit_theme_options',
            'section' => 'colors',
            'type' => 'color',
        ),
        'theme_color_white_gray' => array(
            'label' => __('Cor de texto cinza'),
            'capability' => 'edit_theme_options',
            'section' => 'colors',
            'type' => 'color',
        ),

        'theme_bg_primary' => array(
            'label' => __('Cor de fundo primária'),
            'capability' => 'edit_theme_options',
            'section' => 'colors',
            'type' => 'color',
        ),
        'theme_bg_primary_dark' => array(
            'label' => __('Cor de fundo primária dark'),
            'capability' => 'edit_theme_options',
            'section' => 'colors',
            'type' => 'color',
        ),
        'theme_bg_white' => array(
            'label' => __('Cor de fundo branco'),
            'capability' => 'edit_theme_options',
            'section' => 'colors',
            'type' => 'color',
        ),
        'theme_bg_white_gray' => array(
            'label' => __('Cor de fundo cinza 1'),
            'capability' => 'edit_theme_options',
            'section' => 'colors',
            'type' => 'color',
        ),
        'theme_bg_white_gray_2' => array(
            'label' => __('Cor de fundo cinza 2'),
            'capability' => 'edit_theme_options',
            'section' => 'colors',
            'type' => 'color',
        ),

        'theme_color_gradient_1' => array(
            'label' => __('Cor gradiente header 1'),
            'capability' => 'edit_theme_options',
            'section' => 'colors',
            'type' => 'color',
        ),
        'theme_color_gradient_2' => array(
            'label' => __('Cor gradiente header 2'),
            'capability' => 'edit_theme_options',
            'section' => 'colors',
            'type' => 'color',
        ),
    );

    return array_merge($settings, $general);
}

add_filter(get_filter_customize_settings(), 'colors_settings_vars');