<?php

class NW_Widget_Facebook extends WP_Widget {

    function __construct() {
        parent::__construct(false, __('Facebook Iframe', 'textdomain'));

        wp_register_style('style-frontend', get_template_directory_uri() . '/assets/css/widgets/facebook.css', array(), '', 'all');
        wp_enqueue_style('style-frontend');
    }

    function widget($args, $instance) { ?>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous"
                src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v6.0"></script>
        <div class="component-facebook">
            <div class="header">
                <h1><?= $instance['title'] ?></h1>
            </div>
            <div class="container-facebook">
                <div class="fb-page" data-href="https://www.facebook.com/Prefeitura-Municipal-de-Nova-América-1615540195375779/" data-tabs="timeline" data-width=""
                     data-height="315px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false"
                     data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/Prefeitura-Municipal-de-Nova-América-1615540195375779/" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/Prefeitura-Municipal-de-Nova-América-1615540195375779/">Prefeitura de Goiânia</a></blockquote>
                </div>
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
