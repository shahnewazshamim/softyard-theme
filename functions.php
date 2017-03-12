<?php

/***********************************************************************************************************************
 * Include Softyard LAB Theme Options
 **********************************************************************************************************************/

require_once 'softyard-lab-options.php';


/***********************************************************************************************************************
 * Softyard LAB Theme Supports
 **********************************************************************************************************************/

add_theme_support('post-thumbnails');


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
                'name'               => __('SY Features'),
                'singular_name'      => __('SY Feature'),
                'add_new'            => __('Add New Feature'),
                'add_new_item'       => __('Add New Feature'),
                'edit_item'          => __('Edit Feature'),
                'new_item'           => __('New Feature'),
                'view_item'          => __('Feature List'),
                'view_items'         => __('All Features'),
                'all_items'          => __('All Feature'),
                'search_items'       => __('Search Feature'),
                'not_found'          => __('No Feature Found'),
                'not_found_in_trash' => __('No Feature Found in Trash'),
            ),
            'public'      => TRUE,
            'has_archive' => TRUE,
            'rewrite'     => array('slug' => 'company-feature'),
            'menu_icon'   => 'dashicons-star-filled',
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
                                ''      => '1x',
                                'fa-2x' => '2x',
                                'fa-3x' => '3x',
                                'fa-4x' => '4x',
                                'fa-5x' => '5x',
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
 * Register Custom Post type ['sy-portfolio']
 **********************************************************************************************************************/

if (!function_exists('sy_portfolio_post_type')) {

    function sy_portfolio_post_type()
    {
        register_post_type('sy-portfolio', array(
            'labels'      => array(
                'name'               => __('SY Portfolios'),
                'singular_name'      => __('SY Portfolio'),
                'add_new'            => __('Add New Portfolio'),
                'add_new_item'       => __('Add New Portfolio'),
                'edit_item'          => __('Edit Portfolio'),
                'new_item'           => __('New Portfolio'),
                'view_item'          => __('Portfolio List'),
                'view_items'         => __('All Portfolios'),
                'all_items'          => __('All Portfolio'),
                'search_items'       => __('Search Portfolio'),
                'not_found'          => __('No Portfolio Found'),
                'not_found_in_trash' => __('No Portfolio Found in Trash'),
            ),
            'public'      => TRUE,
            'has_archive' => TRUE,
            'rewrite'     => array('slug' => 'sy-portfolio'),
            'menu_icon'   => 'dashicons-portfolio',
            'supports'    => array('title', 'editor', 'thumbnail'),
        ));
    }

    add_action('init', 'sy_portfolio_post_type');
}


/***********************************************************************************************************************
 * Register Custom Post type Taxonomy ['sy-portfolio']
 **********************************************************************************************************************/

if (!function_exists('sy_portfolio_type_taxonomy')) {

    function sy_portfolio_type_taxonomy()
    {
        register_taxonomy('sy-portfolio_type', array('sy-portfolio'), array(
            'labels'            => array(
                'name'               => _x('Portfolio Type', 'taxonomy general name'),
                'singular_name'      => _x('Portfolio Type', 'taxonomy singular name'),
                'search_items'       => __('Portfolio Types', 'softyardlab'),
                'all_items'          => __('All Portfolio Types', 'softyardlab'),
                'parent_items'       => __('Parent Portfolio Types', 'softyardlab'),
                'parent_items_colon' => __('Parent Portfolio Types : ', 'softyardlab'),
                'edit_item'          => __('Edit Portfolio Type', 'softyardlab'),
                'update_item'        => __('Update Portfolio Type', 'softyardlab'),
                'add_new_item'       => __('Add New Portfolio Type', 'softyardlab'),
                'new_item_name'      => __('New Portfolio Type', 'softyardlab'),
                'menu_name'          => __('Portfolio Type', 'softyardlab'),
            ),
            'hierarchical'      => FALSE,
            'show_ui'           => TRUE,
            'show_admin_column' => TRUE,
            'query_var'         => TRUE,
            'rewrite'           => array('slug' => 'sy-portfolio_type'),
        ));
    }

    add_action('init', 'sy_portfolio_type_taxonomy');
}


/***********************************************************************************************************************
 * ['sy-portfolio'] Post Type MetaBox Options
 **********************************************************************************************************************/

if (!function_exists('sy_portfolio_post_type_metabox_options')) {

    function sy_portfolio_post_type_metabox_options()
    {
        $options = array();

        $options['sy-portfolio'] = array(
            'id'        => '_sy_portfolio_post_options',
            'title'     => 'Portfolio Meta',
            'post_type' => 'sy-portfolio',
            'context'   => 'normal',
            'priority'  => 'default',
            'sections'  => array(
                array(
                    'name'   => 'portfolio_fields',
                    'fields' => array(
                        array(
                            'id'         => 'portfolio_fields_client',
                            'type'       => 'text',
                            'title'      => 'Client Name',
                            'attributes' => array(
                                'placeholder' => 'Ex: Microsoft',
                            ),
                        ),
                        array(
                            'id'         => 'portfolio_fields_date',
                            'type'       => 'text',
                            'title'      => 'Project Compilation Date',
                            'attributes' => array(
                                'placeholder' => 'Ex: September 12, 2017',
                            ),
                        ),
                        array(
                            'id'         => 'portfolio_fields_tech',
                            'type'       => 'text',
                            'title'      => 'Technology Used',
                            'attributes' => array(
                                'placeholder' => 'Ex: OOP, PHP, MySQL',
                                'style'       => 'width: 100%',
                            ),
                        ),
                        array(
                            'id'         => 'portfolio_fields_demo',
                            'type'       => 'text',
                            'title'      => 'Demo URL',
                            'attributes' => array(
                                'placeholder' => 'Ex: http://softyardbd.com',
                            ),
                        ),
                        array(
                            'id'         => 'portfolio_fields_live',
                            'type'       => 'text',
                            'title'      => 'Live URL',
                            'attributes' => array(
                                'placeholder' => 'Ex: http://softyardbd.com',
                            ),
                        ),
                        array(
                            'id'         => 'portfolio_fields_download',
                            'type'       => 'text',
                            'title'      => 'Download URL',
                            'attributes' => array(
                                'placeholder' => 'Ex: http://softyardbd.com',
                            ),
                        ),
                        array(
                            'id'         => 'portfolio_fields_github',
                            'type'       => 'text',
                            'title'      => 'Git Hub Repository',
                            'attributes' => array(
                                'placeholder' => 'Ex: http://github.com/',
                            ),
                        ),
                        array(
                            'id'         => 'portfolio_fields_bitbucket',
                            'type'       => 'text',
                            'title'      => 'Bitbucket Repository',
                            'attributes' => array(
                                'placeholder' => 'Ex: http://bitbucket.org/',
                            ),
                        ),
                    ),
                ),
            ),
        );

        return $options;
    }

    add_filter('cs_metabox_options', 'sy_portfolio_post_type_metabox_options');
}

add_image_size('portfolio-thumb', 384, 310, TRUE);
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