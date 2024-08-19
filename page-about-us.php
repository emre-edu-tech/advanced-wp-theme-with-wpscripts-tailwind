<?php get_header(); ?>
<div id="primary" class="flex-grow">
    <section>
        <div class="content-area">
            <h1 class="page-title"><?php single_post_title() ?></h1>
        </div>
    </section>
    <section class="alternative">
        <h2 class="section-title"><?php _e('Company Background', 'mponsportal') ?></h2>
        <div class="content-area flex flex-col md:flex-row items-center">
            <!-- Text Section -->
            <div class="section-column pr-12 w-full md:w-1/2 order-2 md:order-1">
                <h3 class="column-title">Founded in 2015</h3>
                <p class="text-gray-700 mb-4">Our company was founded in 2015 with a vision to meet the growing technology and internet needs of local businesses around Frankfurt.</p>
                <h4 class="paragraph-title">Inspired by Local Businesses</h4>
            </div>
            <div class="section-column w-full md:w-1/2 order-1 md:order-2 mb-5 md:mb-0">
                <img class="section-img" src="<?php echo get_theme_file_uri('/theme-img/hero-img.webp') ?>" alt="Media Pons">
            </div>
        </div>
    </section>
</div>
<?php get_footer() ?>