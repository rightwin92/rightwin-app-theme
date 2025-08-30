<?php
if (!defined('ABSPATH')) exit;

add_action('after_setup_theme', function() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('html5', ['search-form','comment-form','gallery','caption','script','style']);
  register_nav_menus([
    'primary' => __('Primary Menu','rightwin-app-theme'),
  ]);
});

/* enqueue minimal CSS/JS (kept super light) */
add_action('wp_enqueue_scripts', function(){
  wp_enqueue_style('rightwin-app', get_template_directory_uri().'/assets/css/app.css', [], '1.0.0');
  wp_enqueue_script('rightwin-app', get_template_directory_uri().'/assets/js/app.js', ['jquery'], '1.0.0', true);
});

/* Elementor niceties */
add_action('elementor/theme/register_locations', function($elementor_theme_manager){
  // allow Elementor to manage header/footer if you wish; we keep defaults simple
  // $elementor_theme_manager->register_all_core_location(); // optional
});

/* disable default content width constraints for a true full-width feel */
if (!isset($content_width)) { $content_width = 1600; }
