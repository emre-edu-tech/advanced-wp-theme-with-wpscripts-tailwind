<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>
    <!-- Site container for whole of the page content. Necessary for the full height screen -->
    <div class="flex flex-col min-h-screen">
        <!-- Site Header -->
        <header class="py-4 bg-gray-200">
            <div class="content-area flex items-center justify-between">

                <!-- Logo or Brand name -->
                <div class="logo border border-gray-500 p-3 text-2xl font-bold">Logo</div>

                <!-- Desktop navigation links -->
                <ul class="site-menu hidden md:flex space-x-4">
                    <li><a href="#" class="hover:text-gray-400">Home</a></li>
                    <li><a href="#" class="hover:text-gray-400">About us</a></li>
                    <li><a href="#" class="hover:text-gray-400">Forums</a></li>
                    <li><a href="#" class="hover:text-gray-400">Services</a></li>
                    <li><a href="#" class="hover:text-gray-400">Projects</a></li>
                    <li><a href="#" class="hover:text-gray-400">Contact us</a></li>
                </ul>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu-overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

        <!-- Mobile Menu Sliding Panel -->
        <div id="mobile-menu" class="fixed inset-y-0 left-0 w-72 bg-gray-300 transform -translate-x-full transition-transform duration-300 z-50">
            <!-- Mobile Menu Close Button same functionality as Mobile Overlay -->
            <div class="flex justify-end p-4">
                <button id="close-button" class="focus:outline-none border border-black">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <ul class="px-3">
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Home</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">About Us</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Forums</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Services</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Projects</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Contact Us</a></li>
            </ul>
        </div>