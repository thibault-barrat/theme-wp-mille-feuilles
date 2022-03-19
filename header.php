<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>

<body <?php body_class(); ?>>
  <header>

    <?php
    if (function_exists('the_custom_logo')) {
      the_custom_logo();
    } ?>
    <nav class="nav" id="navigation">
      <?php
      wp_nav_menu([
        'theme_location' => 'main-menu',
        'container' => false,
      ])
      ?>
    </nav>
    <button class="hamburger" type="button" aria-expanded="false" aria-controls="navigation" aria-label="menu">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </header>