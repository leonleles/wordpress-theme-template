<?php

add_action('after_setup_theme', function () {

    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('post-thumbnails');

    add_theme_support('html5', array(
        'comment-list',
        'gallery',
        'caption',
    ));

    add_theme_support('custom-header', array(
        'width' => 500,
        'height' => 500,
        'flex-height' => true,
    ));

    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
    ));

    add_theme_support('customize-selective-refresh-widgets');

    show_admin_bar(false);

    add_theme_support('custom-logo', array(
        'width' => 178,
        'height' => 79,
        'flex-height' => true,
        'flex-width' => true,
    ));

    add_theme_support( 'menus' );

    register_nav_menus( array(
        'primary_menu' => __( 'Menu Principal' ),
        'footer_menu'  => __( 'Menu de Rodapé' ),
        'solutions_menu'  => __( 'Soluções' ),
        'segmentos_menu'  => __( 'Segmentos' ),
        'main_actions_menu'  => __( 'Principais Ações' )
    ) );

});
