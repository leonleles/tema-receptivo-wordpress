<?php

class panels {

    public function __construct() {
        add_filter(get_filter_customize_panels(), [$this, 'panels_vars']);
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
