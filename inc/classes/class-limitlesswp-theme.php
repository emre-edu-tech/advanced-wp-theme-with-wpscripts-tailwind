<?php

/**
 * Bootstraps the theme - adds all of the basic functionality to the theme
 * 
 * @package LimitlessWP
 */

namespace LimitlessWP_Theme\Inc;

use LimitlessWP_Theme\Inc\Traits\Singleton;

class LimitlessWP_Theme {
    use Singleton;

    protected function __construct() {
        // Load other classes here in main class construct method
        Assets::get_instance();

        // Action and Filter Hooks
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // Actions
        add_action('after_setup_theme', [$this, 'theme_setup']);
    }

    public function theme_setup() {
        // Website Title
        add_theme_support('title-tag');

        // Custom Logo
        add_theme_support('custom-logo', [
            'header-text'          => ['site-title', 'site-description'],
            'height'               => 100,
            'width'                => 300,
            'flex-height'          => true,
            'flex-width'           => true,
            'unlink-homepage-logo' => true,
        ]);

        // Custom Page Background
        add_theme_support('custom-background', [
            'default-color' => '#FFF',
            'default-image' => '',
        ]);

        // Post Thumbnails
        add_theme_support('post-thumbnails');

        // Refresh only the necessary part of the customizer preview window for the widgets
        add_theme_support('customize-selective-refresh-widgets');

        // Adds the possibility for the RSS readers to find the Website updates
        add_theme_support('automatic-feed-links');

        // Adds support for the HTML5 markup for the following: search forms, comment forms, comment lists,
        // gallery and caption
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',   
        ]);
    }
}