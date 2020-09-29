<?php

require_once __DIR__ . '/vendor/autoload.php';

define('CURRENT_ENV', 3);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
define('WP_DEBUG', true);

require_once get_parent_theme_file_path( '/inc/setup.php' );
require_once get_parent_theme_file_path( '/inc/supports.php' );
require_once get_parent_theme_file_path( '/modules/loader.php' );

show_admin_bar(false);

function nucleoweb_is_active_footer_sidebar(){

    for( $i = 1; $i <= 4; $i++ ){
        if ( is_active_sidebar( 'travelbiz-footer-sidebar-'.$i ) ) :
            return true;
        endif;
    }
    return false;
}
