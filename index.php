<?php
/** 
 * Main Template File
 * 
 * @package LimitlessWP
 */

get_header();
?>
    <div id="primary">
        <main id="main" class="site-main py-5" role="main">
            <?php
                if(have_posts()) { ?>
                    <div class="container">
                        <?php if(is_home() && !is_front_page()) { ?>
                            <header class="mb-5">
                                <h1 class="page-title">
                                    <?php single_post_title() ?>
                                </h1>
                            </header>
                        <?php } ?>
                        <!-- Posts will be printed below using B4 Grid System -->
                        <div class="row g-4">
                            <?php
                                // Prepare for the Bootstrap Grid
                                // Get the total number of posts
                                // This will be used if there is a functionality wanted from backend
                                $number_of_cols = 3;
                                while (have_posts()) { 
                                    the_post(); ?>
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="p-3 border h-100">
                                                <h3><?php the_title() ?></h3>
                                                <div><?php the_excerpt() ?></div>
                                            </div>
                                        </div>
                                <?php }
                            ?>
                        </div>
                    </div>
                <?php } else {
                    _e('Sorry there are no blog posts available');
                }
            ?>
        </main>
    </div>
<?php
get_footer();