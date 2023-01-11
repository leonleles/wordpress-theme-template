<?php

require_once __DIR__ . '/contact_us.php';

add_action('rest_api_init', function () {
    if (class_exists('ContactUs')) {
        $contactUs = new ContactUs();
        $contactUs->register_routes();
    }
});