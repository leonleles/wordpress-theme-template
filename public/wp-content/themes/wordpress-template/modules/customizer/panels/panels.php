<?php

function panels_vars($panels) {

    $panels = array(
        'general_infomation' => array(
            'title' => __('Informações gerais'),
            'priority' => 10
        ),
        'home_page' => array(
            'title' => __('Página inicial'),
            'priority' => 10
        )
    );

    return $panels;
}

add_filter(get_filter_customize_panels(), 'panels_vars');
