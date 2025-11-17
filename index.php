<?php
/**
 * Main Index Template (Fallback)
 */

get_header();
?>

<div class="container blog-index-page">

    <h1 class="archive-title text-center">Latest Posts</h1>

    <?php if ( have_posts() ) : ?>

        <div class="post-list mt-40">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part('template-parts/content/content-post'); ?>

            <?php endwhile; ?>

        </div>

        <!-- Pagination -->
        <div class="pagination mt-40 text-center">
            <?php echo paginate_links(); ?>
        </div>

    <?php else : ?>

        <p>No posts found.</p>

    <?php endif; ?>

</div>

<?php
get_footer();
