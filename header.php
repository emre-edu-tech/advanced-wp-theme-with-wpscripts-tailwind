<?php
/**
 * Wordpress Header
 * 
 * @package LimitlessWP
 */
?>
<!DOCTYPE html>
<html <?php echo language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
    <?php
    // For the backward compatibility
    if(function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <?php get_template_part('template-parts/header/nav'); ?>
    </header>

    <div id="content" class="site-content">