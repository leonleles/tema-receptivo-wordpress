<?php


function travelbiz_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'travelbiz' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'travelbiz' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Header Sidebar', 'travelbiz' ),
		'id'            => 'header-sidebar',
		'description'   => esc_html__( 'Add widgets here. It will show in header alternative shift menu area.', 'travelbiz' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	for( $i = 1; $i <= 4; $i++ ){
		register_sidebar( array(
			'name'          => esc_html__( 'Footer', 'travelbiz' ) . $i,
			'id'            => 'travelbiz-footer-sidebar-' . $i,
			'description'   => esc_html__( 'Add widgets here.', 'travelbiz' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="footer-item">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}


}
add_action( 'widgets_init', 'travelbiz_widgets_init' );
