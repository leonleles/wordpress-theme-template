<?php
function home_page_settings_vars($settings) {

    $general = array(
        'presentation_title' => array(
            'label' => __('Título:'),
            'section' => 'presentation_home_page',
            'type' => 'url'
        ),
        'presentation_paragraph' => array(
            'label' => __('Subtítulo:'),
            'section' => 'presentation_home_page',
            'type' => 'url'
        ),
        'presentation_button' => array(
            'label' => __('Texto do botão:'),
            'section' => 'presentation_home_page',
            'type' => 'url'
        ),
        'presentation_link' => array(
            'label' => __('Link do botão:'),
            'section' => 'presentation_home_page',
            'type' => 'url'
        ),
        'presentation_image' => array(
            'label' => __('Imagem:'),
            'section' => 'presentation_home_page',
            'type' => 'image'
        ),

        'national_performance_title' => array(
            'label' => __('Título:'),
            'section' => 'national_performance',
            'type' => 'text'
        ),
        'national_performance_text' => array(
            'label' => __('Texto:'),
            'section' => 'national_performance',
            'type' => 'text'
        ),
        'national_performance_image' => array(
            'label' => __('Image:'),
            'section' => 'national_performance',
            'type' => 'image'
        ),

        'charge_judicial_title' => array(
            'label' => __('Título:'),
            'section' => 'charge_judicial',
            'type' => 'text'
        ),
        'charge_judicial_text' => array(
            'label' => __('Texto:'),
            'section' => 'charge_judicial',
            'type' => 'text'
        ),
        'charge_judicial_image' => array(
            'label' => __('Imagem:'),
            'section' => 'charge_judicial',
            'type' => 'image'
        ),

        'contact_us_title' => array(
            'label' => __('Título:'),
            'section' => 'contact_us',
            'type' => 'text'
        ),
        'contact_us_text' => array(
            'label' => __('Texto:'),
            'section' => 'contact_us',
            'type' => 'text'
        )
    );

    return array_merge($settings, $general);
}

add_filter(get_filter_customize_settings(), 'home_page_settings_vars');