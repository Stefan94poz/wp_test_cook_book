<?php

/*
    ========================================
        Admin Page options
    ========================================
*/

function wp_test_add_admin_page(){

    //Generate Admin page
    add_menu_page('Default thumbnail image','Thumbnail image', 'manage_options', 'wp_test', 'wp_test_theme_thumbnail_image','dashicons-format-image',110);

    //Generate Sub pages


    

    //Activate custom settings
    add_action('admin_init', 'wp_test_custom_setting');

}

add_action('admin_menu', 'wp_test_add_admin_page');

function wp_test_custom_setting(){
    register_setting('admin-thumbnail-group', 'default_thumbnail');
    add_settings_section('sidebar-thumbnail-image', 'Thumbnail', 'wp_test_theme_thumbnail_image', 'wp_test');
   
}


function wp_test_theme_thumbnail_image(){
    //generation of our admin page
    require_once(get_template_directory() . '/inc/default-thumbnail.php');
}





