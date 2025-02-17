<?php

class NW_Widget_Banners extends WP_Widget {

    function __construct() {
        parent::__construct(false, __('Banners', 'textdomain'));

        wp_register_style('style-frontend', get_template_directory_uri() . '/assets/css/widgets/banners.css', array(), '', 'all');
        wp_enqueue_style('style-frontend');
    }

    function widget($args, $instance) { ?>
        <div class="component-banners">
            <h1><?= $instance['title'] ?></h1>
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

    // Widget Backend
    public function form($instance) {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'wpb_widget_domain');
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                   name="<?php echo $this->get_field_name('title'); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>"/>
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}
