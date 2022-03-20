<footer>
  <div class="container">
    <nav class="shopping-nav">
      <ul class="shopping-nav__list">
        <li class="shopping-nav__list-item">
          <a class="shopping-nav__link" href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))) ?>">
            <span class="sr-only">Mon compte</span>
            <i class="fa-solid fa-user" aria-hidden="true"></i></a>
        </li>
        <li class="shopping-nav__list-item">
          <span class="sr-only">Recherche</span>
          <?php echo do_shortcode('[fibosearch layout="icon" mobile_overlay="1"]'); ?>
        </li>
        <!-- <li class="shopping-nav__list-item">
          <a class="shopping-nav__link" href="">
         
          <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
          </a>
          <div class="shopping-nav__search">
        <?php echo do_shortcode('[fibosearch]'); ?>
      </div>
        </li> -->
        <li class="shopping-nav__list-item">
          <a class="shopping-nav__link" href="<?php echo esc_url(wc_get_cart_url()); ?>">
            <span class="sr-only">Panier</span>
            <i class="fa-solid fa-basket-shopping" aria-hidden="true"></i>
            <span class="shopping-nav__cart-count"><?php echo wp_kses_data(WC()->cart->get_cart_contents_count()); ?></span>
          </a>
        </li>
      </ul>
    </nav>
    <nav>
      <?php
      wp_nav_menu([
        'theme_location' => 'footer',
        'menu_class' => 'menu menu--footer',
        'container' => false,
      ])
      ?>
    </nav>
  </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>