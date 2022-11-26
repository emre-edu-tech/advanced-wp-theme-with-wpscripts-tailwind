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

    public function get_menu_id($location) {
        // Get all the menu locations
        $locations = get_nav_menu_locations();

        // Get menu object id by location
        $menu_id = $locations[$location];

        return !empty($menu_id) ? $menu_id : null;
    }

    // $menu_items_arr includes all the menu items, both child and parent
    public function get_child_menu_items($menu_items_arr, $parent_id) {
        $child_menu_items = [];
        if(!empty($menu_items_arr) && is_array($menu_items_arr)) {
            foreach($menu_items_arr as $menu_item) {
                if(intval($menu_item->menu_item_parent) === $parent_id) {
                    array_push($child_menu_items, $menu_item);
                }
            }
        }
        return $child_menu_items;
    }
}