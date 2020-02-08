<?php

/*
    ========================================
        Admin Enqueue Functions
    ========================================
*/

function wp_test_load_admin_scripts($hook){

    if ('toplevel_page_wp_test' != $hook and 'theme-options_page_wp_test_thumbnail' != $hook) {
        return;
    }

    wp_register_style('wp_test_style', get_template_directory_uri() . '/css/wp_test.admin.css', array(), "1.0.0",'all');
    wp_enqueue_style('wp_test_style');


    wp_enqueue_media();

    wp_register_script('wp-admin-script', get_template_directory_uri() . '/js/wp_test.admin.js', array('jquery'),'1.0.0' , true);
    wp_enqueue_script('wp-admin-script');
}
add_action('admin_enqueue_scripts','wp_test_load_admin_scripts');