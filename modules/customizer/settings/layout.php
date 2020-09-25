<?php
/**
* Sets settings for general fields
*
* @since  Travelbiz 1.0.0
* @param  array $settings
* @return array Merged array
*/

function Customizer_General_Settings( $settings ){

	$general = array(
        'widget_banners' => array(
            'label'     => 'Teste',
            'section'   => 'section_banners',
            'type'      => 'select',
            'choices'   => []
        ),
	);

	return array_merge( $settings, $general );
}
add_filter( 'nucleoweb_general_settings', 'Customizer_General_Settings' );
