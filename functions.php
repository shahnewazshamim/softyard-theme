<?php

/***********************************************************************************************************************
 * Include Softyard LAB Theme Options
 **********************************************************************************************************************/

require_once 'softyard-lab-options.php';


/***********************************************************************************************************************
 * Register Navigation on Theme
 **********************************************************************************************************************/

if (!function_exists('register_sy_menu')) {

    function register_sy_menu()
    {
        register_nav_menu('primary-menu', __('Primary Menu'));
    }

    add_action('init', 'register_sy_menu');

}


/***********************************************************************************************************************
 * Create a default Landing Page / Home Page
 **********************************************************************************************************************/

if (get_page_by_title('Home') == NULL) {
    $post = array(
        'post_title'    => 'Home',
        'post_status'   => 'publish',
        'post_type'     => 'page',
        'menu_order'    => '-100',
        'page_template' => 'page-template/sy-landing.php',
    );
    wp_insert_post($post);
    $front_page = get_page_by_title('Home');
    update_option('page_on_front', $front_page->ID);
    update_option('show_on_front', 'page');
}


/***********************************************************************************************************************
 * Register Custom Post type ['company-feature']
 **********************************************************************************************************************/

if (!function_exists('company_feature_post_type')) {

    function company_feature_post_type()
    {
        register_post_type('company-feature', array(
            'labels'      => array(
                'name'          => __('Company Features'),
                'singular_name' => __('Company Feature'),
            ),
            'public'      => TRUE,
            'has_archive' => TRUE,
            'rewrite'     => array('slug' => 'company-feature'),
            'menu_icon'   => 'dashicons-editor-ol',
            'supports'    => array('title'),
        ));
    }

    add_action('init', 'company_feature_post_type');
}


/***********************************************************************************************************************
 * ['company-feature'] Post Type MetaBox Options
 **********************************************************************************************************************/

if (!function_exists('company_feature_post_type_metabox_options')) {

    function company_feature_post_type_metabox_options()
    {
        $options = array();

        $options['company-feature'] = array(
            'id'        => '_company_feature_post_options',
            'title'     => 'Appear on only Home Page',
            'post_type' => 'company-feature',
            'context'   => 'normal',
            'priority'  => 'default',
            'sections'  => array(
                array(
                    'name'   => 'feature_fields',
                    'title'  => 'Feature Fields',
                    'fields' => array(
                        array(
                            'id'         => 'feature_fields_desc',
                            'type'       => 'text',
                            'title'      => 'Description',
                            'desc'       => 'Character limit 100',
                            'help'       => 'Character limit 100',
                            'attributes' => array(
                                'maxlength'   => 100,
                                'placeholder' => 'Give a feature description',
                                'style'       => 'width: 90%',
                            ),
                        ),
                        array(
                            'id'    => 'feature_fields_icon',
                            'type'  => 'icon',
                            'title' => 'Font Awesome Icon',
                        ),
                        array(
                            'id'      => 'feature_fields_icon_size',
                            'type'    => 'select',
                            'title'   => 'Font Awesome Icon Size',
                            'class'   => 'chosen',
                            'options' => array(
                                ''  => '1x',
                                'fa-2x'  => '2x',
                                'fa-3x'  => '3x',
                                'fa-4x'  => '4x',
                                'fa-5x'  => '5x',
                            ),
                            'default' => 'fa-2x',
                        ),
                        array(
                            'id'    => 'feature_fields_image_icon',
                            'type'  => 'switcher',
                            'title' => 'Use Custom Icon',
                        ),
                        array(
                            'id'         => 'feature_fields_image',
                            'type'       => 'upload',
                            'title'      => 'Upload Custom Image',
                            'dependency' => array('feature_fields_image_icon', '==', 'true'),
                            'settings'   => array(
                                'upload_type'  => 'image',
                                'button_title' => 'Add Icon',
                                'frame_title'  => 'Select an image (icon)',
                                'insert_title' => 'Use this image',
                            ),
                        ),
                    ),
                ),
            ),
        );

        return $options;
    }

    add_filter('cs_metabox_options', 'company_feature_post_type_metabox_options');
}


/***********************************************************************************************************************
 * Initialize Theme Widget Area
 **********************************************************************************************************************/

if (!function_exists('init_sy_widgets')) {

    function init_sy_widgets()
    {
        $footer = array(
            'id'            => 'footer_content',
            'name'          => 'Footer Content',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        );

        register_sidebar($footer);
    }

    add_action('widgets_init', 'init_sy_widgets');

}