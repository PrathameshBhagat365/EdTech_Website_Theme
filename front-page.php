<?php
/**
 * Template Name: Front Page
 */
get_header();
?>

<!-- Hero Section -->
<section class="hero-section">
    <?php get_template_part('template-parts/home/hero'); ?>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <?php get_template_part('template-parts/home/features'); ?>
    </div>
</section>

<!-- Course List Section -->
<section class="course-list">
    <div class="container">
        <?php get_template_part('template-parts/home/course-list'); ?>
    </div>
</section>

<?php
get_footer();
