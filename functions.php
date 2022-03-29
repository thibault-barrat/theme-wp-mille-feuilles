<?php

function theme_enqueue_styles()
{

  // Get the theme data
  $the_theme = wp_get_theme();
  wp_enqueue_style('mille-feuille-style', get_template_directory_uri() . '/assets/style.css', array(), $the_theme->get('Version'));
  wp_enqueue_script('mille-feuille-script', get_template_directory_uri() . '/assets/app.js', array(), $the_theme->get('Version'), true);
  wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/41be139bfe.js', array(), $the_theme->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// add footer and main menus
function register_my_menu()
{
  register_nav_menu('main-menu', 'Menu principal');
  register_nav_menu('mobile-main-menu', 'Menu principal mobile');
  register_nav_menu('secondary-menu', 'Menu secondaire');
  register_nav_menu('footer', 'Footer');
}
add_action('after_setup_theme', 'register_my_menu');

// add custom logo feature
add_theme_support('custom-logo');

// change Fibosearch icon
add_filter('dgwt/wcas/form/magnifier_ico', function ($html, $class) {
  $html = '<i class="fa-solid fa-magnifying-glass ' . $class . '" aria-hidden="true"></i>';
  return $html;
}, 10, 2);

// customize excerpt length
function my_excerpt_length($length)
{
  return 30;
}
add_filter('excerpt_length', 'my_excerpt_length');
