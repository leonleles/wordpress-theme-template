<?php

function home_page_sections_vars($sections) {

    $nucleoweb_sections = array(
//        'presentation_home_page' => array(
//            'title' => __('Apresentação'),
//            'panel' => 'home_page'
//        ),
//        'national_performance' => array(
//            'title' => __('Atuação Nacional'),
//            'panel' => 'home_page'
//        ),
//        'charge_judicial' => array(
//            'title' => __('Cobrança Judicial'),
//            'panel' => 'home_page'
//        ),
//        'contact_us' => array(
//            'title' => __('Fale conosco'),
//            'panel' => 'home_page'
//        )
    );

    return array_merge($nucleoweb_sections, $sections);
}

add_filter(get_filter_customize_sections(), 'home_page_sections_vars');
