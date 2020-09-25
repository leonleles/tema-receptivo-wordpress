<?php
/**
* Sets sections for Travelbiz_Customizer
*
* @since  Travelbiz 1.0.0
* @param  array $sections
* @return array Merged array
*/
function Customizer_Sections( $sections ){

	$travelbiz_sections = array(
		# Section for Font panel
		'section_banners' => array(
			'title' => 'Banners',
			'panel' => 'panel_layout'
		),
	);

	return array_merge( $travelbiz_sections, $sections );
}
add_filter( 'nucleoweb_customize_sections', 'Customizer_Sections' );
