<?php
get_header();
// get all topics with the participants that they created them
$topic_args = [
    'post_type' => 'topic',
    'posts_per_page' => -1
];
$topics_query = new WP_Query($topic_args);
?>
<div id="primary" class="flex-grow">
    <section>
        <div class="content-area flex flex-col md:flex-row items-center">
            <div class="section-column pr-12 w-full md:w-1/2 order-2 md:order-1">
                <h1 class="column-title"><?php bloginfo('name') ?></h1>
                <p class="mb-4">Our team develops custom Wordpress websites. We will give you permanent advice about how to create your online presence and you can find answers to your technical questions by using our customer forums. </p>
                <a class="theme-button-primary inline-block mr-4" href="<?php echo esc_url(site_url('/forums')) ?>"><?php _e('View Forums', 'mponsportal') ?></a>
                <a class="theme-button-primary inline-block bg-gray-600 text-white font-bold p-2 hover:bg-gray-400 transition-colors duration-300" href="#"><?php _e('Contact us', 'mponsportal') ?></a>
            </div>
            <div class="section-column w-full md:w-1/2 order-1 md:order-2 mb-5 md:mb-0">
                <img class="section-img" src="<?php echo get_theme_file_uri('/theme-img/hero-img.webp') ?>" alt="Media Pons">
            </div>
        </div>
    </section>
    <!-- Our Services section -->
    <section class="alternative">
        <div class="content-area">
            <div class="section-title"><?php _e('Our Services', 'mponsportal') ?></div>
            <!-- Services -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service -->
                <div class="service">
                    <!-- Icon -->
                    <div class="mb-4 flex justify-center">
                        <svg class="w-10 h-10 text-gray-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M109.5 244l134.6-134.6-44.1-44.1-61.7 61.7a7.9 7.9 0 0 1 -11.2 0l-11.2-11.2c-3.1-3.1-3.1-8.1 0-11.2l61.7-61.7-33.6-33.7C131.5-3.1 111.4-3.1 99 9.3L9.3 99c-12.4 12.4-12.4 32.5 0 44.9l100.2 100.2zm388.5-116.8c18.8-18.8 18.8-49.2 0-67.9l-45.3-45.3c-18.8-18.8-49.2-18.8-68 0l-46 46 113.2 113.2 46-46zM316.1 82.7l-297 297L.3 487.1c-2.5 14.5 10.1 27.1 24.6 24.6l107.5-18.8L429.3 195.9 316.1 82.7zm186.6 285.4l-33.6-33.6-61.7 61.7c-3.1 3.1-8.1 3.1-11.2 0l-11.2-11.2c-3.1-3.1-3.1-8.1 0-11.2l61.7-61.7-44.1-44.1L267.9 402.5l100.2 100.2c12.4 12.4 32.5 12.4 44.9 0l89.7-89.7c12.4-12.4 12.4-32.5 0-44.9z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-center">
                        Web Design
                    </h3>
                    <p class="text-center text-gray-600">Creating visually appealing and user-friendly designs that enhance user experience and engagement.</p>
                </div>
                <!-- Service -->
                <div class="service">
                    <!-- Icon -->
                    <div class="mb-4 flex justify-center">
                        <svg class="w-10 h-10 text-gray-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path d="M149.9 349.1l-.2-.2-32.8-28.9 32.8-28.9c3.6-3.2 4-8.8 .8-12.4l-.2-.2-17.4-18.6c-3.4-3.6-9-3.7-12.4-.4l-57.7 54.1c-3.7 3.5-3.7 9.4 0 12.8l57.7 54.1c1.6 1.5 3.8 2.4 6 2.4 2.4 0 4.8-1 6.4-2.8l17.4-18.6c3.3-3.5 3.1-9.1-.4-12.4zm220-251.2L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM256 51.9l76.1 76.1H256zM336 464H48V48h160v104c0 13.3 10.7 24 24 24h104zM209.6 214c-4.7-1.4-9.5 1.3-10.9 6L144 408.1c-1.4 4.7 1.3 9.6 6 10.9l24.4 7.1c4.7 1.4 9.6-1.4 10.9-6L240 231.9c1.4-4.7-1.3-9.6-6-10.9zm24.5 76.9l.2 .2 32.8 28.9-32.8 28.9c-3.6 3.2-4 8.8-.8 12.4l.2 .2 17.4 18.6c3.3 3.5 8.9 3.7 12.4 .4l57.7-54.1c3.7-3.5 3.7-9.4 0-12.8l-57.7-54.1c-3.5-3.3-9.1-3.2-12.4 .4l-17.4 18.6c-3.3 3.5-3.1 9.1 .4 12.4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-center">
                        Web Development
                    </h3>
                    <p class="text-center text-gray-600">Developing custom web applications tailored to your business needs using the battle-tested web technologies.</p>
                </div>
                <!-- Service -->
                <div class="service">
                    <!-- Icon -->
                    <div class="mb-4 flex justify-center">
                        <svg class="w-10 h-10 text-gray-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M528.1 301.3l47.3-208C578.8 78.3 567.4 64 552 64H159.2l-9.2-44.8C147.8 8 137.9 0 126.5 0H24C10.7 0 0 10.7 0 24v16c0 13.3 10.7 24 24 24h69.9l70.2 343.4C147.3 417.1 136 435.2 136 456c0 30.9 25.1 56 56 56s56-25.1 56-56c0-15.7-6.4-29.8-16.8-40h209.6C430.4 426.2 424 440.3 424 456c0 30.9 25.1 56 56 56s56-25.1 56-56c0-22.2-12.9-41.3-31.6-50.4l5.5-24.3c3.4-15-8-29.3-23.4-29.3H218.1l-6.5-32h293.1c11.2 0 20.9-7.8 23.4-18.7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-center">
                        E-Commerce Development
                    </h3>
                    <p class="text-center text-gray-600">Building powerful and user-friendly e-commerce platforms with WooCommerce to help your business grow online.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Projects Section -->
    <section>
        <div class="content-area">
            <div class="section-title"><?php _e('Our Featured Projects', 'mponsportal') ?></div>
            <!-- Projects -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="project">
                    <img src="<?php echo get_theme_file_uri('/theme-img/projects/cobrasa-home-ss.webp') ?>" alt="Cobrasa GmbH" class="w-full h-48 object-cover mb-4 cursor-pointer" onclick="openLightbox('<?php echo get_theme_file_uri('/theme-img/projects/cobrasa-home-ss.webp') ?>')">
                    <h3 class="text-xl font-bold mb-2 text-center">Cobrasa GmbH</h3>
                    <p class="text-gray-600 mb-4 text-center">Cobrasa E-Commerce offers you a seamless online shopping experience, allowing you to explore and purchase the best Lego sets from the comfort of your home.</p>
                    <div class="text-center">
                        <a href="https://cobrasa-shop.de/" target="_blank" rel="nofollow" class="theme-button-primary">
                            View Project
                        </a>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="project">
                    <img src="<?php echo get_theme_file_uri('/theme-img/projects/nobusol-home-ss.webp') ?>" alt="Nobusol" class="w-full h-48 object-cover mb-4 cursor-pointer" onclick="openLightbox('<?php echo get_theme_file_uri('/theme-img/projects/nobusol-home-ss.webp') ?>')">
                    <h3 class="text-xl font-bold mb-2 text-center">Nobusol</h3>
                    <p class="text-gray-600 mb-4 text-center">Welcome to Nobusol, where innovation meets strategy to propel your business into the future.</p>
                    <div class="text-center">
                        <a href="https://nobusol.com/" class="theme-button-primary" target="_blank" rel="nofollow">
                            View Project
                        </a>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="project">
                    <img src="<?php echo get_theme_file_uri('/theme-img/projects/daydramer-home-ss.webp') ?>" alt="Daydramer" class="w-full h-48 object-cover mb-4 cursor-pointer" onclick="openLightbox('<?php echo get_theme_file_uri('/theme-img/projects/daydramer-home-ss.webp') ?>')">
                    <h3 class="text-xl font-bold mb-2 text-center">DayDramer</h3>
                    <p class="text-gray-600 mb-4 text-center">DayDramer E-Commerce offers you a seamless online shopping experience, allowing you to explore and purchase the best whiskies from the comfort of your home.</p>
                    <div class="text-center">
                        <a href="https://cobrasa-shop.de/" class="theme-button-primary" target="_blank" rel="nofollow">
                            View Project
                        </a>
                    </div>
                </div>
            </div><!-- Grid ends -->
            <div class="text-center mt-12">
                <a href="https://mediapons.de/projekte/" class="theme-button-primary">View All Projects</a>
            </div>
        </div>
    </section>
    <!-- Lightbox Modal for the Project Image -->
    <div id="lightbox" class="fixed inset-0 p-4 bg-black bg-opacity-75 items-center justify-center hidden">
        <button onclick="closeLightbox()" class="absolute top-4 right-4 text-white text-2xl">&times;</button>
        <img id="lightbox-image" src="" alt="Lightbox Image" class="max-w-full lg:max-w-6xl max-h-full rounded">
    </div>
</div>

<?php get_footer() ?>