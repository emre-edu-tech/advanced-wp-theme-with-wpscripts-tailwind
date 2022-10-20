<?php
/**
 * Theme Functions
 * 
 * @package LimitlessWP
 */

// defined() checks whether a constant is already defined
if(!defined('LIMITLESSWP_DIR_PATH')) {
    define('LIMITLESSWP_DIR_PATH', untrailingslashit(get_template_directory()));
}

if(!defined('LIMITLESSWP_URI_PATH')) {
    define('LIMITLESSWP_URI_PATH', untrailingslashit(get_template_directory_uri()));
}

// include the autoloader then there is no need to include the classes and traits manually
require_once LIMITLESSWP_DIR_PATH . '/inc/helpers/autoloader.php';

function limitlesswp_get_theme_instance() {
    // Load the main theme class using Singleton trait
    \LimitlessWP_Theme\Inc\LimitlessWP_Theme::get_instance();
}

limitlesswp_get_theme_instance();