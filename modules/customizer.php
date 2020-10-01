<?php

use NW_Customizer\class_customizer_register;

use NW_Panels\panels;
use NW_Settings\layout;
use NW_Sections\sections;

# Customizer objects
new panels();
new sections();
new layout();

# Register custom panels, sections and settings
add_action('customize_register', array(class_customizer_register::get_instance(), 'register'));
