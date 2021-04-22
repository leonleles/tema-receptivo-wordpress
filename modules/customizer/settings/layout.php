<?php

class layout {

    public function __construct() {
        add_filter(get_filter_customize_settings(), [$this, 'settings_vars']);
    }

    public function settings_vars($settings) {

        $general = array(
            'layout_header' => array(
                'label' => 'Modelo Header',
                'section' => 'section_layout_header',
                'type' => 'select',
                'default'=> 'green',
                'choices' => ['blue' => 'blue' , 'darkviolet' => 'darkviolet' , 'green' => 'green']
            ),
            'layout_footer' => array(
                'label' => 'Modelo Footer',
                'section' => 'section_layout_footer',
                'type' => 'select',
                'default'=> 'green',
                'choices' => ['blue' => 'blue' , 'darkviolet' => 'darkviolet' , 'green' => 'green']
            ),
            'layout_front' => array(
                'label' => 'Modelo Home',
                'section' => 'section_layout_front',
                'type' => 'select',
                'default'=> 'green',
                'choices' => ['blue' => 'blue' , 'darkviolet' => 'darkviolet' , 'green' => 'green']
            ),
        );

        return array_merge($settings, $general);
    }
}
