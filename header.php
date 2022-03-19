<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>

<body <?php body_class(); ?>>
  <header>
    <nav>
      <a href="/"><?php
if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
} ?></a>
      <?php
      wp_nav_menu([
        'theme_location' => 'main-menu',
        'container' => false,
      ])
      ?>
    </nav>
  </header>
