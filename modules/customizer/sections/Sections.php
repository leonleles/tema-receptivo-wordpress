<?php

namespace NW_Sections;

class Sections {

    public function __construct() {
        add_filter('nucleoweb_customize_sections', [$this, 'sections_vars']);
    }

    public function sections_vars( $sections ){

        $travelbiz_sections = array(
            # Section for Font panel
            'section_banners' => array(
                'title' => 'Banners',
                'panel' => 'panel_layout'
            ),
        );

        return array_merge( $travelbiz_sections, $sections );
    }
}
