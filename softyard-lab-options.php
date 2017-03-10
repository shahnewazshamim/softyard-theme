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
                        'id'    => 'fs_logo_text_enable',
                        'type'  => 'switcher',
                        'title' => 'Enable Text Logo',
                        'desc'  => 'By Default Image Logo is active',
                        'help'  => 'If enable Image logo will disappear and Text Logo will be active',
                    ),
                    array(
                        'id'         => 'fs_logo_text',
                        'type'       => 'text',
                        'title'      => 'Text Logo',
                        'dependency' => array('fs_logo_text_enable', '==', 'true'),
                    ),
                    array(
                        'id'         => 'fs_logo_image',
                        'type'       => 'upload',
                        'title'      => 'Image Logo',
                        'default'    => get_template_directory_uri() . '/images/logo.png',
                        'dependency' => array('fs_logo_text_enable', '==', 'false'),
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
                        'id'    => 'fs_schedule_enable',
                        'type'  => 'switcher',
                        'title' => 'Show on Header',
                    ),
                    array(
                        'id'         => 'fs_schedule_workday',
                        'type'       => 'text',
                        'title'      => 'Working Day',
                        'dependency' => array('fs_schedule_enable', '==', 'true'),
                    ),
                    array(
                        'id'         => 'fs_schedule_offday',
                        'type'       => 'text',
                        'title'      => 'Offday',
                        'dependency' => array('fs_schedule_enable', '==', 'true'),
                    ),
                    array(
                        'id'         => 'fs_schedule_image_icon',
                        'type'       => 'checkbox',
                        'title'      => 'Custom Icon',
                        'dependency' => array('fs_schedule_enable', '==', 'true'),
                    ),
                    array(
                        'id'         => 'fs_schedule_icon',
                        'type'       => 'icon',
                        'title'      => 'Font Awesome Icon',
                        'dependency' => array('fs_schedule_enable|fs_schedule_image_icon', '==|==', 'true|false'),
                    ),
                    array(
                        'id'         => 'fs_schedule_image',
                        'type'       => 'upload',
                        'title'      => 'Upload Image',
                        'dependency' => array('fs_schedule_enable|fs_schedule_image_icon', '==|==', 'true|true'),
                        'settings'   => array(
                            'upload_type'  => 'image',
                            'button_title' => 'Add Icon',
                            'frame_title'  => 'Select an image (icon)',
                            'insert_title' => 'Use this image',
                        ),
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
                        'id'    => 'fs_contact_enable',
                        'type'  => 'switcher',
                        'title' => 'Show on Header',
                    ),
                    array(
                        'id'         => 'fs_contact_phone',
                        'type'       => 'text',
                        'title'      => 'Contact Number',
                        'dependency' => array('fs_contact_enable', '==', 'true'),
                    ),
                    array(
                        'id'         => 'fs_contact_email',
                        'type'       => 'text',
                        'title'      => 'Email',
                        'dependency' => array('fs_contact_enable', '==', 'true'),
                    ),
                    array(
                        'id'         => 'fs_contact_image_icon',
                        'type'       => 'checkbox',
                        'title'      => 'Custom Icon',
                        'dependency' => array('fs_contact_enable', '==', 'true'),
                    ),
                    array(
                        'id'         => 'fs_contact_icon',
                        'type'       => 'icon',
                        'title'      => 'Font Awesome Icon',
                        'dependency' => array('fs_contact_enable|fs_contact_image_icon', '==|==', 'true|false'),
                    ),
                    array(
                        'id'         => 'fs_contact_image',
                        'type'       => 'upload',
                        'title'      => 'Upload Image',
                        'dependency' => array('fs_contact_enable|fs_contact_image_icon', '==|==', 'true|true'),
                        'settings'   => array(
                            'upload_type'  => 'image',
                            'button_title' => 'Add Icon',
                            'frame_title'  => 'Select an image (icon)',
                            'insert_title' => 'Use this image',
                        ),
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
                        'id'    => 'fs_address_enable',
                        'type'  => 'switcher',
                        'title' => 'Show on Header',
                    ),
                    array(
                        'id'         => 'fs_address_line_1',
                        'type'       => 'text',
                        'title'      => 'Address Line 1',
                        'dependency' => array('fs_address_enable', '==', 'true'),
                    ),
                    array(
                        'id'         => 'fs_address_line_2',
                        'type'       => 'text',
                        'title'      => 'Address Line 2',
                        'dependency' => array('fs_address_enable', '==', 'true'),
                    ),
                    array(
                        'id'         => 'fs_address_image_icon',
                        'type'       => 'checkbox',
                        'title'      => 'Custom Icon',
                        'dependency' => array('fs_address_enable', '==', 'true'),
                    ),
                    array(
                        'id'         => 'fs_address_icon',
                        'type'       => 'icon',
                        'title'      => 'Font Awesome Icon',
                        'dependency' => array('fs_address_enable|fs_address_image_icon', '==|==', 'true|false'),
                    ),
                    array(
                        'id'         => 'fs_address_image',
                        'type'       => 'upload',
                        'title'      => 'Upload Image',
                        'dependency' => array('fs_address_enable|fs_address_image_icon', '==|==', 'true|true'),
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
        'title'  => 'Home Content',
        'icon'   => 'fa fa-home',
        'fields' => array(
            array(
                'id'       => 'fs_feature',
                'type'     => 'fieldset',
                'title'    => 'Features List',
                'desc'     => 'Home Page Content',
                'un_array' => TRUE,
                'fields'   => array(
                    array(
                        'id'      => 'home_content_feature',
                        'type'    => 'switcher',
                        'title'   => 'Show on Home',
                        'default' => 1,
                    ),
                ),
            ),
            array(
                'id'       => 'fs_portfolio',
                'type'     => 'fieldset',
                'title'    => 'Portfolio Gallery',
                'desc'     => 'Home Page Content',
                'un_array' => TRUE,
                'fields'   => array(
                    array(
                        'id'      => 'home_content_portfolio',
                        'type'    => 'switcher',
                        'title'   => 'Show on Home',
                        'default' => 1,
                    ),
                    array(
                        'id'         => 'portfolio_title',
                        'type'       => 'text',
                        'title'      => 'Heading Title',
                        'default'    => 'Our Portfolio',
                        'dependency' => array('home_content_portfolio', '==', 'true'),
                        'attributes' => array(
                            'maxlength'   => 100,
                            'placeholder' => 'Ex: Our Portfolio',
                            'style'       => 'width: 100%',
                        ),
                    ),
                    array(
                        'id'         => 'portfolio_desc',
                        'type'       => 'textarea',
                        'title'      => 'Short Description',
                        'default'    => 'Globally leverage other\'s clientfocused growth strategies through pandemic and an users. embrace corporate technologies for unique testing',
                        'dependency' => array('home_content_portfolio', '==', 'true'),
                        'attributes' => array(
                            'maxlength'   => 150,
                            'placeholder' => 'Give Short Description',
                        ),
                    ),
                ),
            ),
            array(
                'id'       => 'fs_activity',
                'type'     => 'fieldset',
                'title'    => 'Activity Statistics',
                'desc'     => 'Home Page Content',
                'un_array' => TRUE,
                'fields'   => array(
                    array(
                        'id'      => 'home_content_activity',
                        'type'    => 'switcher',
                        'title'   => 'Show on Home',
                        'default' => 1,
                    ),
                ),
            ),
            array(
                'id'       => 'fs_service',
                'type'     => 'fieldset',
                'title'    => 'Services List',
                'desc'     => 'Home Page Content',
                'un_array' => TRUE,
                'fields'   => array(
                    array(
                        'id'      => 'home_content_service',
                        'type'    => 'switcher',
                        'title'   => 'Show on Home',
                        'default' => 1,
                    ),
                    array(
                        'id'         => 'service_title',
                        'type'       => 'text',
                        'title'      => 'Heading Title',
                        'default'    => 'What We Offer',
                        'dependency' => array('home_content_service', '==', 'true'),
                        'attributes' => array(
                            'maxlength'   => 100,
                            'placeholder' => 'Ex: What We Offer',
                            'style'       => 'width: 100%',
                        ),
                    ),
                    array(
                        'id'         => 'service_desc',
                        'type'       => 'textarea',
                        'title'      => 'Short Description',
                        'default'    => 'Globally leverage other\'s clientfocused growth strategies through pandemic and an users. embrace corporate technologies for unique testing',
                        'dependency' => array('home_content_service', '==', 'true'),
                        'attributes' => array(
                            'maxlength'   => 150,
                            'placeholder' => 'Give Short Description',
                        ),
                    ),
                ),
            ),
            array(
                'id'       => 'fs_team',
                'type'     => 'fieldset',
                'title'    => 'Our Team',
                'desc'     => 'Home Page Content',
                'un_array' => TRUE,
                'fields'   => array(
                    array(
                        'id'      => 'home_content_team',
                        'type'    => 'switcher',
                        'title'   => 'Show on Home',
                        'default' => 1,
                    ),
                    array(
                        'id'         => 'team_title',
                        'type'       => 'text',
                        'title'      => 'Heading Title',
                        'default'    => 'Our Great Team',
                        'dependency' => array('home_content_team', '==', 'true'),
                        'attributes' => array(
                            'maxlength'   => 100,
                            'placeholder' => 'Ex: Our Team',
                            'style'       => 'width: 100%',
                        ),
                    ),
                    array(
                        'id'         => 'team_desc',
                        'type'       => 'textarea',
                        'title'      => 'Short Description',
                        'default'    => 'Globally leverage other\'s clientfocused growth strategies through pandemic and an users. embrace corporate technologies for unique testing',
                        'dependency' => array('home_content_team', '==', 'true'),
                        'attributes' => array(
                            'maxlength'   => 150,
                            'placeholder' => 'Give Short Description',
                        ),
                    ),
                ),
            ),
            array(
                'id'       => 'fs_twitter',
                'type'     => 'fieldset',
                'title'    => 'Twitter Feed',
                'desc'     => 'Home Page Content',
                'un_array' => TRUE,
                'fields'   => array(
                    array(
                        'id'      => 'home_content_twitter',
                        'type'    => 'switcher',
                        'title'   => 'Show on Home',
                        'default' => 1,
                    ),
                ),
            ),
            array(
                'id'       => 'fs_pricing',
                'type'     => 'fieldset',
                'title'    => 'Pricing Table',
                'desc'     => 'Home Page Content',
                'un_array' => TRUE,
                'fields'   => array(
                    array(
                        'id'      => 'home_content_pricing',
                        'type'    => 'switcher',
                        'title'   => 'Show on Home',
                        'default' => 1,
                    ),
                    array(
                        'id'         => 'pricing_title',
                        'type'       => 'text',
                        'title'      => 'Heading Title',
                        'default'    => 'Our Pricing Plan',
                        'dependency' => array('home_content_pricing', '==', 'true'),
                        'attributes' => array(
                            'maxlength'   => 100,
                            'placeholder' => 'Ex: Pricing Plan',
                            'style'       => 'width: 100%',
                        ),
                    ),
                    array(
                        'id'         => 'pricing_desc',
                        'type'       => 'textarea',
                        'title'      => 'Short Description',
                        'default'    => 'Globally leverage other\'s clientfocused growth strategies through pandemic and an users. embrace corporate technologies for unique testing',
                        'dependency' => array('home_content_pricing', '==', 'true'),
                        'attributes' => array(
                            'maxlength'   => 150,
                            'placeholder' => 'Give Short Description',
                        ),
                    ),
                ),
            ),
            array(
                'id'       => 'fs_partner',
                'type'     => 'fieldset',
                'title'    => 'Clients List',
                'desc'     => 'Home Page Content',
                'un_array' => TRUE,
                'fields'   => array(
                    array(
                        'id'      => 'home_content_partner',
                        'type'    => 'switcher',
                        'title'   => 'Show on Home',
                        'default' => 1,
                    ),
                    array(
                        'id'         => 'partner_title',
                        'type'       => 'text',
                        'title'      => 'Heading Title',
                        'default'    => 'Our Client Logo',
                        'dependency' => array('home_content_partner', '==', 'true'),
                        'attributes' => array(
                            'maxlength'   => 100,
                            'placeholder' => 'Ex: Client Logo',
                            'style'       => 'width: 100%',
                        ),
                    ),
                    array(
                        'id'         => 'partner_desc',
                        'type'       => 'textarea',
                        'title'      => 'Short Description',
                        'default'    => 'Globally leverage other\'s clientfocused growth strategies through pandemic and an users. embrace corporate technologies for unique testing',
                        'dependency' => array('home_content_partner', '==', 'true'),
                        'attributes' => array(
                            'maxlength'   => 150,
                            'placeholder' => 'Give Short Description',
                        ),
                    ),
                ),
            ),
            array(
                'id'       => 'fs_blog',
                'type'     => 'fieldset',
                'title'    => 'Blog List',
                'desc'     => 'Home Page Content',
                'un_array' => TRUE,
                'fields'   => array(
                    array(
                        'id'      => 'home_content_blog',
                        'type'    => 'switcher',
                        'title'   => 'Show on Home',
                        'default' => 1,
                    ),
                    array(
                        'id'         => 'blog_title',
                        'type'       => 'text',
                        'title'      => 'Heading Title',
                        'default'    => 'From The Blog',
                        'dependency' => array('home_content_blog', '==', 'true'),
                        'attributes' => array(
                            'maxlength'   => 100,
                            'placeholder' => 'Ex: Blog List',
                            'style'       => 'width: 100%',
                        ),
                    ),
                    array(
                        'id'         => 'blog_desc',
                        'type'       => 'textarea',
                        'title'      => 'Short Description',
                        'default'    => 'Globally leverage other\'s clientfocused growth strategies through pandemic and an users. embrace corporate technologies for unique testing',
                        'dependency' => array('home_content_blog', '==', 'true'),
                        'attributes' => array(
                            'maxlength'   => 150,
                            'placeholder' => 'Give Short Description',
                        ),
                    ),
                ),
            ),
        ),
    );

    /*******************************************************************************************************************
     * Activity Options
     ******************************************************************************************************************/
    $options['activity-content'] = array(
        'name'   => 'activity_content_section',
        'title'  => 'Activity Statistics',
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
                        'id'         => 'activity_stat_value',
                        'type'       => 'number',
                        'title'      => 'Value',
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