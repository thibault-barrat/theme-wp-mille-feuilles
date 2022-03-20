<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>

<body <?php body_class(); ?>>
  <header>
    <div class="container">
      <?php
      if (function_exists('the_custom_logo')) {
        the_custom_logo();
      } ?>
      <nav class="nav--secondary">
        <?php
        wp_nav_menu([
          'theme_location' => 'secondary-menu',
          'menu_class' => 'menu menu--secondary',
          'container' => false,
        ])
        ?>
      </nav>
      <div class="site-search">
        <?php echo do_shortcode('[fibosearch]'); ?>
      </div>
      <nav class="nav" id="navigation">
        <?php
        wp_nav_menu([
          'theme_location' => 'mobile-main-menu',
          'menu_class' => 'menu menu--mobile',
          'container' => false,
        ]);
        wp_nav_menu([
          'theme_location' => 'main-menu',
          'menu_class' => 'menu menu--main',
          'container' => false,
        ]);
        ?>
      </nav>
      <div class="header-cart">
      
      <a class="cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="Voir votre panier">
      <i class="fa-solid fa-basket-shopping"></i>
				<?php echo wp_kses_post(WC()->cart->get_cart_subtotal()); ?> <span class="count"><?php echo wp_kses_data(sprintf(_n('%d livre', '%d livres', WC()->cart->get_cart_contents_count(), 'storefront'), WC()->cart->get_cart_contents_count())); ?></span>
			</a>
      </div>
      <button class="hamburger" type="button" aria-expanded="false" aria-controls="navigation" aria-label="menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>