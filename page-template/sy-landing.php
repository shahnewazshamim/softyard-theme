<?php
/*
 * Template Name: Landing Page
 */
get_header();

get_template_part('page-template/sy-section-header', 'page');

foreach(cs_get_all_option() as $key => $value){
    if(strpos($key, 'home_content') !== FALSE) {
        if($value == '') continue;
        $home_content[$key] = $value;
    }
}

if(!empty($home_content)){
    foreach($home_content as $key => $value) {
        $section = str_replace('home_content_', '', $key);
        get_template_part('page-template/home/sy-section-' . $section , 'page');
    }
}

get_template_part('page-template/sy-section-footer', 'page');

get_footer();

?>