<?php

/**
 * Header Navigation Template
 * 
 * @package LimitlessWP
 */

use LimitlessWP_Theme\Inc\Menus;

$menu_class = Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('limitlesswp-header-menu');
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
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<?php
    wp_nav_menu([
        'theme_location' => 'limitlesswp-header-menu',
    ])
?>