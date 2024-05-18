<?php get_header() ?>
<?php if (!empty($topics_query->have_posts())) { ?>
    <h2>Forum Topics</h2>
    <ul>
        <?php while ($topics_query->have_posts()) {
            $topics_query->the_post(); ?>
            <div class="topic-body my-5">
                <h3 class="underline mb-3">
                    <a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a>
                </h3>
                <div class="topic-content">
                    <?php echo get_the_content() ?>
                </div>
                <?php if ($participant_id = get_post_meta(get_the_ID(), 'mpons-forum-topic-participant', true)) : ?>
                    <span class="topic-author font-semibold"><?php echo get_the_author_meta('display_name', $participant_id) ?></span>
                <?php endif; ?>
            </div>
        <?php } ?>
    </ul>
<?php } else { ?>
    <p>No topics found</p>
<?php } ?>
<?php get_footer() ?>