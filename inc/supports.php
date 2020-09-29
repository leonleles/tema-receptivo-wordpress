<?php

add_action('after_setup_theme', function () {

    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('post-thumbnails');

    add_theme_support('html5', array(
        'comment-list',
        'gallery',
        'caption',
    ));

    add_theme_support('custom-header', array(
        'width' => 500,
        'height' => 500,
        'flex-height' => true,
    ));

    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
    ));

    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support('custom-logo', array(
        'width' => 370,
        'height' => 115,
        'flex-height' => true,
        'flex-width' => true,
    ));

    add_theme_support('infinite-scroll', array(
        'container' => '#main-wrap',
        'footer_widgets' => true,
        'render' => 'travelbiz_infinite_scroll_render',
    ));

    add_theme_support('editor-color-palette', array(
        array(
            'name' => 'Tan',
            'slug' => 'tan',
            'color' => '#D2B48C',
        ),
        array(
            'name' => 'Yellow',
            'slug' => 'yellow',
            'color' => '#FDE64B',
        ),
        array(
            'name' => 'Orange',
            'slug' => 'orange',
            'color' => '#ED7014',
        ),
        array(
            'name' => 'Red',
            'slug' => 'red',
            'color' => '#D0312D',
        ),
        array(
            'name' => 'Pink',
            'slug' => 'pink',
            'color' => '#b565a7',
        ),
        array(
            'name' => 'Purple',
            'slug' => 'purple',
            'color' => '#A32CC4',
        ),
        array(
            'name' => 'Blue',
            'slug' => 'blue',
            'color' => '#4E97D8',
        ),
        array(
            'name' => 'Green',
            'slug' => 'green',
            'color' => '#00B294',
        ),
        array(
            'name' => 'Brown',
            'slug' => 'brown',
            'color' => '#231709',
        ),
        array(
            'name' => 'Grey',
            'slug' => 'grey',
            'color' => '#7D7D7D',
        ),
        array(
            'name' => 'Black',
            'slug' => 'black',
            'color' => '#000000',
        ),
    ));
});
