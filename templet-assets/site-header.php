<header class="site-header">
  <div class="container">
    <?php
      if ( function_exists('the_custom_logo') ) {
          the_custom_logo();
      }
    ?>

    <nav class="main-navigation">
      <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
    </nav>
  </div>
</header>

