<?php

add_action('wp_enqueue_scripts', 'mponsportal_load_assets');
function mponsportal_load_assets() {
    // Stylesheets listed according to their priorities
    // Tailwindcss stylesheet - Main stylesheet for this project
    wp_enqueue_style('mp-tailwind-style', get_theme_file_uri('/build/tailwind.css'), [], '1.0');
    // Load the stylesheet with sass support
    wp_enqueue_style('mp-main-style', get_theme_file_uri('/build/index.css'), [], '1.0');
    // Load the extra stylesheet not related with out theme
    // Ex: Block editor styles (This can also be used for admin panel related styles but 
    // then it should be loaded using another action!!!)
    wp_enqueue_style('mp-extra-style', get_theme_file_uri('/build/style-index.css'), [], '1.0');
    // Scripts
    wp_enqueue_script('mp-main-script', get_theme_file_uri('/build/index.js'), ['jquery'], '1,0', true);
}

// What functions does this theme support
add_action('after_setup_theme', 'mponsportal_theme_support');
function mponsportal_theme_support() {
    // Support for page titles
    add_theme_support('title-tag');
    // Support for post featured images
    add_theme_support('post-thumbnails');
    // Support for custom logo upload
    add_theme_support('custom-logo');
    // Support for overriding woocommeerce templates in this custom theme
    // thumbnail-image_width, single_image_width can be controlled: 
    // Customizer > Woocommerce > Product Images
    // product_grid settings can be controlled:
    // Customizer > Woocommerce > Product Catalog
    add_theme_support('woocommerce', [
        'thumbnail_image_width' => 150,
        'single_image_width' => 600,
        'product_grid' => [
            'default_rows' => 3,
            'default_columns' => 4,
        ]
    ]);
    // Support for Navigation Menus
    register_nav_menus([
        'primary-menu' => 'Primary Menu',
        'footer-menu' => 'Footer Menu'
    ]);
}

add_action('init', 'mponsportal_custom_post_types_taxonomies');
function mponsportal_custom_post_types_taxonomies() {
    // Note: There is no "archives" or "view items" labels in $topic_args array 
    // because Topic custom post type has_archive set to false
    $topic_args = [
        'name' => _x('Topics', 'Post Type Plural Name', 'mponsportal'),
        'singular_name' => _x('Topic', 'Post Type Singular Name', 'mponsportal'),
        'menu_name' => __('Topics', 'mponsportal'),
        'attributes' => __('Topic Attributes', 'mponsportal'),
        'all_items' => __('All Topics', 'mponsportal'),
        // Page title for the Add New Post Page
        'add_new_item' => __('Add New Topic', 'mponsportal'),
        // Add New Post Menu Text on admin bar and Add New Button Label on All Topics Page
        'add_new' => __('Add New Topic', 'mponsportal'),
        'new_item' => __('New Topic', 'mponsportal'),
        'edit_item' => __('Edit Topic', 'mponsportal'),
        'view_item' => __('View Topic', 'mponsportal'),
        'search_items' => __('Search Topics', 'mponsportal'),
        // not_found label is for the All Topics page if there all the topics are deleted
        'not_found' => __('No topics found', 'mponsportal'),
        'not_found_in_trash' => __('No topics found in Trash', 'mponsportal'),
        // Because topic post type has no featured-image in its supports setting
        // There is no need to set the featured-image related labels here
    ];
    // Custom Post Type: Topic
    // We do not want any archive page for this post type so 'has_archive' argument is not set to true
    register_post_type('topic', [
        'label' => __('Topics', 'mponsportal'),
        'labels' => $topic_args,
        'show_ui' => true,  // this also determines the value of 'show_in_menu' and 'show_in_admin_bar'
        'supports' => ['title', 'editor', 'excerpt', 'custom-fields'],
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-media-document',
        'taxonomies' => ['forum'],
        'public' => true,
        // post type is not available for selection in navigation menus, default to value of 'public' argument
        'show_in_nav_menus' => false,
    ]);

    // Custom Taxonomy - Forum: related to Topic
    register_taxonomy('forum', ['topic'], [
        'label' => __('Forums', 'mponsportal'),
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
    ]);
    // Guarantee the relationship between post type and taxonomy
    register_taxonomy_for_object_type('forum', 'topic');
}