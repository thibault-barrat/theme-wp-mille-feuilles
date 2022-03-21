<?php get_header() ?>
<main>
  <section class="banner">
    <?php $sup_banner = get_field('sup_banner'); ?>
    <div class="banner__background">
      <img class="banner__background" src="<?php echo esc_url($sup_banner['background']['url']); ?>" alt="" />
    </div>
    <div class="container">
      <h1 class="banner__title"><?php echo esc_html($sup_banner['left_text']); ?></h1>
      <h2 class="banner__subtitle"><?php echo esc_html($sup_banner['right_text']); ?></h2>
    </div>
  </section>
  <section class="events">
    <?php $events = get_field('events'); ?>
    <div class="container">
      <h2 class="events__title"><?php echo esc_html($events['title']); ?></h2>
      <div class="events__content">
        <?php echo wp_kses_post($events['content']); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>