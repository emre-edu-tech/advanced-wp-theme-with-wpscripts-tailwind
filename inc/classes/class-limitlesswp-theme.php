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
        // Load other classes here - Main Class
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // action and filters here
    }
}