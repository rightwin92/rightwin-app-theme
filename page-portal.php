<?php
/**
 * Template Name: RightWin Portal (Full Width)
 */
if (!defined('ABSPATH')) exit;
get_header(); ?>

<div class="rwapp-portal">
  <?php
    // render the page content (you can insert shortcodes here via editor or Elementor)
    while (have_posts()): the_post();
      the_content();
    endwhile;

    // optional: auto-inject the portal shortcodes if page is empty
    $content = trim(strip_tags(get_post_field('post_content', get_the_ID())));
    if (empty($content)) {
      echo do_shortcode('[rightwin_native_login redirect="/portal/"]');
      echo do_shortcode('[rightwin_logout_link redirect="/portal/"]');
      echo do_shortcode('[rightwin_qr_form]');
    }
  ?>
</div>

<?php get_footer(); ?>
