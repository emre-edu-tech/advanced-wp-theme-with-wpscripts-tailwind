<?php
/**
 * Register Menus
 * 
 * @package LimitlessWP
 */

namespace LimitlessWP_Theme\Inc;

use LimitlessWP_Theme\Inc\Traits\Singleton;

class Menus {
    // Use Singleton basically for every class to gurantee that the current class has been instantiated
    // only once
    use Singleton;

    public function __construct() {
        // action and filters for this class
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // Actions
        add_action('init', [$this, 'register_menus']);
    }

    public function register_menus() {
        register_nav_menus([
            'limitlesswp-header-menu' => esc_html__('Header Menu', 'limitlesswp'),
            'limitlesswp-footer-menu' => esc_html__('Footer Menu', 'limitlesswp'),
        ]);
    }
}