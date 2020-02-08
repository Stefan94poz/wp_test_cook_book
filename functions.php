<?php

require get_template_directory() . '/inc/function-admin.php';

require get_template_directory() . '/inc/enqueue.php';

/*
    ========================================
        Include Scripts
    ========================================
*/
function wp_test_script_enqueue(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',array(), '4.3.1' , 'all' );
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/theme.css',array(), '1.0.0' , 'all' );
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/theme.js' , array(), '1.0.0', true);
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js' , array(), '4.3.1', true);
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'wp_test_script_enqueue');


/*
    ========================================
        Activate Menus
    ========================================
*/
function wp_test_theme_setup(){
    add_theme_support('menus');

    register_nav_menu('primary', 'Prymary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'wp_test_theme_setup');


/*
    ========================================
        Theme support functions
    ========================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside','image','video'));


/*
    ========================================
        Sidebar
    ========================================
*/
function wp_test_widget_setup(){
    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar-1',
            'class' => 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<aside id="1$s" class="widget $2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        )
    );
}
add_action('widgets_init', 'wp_test_widget_setup');
/*
    ========================================
        Custom Post Type
    ========================================
*/


function wp_test_custom_post_type(){
    $labels = array(
        'name' => 'Recipes',
        'singular_name' => 'Recipes',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Recipes',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_arhive' => true,
        'publicy_querable' => true,
        'rewrite' => true,
        'capability' => 'post',
        'hirearhical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    
    register_post_type('Recipes',$args);
    
}

add_action('init', 'wp_test_custom_post_type');