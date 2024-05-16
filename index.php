<?php 
get_header();
// get all topics with the participants that they created them
$topic_args = [
    'post_type' => 'topic',
    'posts_per_page' => -1
];
$topics_query = new WP_Query($topic_args);
?>
<div id="primary" class="content-area flex-grow">
    <section class="hero">
        <div class="container">
            <h1 class="text-xl"><?php bloginfo('name') ?></h1>
            <p class="text-center">Simple homepage created using custom theme</p>
        </div>
    </section>
    <?php if(!empty($topics_query->have_posts())) {
            ?>
        <ul>
            <?php while($topics_query->have_posts()) {
                $topics_query->the_post(); ?>
                <div class="topic-body my-5">
                    <h3 class="underline mb-3">
                        <a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a>
                    </h3>
                    <div class="topic-content">
                        <?php echo get_the_content() ?>
                    </div>
                    <?php if($participant_id = get_post_meta(get_the_ID(), 'mpons-forum-topic-participant', true)): ?>
                        <span class="topic-author font-semibold"><?php echo get_the_author_meta( 'display_name', $participant_id ) ?></span>
                    <?php endif; ?>
                </div>
            <?php } ?>
        </ul>
    <?php } else { ?>
        <p>No topics found</p>
    <?php } ?>
</div>

<?php get_footer() ?>