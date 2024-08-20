<?php
function enqueue_theme_styles() {
  // Enqueue main stylesheet
  // Register the Bulma CSS file from CDN
  wp_enqueue_style('Bulma-css', 'https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css', array(), null, 'all');
  wp_enqueue_style('Font-Awsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), null, false);
  wp_enqueue_style('style.css', get_template_directory_uri() . '/style.css', array('Bulma-css'), null, false);
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');

function enqueue_theme_scripts() {
  // Enqueue scripts here
  wp_enqueue_script('nav-ham', get_template_directory_uri() . '/common.js', array(), null, true);
  if (is_single()) {
    wp_enqueue_script('zoom-slider', get_template_directory_uri() . '/product-slider.js', array(), null, true);
    wp_enqueue_script('zoom-zoom', get_template_directory_uri() . '/product-zoom.js', array(), null, true);
  }
}
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');

function ThemeSupport() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'ThemeSupport');