
<?php
/**
 * EduLearn Block Theme Functions
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Setup theme support
 */
function edulearn_setup() {
    // Add support for block styles
    add_theme_support('wp-block-styles');
    
    // Add support for responsive embeds
    add_theme_support('responsive-embeds');
    
    // Add support for editor styles
    add_theme_support('editor-styles');
    
    // Add support for custom line height
    add_theme_support('custom-line-height');
    
    // Add support for custom spacing
    add_theme_support('custom-spacing');
    
    // Add support for custom units
    add_theme_support('custom-units');
}
add_action('after_setup_theme', 'edulearn_setup');

/**
 * Enqueue theme styles
 */
function edulearn_enqueue_styles() {
    wp_enqueue_style(
        'edulearn-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'edulearn_enqueue_styles');

/**
 * Register block patterns category
 */
function edulearn_register_pattern_categories() {
    register_block_pattern_category(
        'edulearn',
        array('label' => __('EduLearn Patterns', 'edulearn'))
    );
}
add_action('init', 'edulearn_register_pattern_categories');
?>
