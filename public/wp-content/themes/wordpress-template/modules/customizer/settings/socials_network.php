<?php
function socials_network_settings_vars($settings) {

    $general = array(
        'link_facebook' => array(
            'label' => __('Facebook:'),
            'section' => 'social_networks',
            'type' => 'url',
        ),
        'link_twitter' => array(
            'label' => __('Twitter:'),
            'section' => 'social_networks',
            'type' => 'url',
        ),
        'link_instagram' => array(
            'label' => __('Instagram:'),
            'section' => 'social_networks',
            'type' => 'url',
        ),
        'link_linkedin' => array(
            'label' => __('Linkedin:'),
            'section' => 'social_networks',
            'type' => 'url',
        )
    );

    return array_merge($settings, $general);
}

add_filter(get_filter_customize_settings(), 'socials_network_settings_vars');