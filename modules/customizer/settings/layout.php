<?php

namespace NW_Settings;

class Layout {

    public function __construct() {
        add_filter('nucleoweb_general_settings', [$this, 'settings_vars']);
    }

    public function settings_vars($settings) {

        $general = array(
            'widget_banners' => array(
                'label' => 'Teste',
                'section' => 'section_banners',
                'type' => 'select',
                'choices' => []
            ),
        );

        return array_merge($settings, $general);
    }
}
