<?php

namespace NW_Panels;

class Panels {

    public function __construct() {
        add_filter('nucleoweb_customize_panels', [$this, 'panels_vars']);
    }

    public function panels_vars($panels) {

        $panels = array(
            'panel_layout' => array(
                'title' => 'Layout',
                'priority' => 10
            )
        );

        return $panels;
    }
}
