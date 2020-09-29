<?php

use NW_Panels\Panels;
use NW_Settings\Layout;
use NW_Sections\Sections;

require __DIR__ . '/customizer/NucleoWeb_Customizer.php';
require_once __DIR__ . '/widgets/banners.php';

/**
 * Load configs customize
 */

new Panels();
new Sections();
new Layout();

/**
 * Load all the widgets
 */
function nucleoweb_register_widget() {

    $widgets = array(
        'NW_Widget_Banners',
    );

    foreach ($widgets as $key => $value) {
        register_widget($value);
    }
}

add_action('widgets_init', 'nucleoweb_register_widget');
