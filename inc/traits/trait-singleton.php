<?php
/**
 * 
 */

 namespace LimitlessWP_Theme\Inc\Traits;

 trait Singleton {
    public function __construct() {

    }

    public function __clone() {

    }

    // returns an existing instance of a class
    // here final is used because it should not be overriden by any class
    final public static function get_instance() {
        // holds the collection of the instances of the classes
        static $instance = [];

        $called_class = get_called_class();     // returns the name of the class that has been called

        if(!isset($instance[$called_class])) {
            $instance[$called_class] = new $called_class();

            // create an action for the plugins that wants to hook into
            do_action(sprintf('limitlesswp_theme_singleton_%s', $called_class));
        }

        return $instance[$called_class];
    }
 }