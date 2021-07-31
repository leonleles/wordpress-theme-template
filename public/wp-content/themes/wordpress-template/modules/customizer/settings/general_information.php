<?php

function general_information_settings_vars($settings) {

    $general = array(
        'link_fasaweb' => array(
            'label' => __('Link fasaweb:'),
            'section' => 'general_info',
            'type' => 'url',
        ),
        'mail_contact_us' => array(
            'label' => __('E-mail fale conosco:'),
            'description' => 'E-mail que irá receber mensagem do formulário de contato',
            'section' => 'general_info',
            'type' => 'email',
        ),
        'footer_address' => array(
            'label' => __('Endereço:'),
            'section' => 'general_info',
            'type' => 'textarea',
        ),
        'footer_mail' => array(
            'label' => __('E-mail:'),
            'section' => 'general_info',
            'type' => 'textarea',
        ),
        'footer_phone' => array(
            'label' => __('Telefone:'),
            'section' => 'general_info',
            'type' => 'textarea',
        )
    );

    return array_merge($settings, $general);
}

add_filter(get_filter_customize_settings(), 'general_information_settings_vars');