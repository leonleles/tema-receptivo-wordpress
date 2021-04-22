<?php

require_once __DIR__ . '/customizer/class_customizer_register.php';

require_once __DIR__ . '/customizer/panels/panels.php';
require_once __DIR__ . '/customizer/sections/sections.php';
require_once __DIR__ . '/customizer/settings/layout.php';

# Register custom panels, sections and settings
add_action('customize_register', array(class_customizer_register::get_instance(), 'register'));
