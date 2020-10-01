<?php

## Customize functions global

# Filter name of register panels
function get_filter_customize_panels() {
    return 'nucleoweb_customize_panels';
}

# Filter name of register sections
function get_filter_customize_sections() {
    return 'nucleoweb_customize_sections';
}

# Filter name of register sections
function get_filter_customize_settings() {
    return 'nucleoweb_general_settings';
}

# Directory singular single
function get_single_directory () {
    return 'singular-pages/post/';
}

# Directory singular page
function get_page_directory () {
    return 'singular-pages/page/';
}

# Directory singular
function get_singular_directory () {
    return get_template_directory() . '/singular-pages/';
}

