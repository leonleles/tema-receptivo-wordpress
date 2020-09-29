<?php

if (!class_exists('NucleoWeb_Customizer')):

    class NucleoWeb_Customizer {
        protected static $instance = NULL;
        /**
         * Panels
         *
         * @var array
         */
        protected $panels = array();

        /**
         * Sections
         *
         * @var array
         */
        protected $sections = array();

        /**
         * Settings+
         *
         * @var array
         */
        protected $settings = array();

        /**
         * Instante customize
         * @var
         */
        protected $customize;

        public static function get_instance() {

            if (!self::$instance) {
                self::$instance = new self();
            }

            return self::$instance;
        }

        public function register($wp_customize) {
            $this->customize = $wp_customize;

            $this->panels = apply_filters('nucleoweb_customize_panels', $this->panels);
            $this->sections = apply_filters('nucleoweb_customize_sections', $this->sections);
            $this->settings = apply_filters('nucleoweb_general_settings', []);

            $this->add_panels();
            $this->add_sections();

            foreach ($this->settings as $key => $setting) {

                $setting['id'] = $key;

                $this->add_setting($setting);
                $this->add_control($setting);
            }
        }

        /**
         * Create panels
         */
        private function add_panels() {

            foreach ($this->panels as $id => $panel) {

                $args = array(
                    'title' => $panel['title'] ?? '',
                    'description' => $panel['description'] ?? '',
                    'priority' => $panel['priority'] ?? 10,
                    'active_callback' => $panel['active_callback'] ?? '',
                    'theme_supports' => $panel['theme_supports'] ?? '',
                    'capability' => $panel['capability'] ?? '',
                );


                $this->customize->add_panel($id, $args);
            }
        }

        /**
         * Create section in panels
         */
        private function add_sections() {

            foreach ($this->sections as $id => $section) {

                $args = array(
                    'title' => $section['title'] ?? '',
                    'priority' => $section['priority'] ?? 10,
                    'description' => $section['description'] ?? '',
                    'active_callback' => $section['active_callback'] ?? false,
                    'panel' => $section['panel'] ?? '',
                );

                $this->customize->add_section($id, $args);
            }
        }

        protected function add_setting($field) {

            $args = array();

            $args['default'] = '';

            if (isset($field['setting_type']) || !empty($field['setting_type'])) {
                $args['type'] = $field['setting_type'];
            }

            if (isset($field['capability']) && !empty($field['capability'])) {
                $args['capability'] = $field['capability'];
            }

            if (isset($field['theme_supports']) && !empty($field['theme_supports'])) {
                $args['theme_supports'] = $field['theme_supports'];
            }

            if (isset($field['transport']) || !empty($field['transport'])) {
                $args['transport'] = $field['transport'];
            }

            $this->customize->add_setting($field['id'], $args);
        }

        protected function add_control($field) {

            $args = array();

            if (isset($field['label']) && !empty($field['label'])) {
                $args['label'] = $field['label'];
            }

            if (isset($field['description']) && !empty($field['description'])) {
                $args['description'] = $field['description'];
            }

            if (isset($field['section']) && !empty($field['section'])) {
                $args['section'] = $field['section'];
            }

            if (isset($field['priority']) && !empty($field['priority'])) {
                $args['priority'] = $field['priority'];
            }

            if (isset($field['active_callback'])) {
                $args['active_callback'] = $field['active_callback'];
            }

            if (isset($field['settings']) && !empty($field['settings'])) {
                $args['settings'] = $field['settings'];
            }

            if (isset($field['choices']) && is_array($field['choices'])) {
                $args['choices'] = $field['choices'];
            }

            if (isset($field['height']) && !empty($field['height'])) {
                $args['height'] = $field['height'];
            }

            if (isset($field['width']) && !empty($field['width'])) {
                $args['width'] = $field['width'];
            }

            if (isset($field['input_attrs']) && !empty($field['input_attrs'])) {
                $args['input_attrs'] = $field['input_attrs'];
            }

            $control_id = $field['id'];

            switch ($field['type']) {

                case 'colors':

                    unset($args['type']);

                    $this->customize->add_control(new WP_Customize_Color_Control(
                        $this->customize,
                        $control_id,
                        $args
                    ));

                    break;

                case 'file':

                    $this->customize->add_control(new WP_Customize_Upload_Control(
                        $this->customize,
                        $control_id,
                        $args
                    ));

                    break;

                case 'image':

                    $this->customize->add_control(new WP_Customize_Image_Control(
                        $this->customize,
                        $control_id,
                        $args
                    ));

                    break;

                case 'cropped_image':

                    $this->customize->add_control(new WP_Customize_Cropped_Image_Control(
                        $this->customize,
                        $control_id,
                        $args
                    ));

                    break;

                default:

                    if (isset($field['type']) && !empty($field['type'])) {
                        $args['type'] = $field['type'];
                    } else {
                        $args['type'] = 'text';
                    }

                    $this->customize->add_control($control_id, $args);

                    break;
            }
        }

        public function get($id) {
            return get_theme_mod($id);
        }
    }

endif;

if (!function_exists('nucleoweb_get_option')) {

    function nucleoweb_get_option($id) {
        return NucleoWeb_Customizer::get_instance()->get($id);
    }

}

add_action('customize_register', array(NucleoWeb_Customizer::get_instance(), 'register'));
