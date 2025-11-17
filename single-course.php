<?php
/**
 * Template for displaying a single Course
 */

get_header();
?>

<div class="container single-course-page">

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
    ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('single-course'); ?>>

        <!-- Course Title -->
        <h1 class="course-title"><?php the_title(); ?></h1>

        <!-- Course Thumbnail -->
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="course-featured-image">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>

        <!-- Course Meta -->
        <div class="course-meta-wrapper">
            <?php get_template_part('template-parts/course/course-meta'); ?>
        </div>

        <!-- Course Content -->
        <div class="course-content mt-40">
            <?php the_content(); ?>
        </div>

    </article>

    <?php
        endwhile;
    else :
        echo '<p>No course found.</p>';
    endif;
    ?>

</div>

<?php
get_footer();
