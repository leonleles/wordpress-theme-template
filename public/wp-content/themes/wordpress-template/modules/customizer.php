<?php

require_once __DIR__ . '/customizer/class_customizer_register.php';

require_once __DIR__ . '/customizer/panels/panels.php';
require_once __DIR__ . '/customizer/sections/sections.php';
require_once __DIR__ . '/customizer/sections/home_page.php';
require_once __DIR__ . '/customizer/settings/layout.php';
require_once __DIR__ . '/customizer/settings/title_tagline.php';
require_once __DIR__ . '/customizer/settings/general_information.php';
require_once __DIR__ . '/customizer/settings/socials_network.php';
require_once __DIR__ . '/customizer/settings/home_page.php';
require_once __DIR__ . '/customizer/settings/colors.php';

# Register custom panels, sections and settings
add_action('customize_register', array(class_customizer_register::get_instance(), 'register'));
