<?php 
get_header();
$forum_terms = get_terms(['forum']);
?>

<div id="primary" class="content-area flex-grow">
    <div class="container mx-auto py-8 px-4 lg:px-0">
        <div class="page-header">
            <h1 class="page-title"><?php the_title() ?></h1>    
        </div>
        <!-- Main Content Start -->
        <?php if(!empty($forum_terms)): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php foreach($forum_terms as $term): ?>
                <!-- Forum Card Start -->
                <div class="bg-gray-200 rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold mb-4"><?php echo $term->name ?></h2>
                    <?php if(!empty($term->description)): ?>
                        <p class="text-gray-600 mb-4"><?php echo $term->description ?></p>
                    <?php endif; ?>
                    <a class="text-blue-500 hover:underline bg-white rounded-lg p-2" href="<?php echo get_term_link($term) ?>"><?php _e('View Topics', 'mponsportal') ?></a>
                </div>
                <!-- Forum Card End -->
            <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-danger">No forums found</p>
        <?php endif; ?>
        <!-- Main Content End -->
    </div>
</div>

<?php get_footer() ?>