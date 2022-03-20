<?php get_header() ?>
<main>
  <?php $sup_banner = get_field('sup_banner'); ?>
  <section class="banner">
    <div class="banner__background">
      <img class="banner__background" src="<?php echo esc_url($sup_banner['background']['url']); ?>" alt="" />
    </div>
    <div class="container">
      <h1 class="banner__title"><?php echo esc_html($sup_banner['left_text']); ?></h1>
      <h2 class="banner__subtitle"><?php echo esc_html($sup_banner['right_text']); ?></h2>
    </div>
  </section>
</main>
<?php get_footer() ?>