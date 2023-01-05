<?php


function wp_handler_sidebar_init() {

//    register_sidebar(array(
//        'name' => 'Conteudo green',
//        'id' => 'conteudo-green',
//        'before_widget' => '<div id="%1$s" class="widget %2$s">',
//        'after_widget' => '</div>',
//        'before_title' => '<h2 class="widget-title">',
//        'after_title' => '</h2>',
//    ));
}

add_action('widgets_init', 'wp_handler_sidebar_init');
