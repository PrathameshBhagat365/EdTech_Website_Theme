<section class="course-list-section">
  <div class="container">
    <h2>Popular Courses</h2>

    <?php
    $courses = new WP_Query(array(
      'post_type' => 'course',
      'posts_per_page' => 3
    ));

    if ($courses->have_posts()) :
      echo '<div class="course-grid">';
      while ($courses->have_posts()) : $courses->the_post();
        get_template_part('template-parts/course/course-card');
      endwhile;
      echo '</div>';
    else :
      echo '<p>No courses available.</p>';
    endif;

    wp_reset_postdata();
    ?>
  </div>
</section>

