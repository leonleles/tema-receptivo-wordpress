<?php

## Hide admin bar
show_admin_bar(false);

function filter_page_template_hierarchies($templates = array()) {
    $templates = array_map(function ($page){
        return get_page_directory() . '/' . $page;
    }, $templates);

    return $templates;
}

function filter_single_template_hierarchies($templates = array()) {
    $templates = array_map(function ($page){
        return get_single_directory() . '/' . $page;
    }, $templates);

    return $templates;
}

add_filter('page_template_hierarchy', 'filter_page_template_hierarchies');
add_filter('single_template_hierarchy', 'filter_single_template_hierarchies');
