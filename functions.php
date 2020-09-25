<?php

define('CURRENT_ENV', 3);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
define('WP_DEBUG', true);

require_once get_parent_theme_file_path( '/inc/supports.php' );
require_once get_parent_theme_file_path( '/inc/setup.php' );
require_once get_parent_theme_file_path( '/modules/loader.php' );

show_admin_bar(false);
