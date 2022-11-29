<?php

/**
 * Header Navigation Template
 * 
 * @package LimitlessWP
 */

use LimitlessWP_Theme\Inc\Menus;

$menu_object = Menus::get_instance();
$header_menu_id = $menu_object->get_menu_id('limitlesswp-header-menu');
$header_menu_items = wp_get_nav_menu_items($header_menu_id);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo site_url('/') ?>">
        <?php
            // Custom markup for the logo
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            if(has_custom_logo()) { ?>
                <img class="custom-logo" src="<?php echo esc_url($logo[0]) ?>" alt="<?php echo get_bloginfo('name') ?>">
            <?php } else {
                echo get_bloginfo('name');
            }
        ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
            if(!empty($header_menu_items) && is_array($header_menu_items)) { ?>
                <ul class="navbar-nav mr-auto">
                    <?php
                        foreach($header_menu_items as $menu_item) {
                            $menu_item_classes = '';
                            // get the current menu slug and compare one by one
                            if($menu_item->object_id == get_queried_object_id()) {
                                $menu_item_classes = implode(' ', $menu_item->classes);
                                $menu_item_classes .= 'current_menu_item active';   
                            }
                            if(!$menu_item->menu_item_parent) {
                                $child_menu_items = $menu_object->get_child_menu_items($header_menu_items, $menu_item->ID);
                                $has_children = !empty($child_menu_items) && is_array($child_menu_items);
                                if(!$has_children) {?>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo !empty($menu_item_classes) ? $menu_item_classes : '' ?>" href="<?php echo esc_url($menu_item->url) ?>">
                                            <?php echo esc_html($menu_item->title) ?>
                                        </a>
                                    </li>
                                <?php } else { ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle <?php echo !empty($menu_item_classes) ? $menu_item_classes : '' ?>" href="<?php echo esc_url($menu_item->url) ?>" role="button" data-toggle="dropdown" aria-expanded="false">
                                            <?php echo esc_html($menu_item->title) ?>
                                        </a>
                                        <i class="fa-solid fa-caret-down"></i>
                                        <div class="dropdown-menu">
                                            <?php foreach($child_menu_items as $child_menu_item) { 
                                                $child_menu_item_classes = '';
                                                // get the current menu slug and compare one by one
                                                if($child_menu_item->object_id == get_queried_object_id()) {
                                                    $child_menu_item_classes = implode(' ', $child_menu_item->classes);
                                                    $child_menu_item_classes .= 'current_menu_item active';   
                                                }
                                                ?>
                                                <a class="dropdown-item <?php echo !empty($child_menu_item_classes) ? $child_menu_item_classes : '' ?>" href="<?php echo esc_url($child_menu_item->url) ?>"><?php echo esc_html($child_menu_item->title) ?></a>
                                           <?php } ?>
                                        </div>
                                    </li>  
                                <?php }
                            }
                        }
                    ?>
                </ul>
            <?php }
        ?>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>