<?php
// framework options filter example
function softyard_lab_options($options)
{
    $options = array();

    /*******************************************************************************************************************
     * Header Options
     ******************************************************************************************************************/
    $options['header'] = array(
        'name'   => 'header_section',
        'title'  => 'Header Section',
        'icon'   => 'fa fa-header',
        'fields' => array(
            // Site Logo
            array(
                'id'       => 'fs_logo',
                'type'     => 'fieldset',
                'title'    => 'Site Logo',
                'desc'     => 'Logo of ' . get_bloginfo('name'),
                'help'     => 'Logo of ' . get_bloginfo('name'),
                'un_array' => TRUE,
                'fields'   => array(
                    array(
                        'id'      => 'fs_logo_image',
                        'type'    => 'upload',
                        'title'   => 'Logo',
                        'default' => get_template_directory_uri() . '/images/logo.png',
                    ),
                    array(
                        'id'    => 'fs_logo_text',
                        'type'  => 'text',
                        'title' => 'Text Logo',
                    ),
                    array(
                        'id'    => 'fs_logo_text_enable',
                        'type'  => 'switcher',
                        'title' => 'Enable Text Logo',
                        'desc'  => 'Text Logo will be active',
                        'help'  => 'If enable Image logo will disappear and Text Logo will be active',
                    ),
                ),
            ),
            // Working Schedule
            array(
                'id'       => 'fs_schedule',
                'type'     => 'fieldset',
                'title'    => 'Working Schedule Information',
                'desc'     => 'Weekly Schedule of ' . get_bloginfo('name'),
                'help'     => 'Weekly Schedule of ' . get_bloginfo('name'),
                'un_array' => TRUE,
                'fields'   => array(
                    array(
                        'id'    => 'fs_schedule_image',
                        'type'  => 'upload',
                        'title' => 'Iconic Image',
                    ),
                    array(
                        'id'    => 'fs_schedule_workday',
                        'type'  => 'text',
                        'title' => 'Working Day',
                    ),
                    array(
                        'id'    => 'fs_schedule_offday',
                        'type'  => 'text',
                        'title' => 'Offday',
                    ),
                    array(
                        'id'    => 'fs_schedule_enable',
                        'type'  => 'switcher',
                        'title' => 'Enable',
                    ),
                ),
            ),
            // Contact Information
            array(
                'id'       => 'fs_contact',
                'type'     => 'fieldset',
                'title'    => 'Contact Information',
                'desc'     => 'Information of ' . get_bloginfo('name'),
                'help'     => 'Information of ' . get_bloginfo('name'),
                'un_array' => TRUE,
                'fields'   => array(
                    array(
                        'id'    => 'fs_contact_image',
                        'type'  => 'upload',
                        'title' => 'Iconic Image',
                    ),
                    array(
                        'id'    => 'fs_contact_phone',
                        'type'  => 'text',
                        'title' => 'Sales Contact',
                    ),
                    array(
                        'id'    => 'fs_contact_email',
                        'type'  => 'text',
                        'title' => 'Sales Email',
                    ),
                    array(
                        'id'    => 'fs_contact_enable',
                        'type'  => 'switcher',
                        'title' => 'Enable',
                    ),
                ),
            ),
            // Address or Location
            array(
                'id'       => 'fs_address',
                'type'     => 'fieldset',
                'title'    => 'Location / Address',
                'desc'     => 'Location of ' . get_bloginfo('name'),
                'help'     => 'Location of ' . get_bloginfo('name'),
                'un_array' => TRUE,
                'fields'   => array(
                    array(
                        'id'    => 'fs_address_image',
                        'type'  => 'upload',
                        'title' => 'Iconic Image',
                    ),
                    array(
                        'id'    => 'fs_address_line_1',
                        'type'  => 'text',
                        'title' => 'Address Line 1',
                    ),
                    array(
                        'id'    => 'fs_address_line_2',
                        'type'  => 'text',
                        'title' => 'Address Line 2',
                    ),
                    array(
                        'id'    => 'fs_address_enable',
                        'type'  => 'switcher',
                        'title' => 'Enable',
                    ),
                ),
            ),
        ),
    );

    /*******************************************************************************************************************
     * Footer Options
     ******************************************************************************************************************/
    $options['footer'] = array(
        'name'   => 'footer_section',
        'title'  => 'Footer Section',
        'icon'   => 'fa fa-copyright',
        'fields' => array(
            array(
                'id'      => 'copyright',
                'type'    => 'text',
                'title'   => 'Copyright Text',
                'default' => 'Powered By Softyard LAB',
            ),
            array(
                'id'      => 'social_menu',
                'type'    => 'switcher',
                'title'   => 'Social Menu',
                'desc'    => 'Enable Social menu on footer bottom',
                'help'    => 'If disable Social menu on footer bottom will disappear',
                'default' => 1,
            ),
        ),
    );

    /*******************************************************************************************************************
     * Social Options
     ******************************************************************************************************************/
    $options['social'] = array(
        'name'   => 'social_section',
        'title'  => 'Social Network',
        'icon'   => 'fa fa-anchor',
        'fields' => array(
            array(
                'id'    => 'social_menu_facebook',
                'type'  => 'text',
                'title' => 'Facebook',
                'desc'  => 'If empty this icon is not showing on social menu',
                'help'  => 'If empty this icon is not showing on social menu',
            ),
            array(
                'id'    => 'social_menu_twitter',
                'type'  => 'text',
                'title' => 'Twitter',
                'desc'  => 'If empty this icon is not showing on social menu',
                'help'  => 'If empty this icon is not showing on social menu',
            ),
            array(
                'id'    => 'social_menu_linkedin',
                'type'  => 'text',
                'title' => 'Link',
                'desc'  => 'If empty this icon is not showing on social menu',
                'help'  => 'If empty this icon is not showing on social menu',
            ),
            array(
                'id'    => 'social_menu_google_plus',
                'type'  => 'text',
                'title' => 'Google Plus',
                'desc'  => 'If empty this icon is not showing on social menu',
                'help'  => 'If empty this icon is not showing on social menu',
            ),
            array(
                'id'    => 'social_menu_youtube',
                'type'  => 'text',
                'title' => 'Youtube',
                'desc'  => 'If empty this icon is not showing on social menu',
                'help'  => 'If empty this icon is not showing on social menu',
            ),
            array(
                'id'    => 'social_menu_vimeo',
                'type'  => 'text',
                'title' => 'Vimeo',
                'desc'  => 'If empty this icon is not showing on social menu',
                'help'  => 'If empty this icon is not showing on social menu',
            ),
            array(
                'id'    => 'social_menu_pinterest',
                'type'  => 'text',
                'title' => 'Pinterest',
                'desc'  => 'If empty this icon is not showing on social menu',
                'help'  => 'If empty this icon is not showing on social menu',
            ),
            array(
                'id'    => 'social_menu_instagram ',
                'type'  => 'text',
                'title' => 'Instagram ',
                'desc'  => 'If empty this icon is not showing on social menu',
                'help'  => 'If empty this icon is not showing on social menu',
            ),
            array(
                'id'    => 'social_menu_skype ',
                'type'  => 'text',
                'title' => 'Skype ',
                'desc'  => 'If empty this icon is not showing on social menu',
                'help'  => 'If empty this icon is not showing on social menu',
            ),
            array(
                'id'    => 'social_menu_stack_overflow',
                'type'  => 'text',
                'title' => 'Stack Overflow',
                'desc'  => 'If empty this icon is not showing on social menu',
                'help'  => 'If empty this icon is not showing on social menu',
            ),
            array(
                'id'    => 'social_menu_stack_exchange',
                'type'  => 'text',
                'title' => 'Stack Exchange',
                'desc'  => 'If empty this icon is not showing on social menu',
                'help'  => 'If empty this icon is not showing on social menu',
            ),
            array(
                'id'    => 'social_menu_github',
                'type'  => 'text',
                'title' => 'Github',
                'desc'  => 'If empty this icon is not showing on social menu',
                'help'  => 'If empty this icon is not showing on social menu',
            ),
            array(
                'id'    => 'social_menu_bitbucket',
                'type'  => 'text',
                'title' => 'Bitbucket',
                'desc'  => 'If empty this icon is not showing on social menu',
                'help'  => 'If empty this icon is not showing on social menu',
            ),
        ),
    );

    /*******************************************************************************************************************
     * Home Layout Options
     ******************************************************************************************************************/
    $options['home-content'] = array(
        'name'   => 'home_content_section',
        'title'  => 'Home Content Section',
        'icon'   => 'fa fa-home',
        'fields' => array(
            array(
                'id'      => 'home_content_about',
                'type'    => 'switcher',
                'title'   => 'Section About',
                'default' => 1,
            ),
            array(
                'id'      => 'home_content_portfolio',
                'type'    => 'switcher',
                'title'   => 'Section Portfolio',
                'default' => 1,
            ),
            array(
                'id'      => 'home_content_activity',
                'type'    => 'switcher',
                'title'   => 'Section Activity',
                'default' => 1,
            ),
            array(
                'id'      => 'home_content_service',
                'type'    => 'switcher',
                'title'   => 'Section Service',
                'default' => 1,
            ),
            array(
                'id'      => 'home_content_team',
                'type'    => 'switcher',
                'title'   => 'Section Team',
                'default' => 1,
            ),
            array(
                'id'      => 'home_content_twitter',
                'type'    => 'switcher',
                'title'   => 'Section Twitter',
                'default' => 1,
            ),
            array(
                'id'      => 'home_content_pricing',
                'type'    => 'switcher',
                'title'   => 'Section Pricing',
                'default' => 1,
            ),
            array(
                'id'      => 'home_content_partner',
                'type'    => 'switcher',
                'title'   => 'Section Partner',
                'default' => 1,
            ),
            array(
                'id'      => 'home_content_blog',
                'type'    => 'switcher',
                'title'   => 'Section Blog',
                'default' => 1,
            ),
        ),
    );

    /*******************************************************************************************************************
     * Activity Options
     ******************************************************************************************************************/
    $options['activity-content'] = array(
        'name'   => 'activity_content_section',
        'title'  => 'Activity Stat',
        'icon'   => 'fa fa-bar-chart',
        'fields' => array(
            array(
                'id'              => 'activity_stat',
                'type'            => 'group',
                'title'           => 'Activity Stat',
                'desc'            => 'Accordion title using the ID of the field, for eg. "Text Field 2" using as accordion title here.',
                'button_title'    => 'Add New Item',
                'accordion_title' => 'Activity Item',
                'fields'          => array(
                    array(
                        'id'         => 'activity_stat_text',
                        'type'       => 'text',
                        'title'      => 'Name',
                        'attributes' => array(
                            'maxlength'   => 15,
                            'placeholder' => 'Ex: Happy Customer',
                        ),
                    ),
                    array(
                        'id'    => 'activity_stat_value',
                        'type'  => 'number',
                        'title' => 'Value',
                        'attributes' => array(
                            'maxlength'   => 100000,
                            'placeholder' => 'Ex: 7000',
                        ),
                    ),
                    array(
                        'id'    => 'activity_stat_icon',
                        'type'  => 'icon',
                        'title' => 'Icon',
                    ),
                ),
            ),
        ),
    );

    return $options;
}

add_filter('cs_framework_options', 'softyard_lab_options');

?>