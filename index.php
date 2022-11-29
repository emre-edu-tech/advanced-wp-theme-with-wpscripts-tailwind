<?php
/** 
 * Main Template File
 * 
 * @package LimitlessWP
 */

get_header();
?>
    <div id="primary">
        <main id="main" class="site-main my-5" role="main">
            <?php
                if(have_posts()) { ?>
                    <div class="container">
                        <?php
                            while (have_posts()) {
                                the_post(); ?>
                                <h2><?php the_title() ?></h2>
                                <p><?php the_excerpt() ?></p>
                            <?php }
                        ?>
                    </div>
                <?php }
            ?>
        </main>
    </div>
<?php
get_footer();