<?php 
get_header();
$forum_terms = get_terms(['forum']);
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container mx-auto py-8">
            <header class="page-header">
                <h1 class="page-title"><?php the_title() ?></h1>    
            </header>
            <!-- Main Content Start -->
            <?php if(!empty($forum_terms)): ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php foreach($forum_terms as $term): ?>
                    <!-- Forum Card Start -->
                    <div class="bg-white rounded-lg">
                        <a href="<?php echo get_term_link($term) ?>"><?php echo $term->name ?></a>    
                    </div>
                    <!-- Forum Card End -->
                <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-danger">No forums found</p>
            <?php endif; ?>
            <!-- Main Content End -->
        </div>
    </main>
</div>

<?php get_footer() ?>