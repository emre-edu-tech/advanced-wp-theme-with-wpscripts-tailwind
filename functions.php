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
    add_theme_support('woocommerce');
}