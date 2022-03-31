<?php get_header() ?>
<main>
  <div class="container">
    <h1>
      <?php
      printf(esc_attr__('Résultats pour la recherche : %s'), '<span>' . get_search_query() . '</span>');
      ?>
    </h1>
    <?php if (have_posts()) :
    $ids_list = array();
      while (have_posts()) :
        the_post();
        $ids_list[] = get_the_ID();
      endwhile;
      echo do_shortcode('[products ids="' . implode(",", $ids_list) . '"]');
    else : ?>

      <p>Aucun livre n'a été trouvé.</p>

    <?php endif; ?>
  </div>
</main>
<?php get_footer() ?>