<?php get_header() ?>
<main>

  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
    endwhile;
  endif;
  ?>
  <?php the_title(); ?>

  <?php the_content(); ?>
</main>
<?php get_footer() ?>