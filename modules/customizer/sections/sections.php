<?php
/**
 * Sessões do Customize
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
