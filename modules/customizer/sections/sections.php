<?php

namespace nw_sections;

class sections {

    public function __construct() {
        add_filter(get_filter_customize_sections(), [$this, 'sections_vars']);
    }

    public function sections_vars( $sections ){

        $nucleoweb_sections = array(
            'section_layout_header' => array(
                'title' => 'Header',
                'panel' => 'panel_layout'
            ),
            'section_layout_front' => array(
                'title' => 'Home',
                'panel' => 'panel_layout'
            ),
            'section_layout_footer' => array(
                'title' => 'Footer',
                'panel' => 'panel_layout'
            ),
        );

        return array_merge( $nucleoweb_sections, $sections );
    }
}
