<?php get_header() ?>
<main>
  <div class="container container--grid">
    <h1 class="blog__title"><?php single_post_title();; ?></h1>
    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>
          <?php if (get_the_post_thumbnail()) : ?>
            <div class="post__image">
              <a href="<?php the_permalink(); ?>" class="post__image-link">
                <?php the_post_thumbnail(); ?>
                <span class="post__image-overlay"></span>
              </a>
            </div>
          <?php endif; ?>
          <h2 class="post__title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
          </h2>
          <div class="post__date">
            <span class="screen-reader-text">Article publié le :</span>
            <i class="fa-solid fa-clock" aria-hidden="true"></i>
            <?php echo get_the_date(); ?>
          </div>
          <div class="post__excerpt">
            <?php
            $excerpt = rtrim(get_the_excerpt(), "[&hellip; ]") . "...";
            echo $excerpt;
            ?>
          </div>
          <div class="post__readmore">
            <a href="<?php the_permalink(); ?>">Lire la suite<i class="fa fa-angle-right" aria-hidden="true"></i></a>
          </div>
        </article>
      <?php endwhile; ?>
      <div class="blog__pagination">
        <?php
        the_posts_pagination([
          'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i>',
          'next_text' => '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        ]);
        ?>
      </div>
    <?php else : ?>
      <p>Aucun article n'a été publié.</p>
    <?php endif; ?>
  </div>
</main>
<?php get_footer() ?>