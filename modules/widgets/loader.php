<?php
/**
* Load widget components
*/
require_once get_parent_theme_file_path( '/modules/widgets/banners.php' );

/**
* Load all the widgets
*/
function nucleoweb_register_widget() {

	$widgets = array(
		'NW_Widget_Banners',
	);

	foreach ( $widgets as $key => $value) {
    	register_widget( $value );
	}
}
add_action( 'widgets_init', 'nucleoweb_register_widget' );
