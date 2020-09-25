<?php
/**
 * Panels Customizer
*/
function NucleoWeb_Customizer_Panels( $panels ){

	$panels = array(
		'panel_layout' => array(
			'title' => 'Layout',
			'priority' => 10
		)
	);

	return $panels;
}
add_filter( 'nucleoweb_customize_panels', 'NucleoWeb_Customizer_Panels' );
