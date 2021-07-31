<?php

function title_tagline_settings_vars($settings) {

    $general = array(
        'custom_logo_footer' => array(
            'label' => __('Logo rodapé'),
            'section' => 'title_tagline',
            'type' => 'image',
        )
    );

    return array_merge($settings, $general);
}

add_filter(get_filter_customize_settings(), 'title_tagline_settings_vars');