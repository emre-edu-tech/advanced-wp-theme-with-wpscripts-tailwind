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
                <p>Our team develops custom Wordpress websites. We will give you permanent advice about how to create your online presence and using our customer forums, you can find answers to your technical questions.</p>
            </div>
            <div class="section-column w-full md:w-1/2 order-1 md:order-2 mb-5 md:mb-0">
                <img class="section-img" src="<?php echo get_theme_file_uri('/theme-img/hero-img.webp') ?>" alt="Media Pons">
            </div>
        </div>
    </section>
    <section class="alternative">
        <div class="content-area flex">
            Contact Section will be here
        </div>
    </section>
</div>

<?php get_footer() ?>