<?php

require_once __DIR__ . '/widgets/banners.php';
require_once __DIR__ . '/widgets/facebook.php';

/**
 * Load all the widgets
 */
function wp_handler_register_widget() {

    $widgets = array(
        'NW_Widget_Banners',
        'NW_Widget_Facebook',
    );

    foreach ($widgets as $key => $value) {
        register_widget($value);
    }
}

add_action('widgets_init', 'wp_handler_register_widget');
