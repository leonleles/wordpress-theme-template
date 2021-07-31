<?php

function sections_vars($sections) {

    $nucleoweb_sections = array(
        'general_info' => array(
            'title' => __('Geral'),
            'panel' => 'general_infomation'
        ),
        'social_networks' => array(
            'title' => __('Redes sociais'),
            'panel' => 'general_infomation'
        ),
    );

    return array_merge($nucleoweb_sections, $sections);
}

add_filter(get_filter_customize_sections(), 'sections_vars');
