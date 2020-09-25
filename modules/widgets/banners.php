<?php

class NW_Widget_Banners extends WP_Widget {

    function __construct() {
        parent::__construct(false, __('Banners', 'textdomain'));

        wp_register_style('style-frontend', get_template_directory_uri() . '/assets/css/widgets/banners.css', array(), '', 'all');
        wp_enqueue_style('style-frontend');
    }

    function widget($args, $instance) { ?>
        <div class="component-banners">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background: red"></div>
                    <div class="swiper-slide" style="background: #43853a"></div>
                    <div class="swiper-slide" style="background: #000000"></div>
                    <div class="swiper-slide" style="background: #00fff0"></div>
                </div>
                <ul class="swiper-pagination">
                </ul>
            </div>
        </div>
    <?php
    }

    function update($new_instance, $old_instance) {
        return $new_instance;
    }

    function form($instance) {
        return '';
    }
}
