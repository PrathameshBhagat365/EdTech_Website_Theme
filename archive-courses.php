<?php
/**
 * Archive Template for Courses
 */

get_header();
?>

<div class="container course-archive-page">

    <h1 class="archive-title text-center">Our Courses</h1>

    <div class="course-grid mt-40">
        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>
                
                <?php get_template_part('template-parts/course/course-card'); ?>

            <?php endwhile; ?>

        <?php else : ?>

            <p>No courses available at the moment.</p>

        <?php endif; ?>
    </div>

    <!-- Pagination -->
    <div class="pagination mt-40 text-center">
        <?php echo paginate_links(); ?>
    </div>

</div>

<?php
get_footer();
