<?php
/**
 * Theme Functions
 * EdTech Website Theme
 */

/* --------------------------------------------------------------
   THEME SETUP
-------------------------------------------------------------- */
function edtech_theme_setup() {

    // Enable featured images
    add_theme_support('post-thumbnails');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Support Gutenberg wide alignment
    add_theme_support('align-wide');

    // Support editor styles
    add_theme_support('editor-styles');
    add_editor_style('style.css');

    // Register menus
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'edtech-theme'),
        'footer-menu'  => __('Footer Menu', 'edtech-theme'),
    ));
}
add_action('after_setup_theme', 'edtech_theme_setup');


/* --------------------------------------------------------------
   ENQUEUE SCRIPTS & STYLES
-------------------------------------------------------------- */
function edtech_enqueue_scripts() {

    // Main stylesheet
    wp_enqueue_style('edtech-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));

    // Optional Google Fonts
    wp_enqueue_style(
        'edtech-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap',
        false
    );

    // Include JavaScript (if needed later)
    wp_enqueue_script(
        'edtech-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'edtech_enqueue_scripts');


/* --------------------------------------------------------------
   REGISTER CUSTOM POST TYPE: COURSES
-------------------------------------------------------------- */
function edtech_register_courses_cpt() {

    $labels = array(
        'name'               => __('Courses', 'edtech-theme'),
        'singular_name'      => __('Course', 'edtech-theme'),
        'add_new'            => __('Add New Course'),
        'add_new_item'       => __('Add New Course'),
        'edit_item'          => __('Edit Course'),
        'menu_name'          => __('Courses'),
    );

    $args = array(
        'label'               => __('Courses', 'edtech-theme'),
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'menu_icon'           => 'dashicons-welcome-learn-more',
        'show_in_rest'        => true, // Gutenberg support
        'supports'            => array('title', 'editor', 'thumbnail'),
        'rewrite'             => array('slug' => 'courses'),
    );

    register_post_type('course', $args);
}
add_action('init', 'edtech_register_courses_cpt');


/* --------------------------------------------------------------
   REGISTER TAXONOMY: COURSE CATEGORY
-------------------------------------------------------------- */
function edtech_register_course_taxonomy() {

    $args = array(
        'label'        => __('Course Categories', 'edtech-theme'),
        'rewrite'      => array('slug' => 'course-category'),
        'hierarchical' => true,
        'show_in_rest' => true // Gutenberg support
    );

    register_taxonomy('course_category', 'course', $args);
}
add_action('init', 'edtech_register_course_taxonomy');


/* --------------------------------------------------------------
   ALLOW TEMPLATE PART REUSABILITY
-------------------------------------------------------------- */
function edtech_template_path($slug) {
    get_template_part('template-parts/' . $slug);
}
