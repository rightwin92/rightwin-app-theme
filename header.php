<?php if (!defined('ABSPATH')) exit; ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class('rwapp-body'); ?>>
<header class="rwapp-header">
  <div class="rwapp-wrap">
    <div class="rwapp-brand">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="rwapp-logo">RightWin</a>
    </div>
    <nav class="rwapp-nav">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false,
          'fallback_cb' => '__return_false',
          'menu_class' => 'rwapp-menu',
          'depth' => 1
        ]);
      ?>
    </nav>
  </div>
</header>
<main class="rwapp-main">
  <div class="rwapp-container">
