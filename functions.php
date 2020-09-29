<?php

require_once __DIR__ . '/vendor/autoload.php';

define('CURRENT_ENV', 3);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
define('WP_DEBUG', true);

require_once __DIR__ . '/inc/setup.php';
require_once __DIR__ . '/inc/supports.php';
require_once __DIR__ . '/modules/loader.php';

show_admin_bar(false);


#TODO apagar tudo abaixo
wp_register_style('style-inline', get_template_directory_uri() . '/assets/css/default/inline-classes.css', array(), '', 'all');
wp_enqueue_style('style-inline');
