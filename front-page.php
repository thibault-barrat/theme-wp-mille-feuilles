<?php get_header() ?>
<main>
  <section class="banner">
    <?php $sup_banner = get_field('sup_banner'); ?>
    <div class="banner__background">
      <img class="banner__background" src="<?php echo esc_url($sup_banner['background']['url']); ?>" alt="" />
    </div>
    <div class="container">
      <h1 class="banner__title"><?php echo esc_html($sup_banner['left_text']); ?></h1>
      <h2 class="banner__title banner__title--small"><?php echo esc_html($sup_banner['right_text']); ?></h2>
    </div>
  </section>
  <section class="events">
    <?php $events = get_field('events'); ?>
    <div class="container">
      <h2 class="events__title homepage-section-title"><?php echo esc_html($events['title']); ?></h2>
      <div class="events__row">
        <div class="events__image">
          <img src="<?php echo esc_url($events['image']['url']); ?>" alt="" />
        </div>
        <div class="events__content">
          <?php echo wp_kses_post($events['content']); ?>
        </div>
      </div>

    </div>
  </section>
  <section class="book-focus">
    <?php $book_focus = get_field('book_focus'); ?>
    <div class="container">
      <h2 class="book-focus__title homepage-section-title"><?php echo esc_html($book_focus['title']); ?></h2>
      <div class="book-focus__content">
        <?php echo do_shortcode('[products orderby="rand" visibility="featured"]'); ?>
      </div>
    </div>
  </section>
  <section class="contact">
    <?php $contact = get_field('contact'); ?>
    <div class="container">
      <h2 class="contact__title homepage-section-title homepage-section-title--light"><?php echo esc_html($contact['title']); ?></h2>
      <div class="contact__form">
        <?php echo do_shortcode($contact['form']); ?>
      </div>
      <div class="contact__details">
        <?php echo wp_kses_post($contact['details']); ?>
        <?php echo do_shortcode($contact['map']); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>