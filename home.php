<?php get_header() ?>
<main>
  <div class="container">
    <h1><?php single_post_title();; ?></h1>
    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>
          <div class="thumbnail">
            <a href="<?php the_permalink(); ?>" class="thumbnail-link">
              <?php the_post_thumbnail(); ?>
            </a>
          </div>
          <header class="blog-entry-header clr">
            <h2 class="blog-entry-title entry-title">
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h2>
          </header>
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
          <div class="blog-entry-readmore clr">
            <a href="<?php the_permalink(); ?>">Lire la suite<i class="fa fa-angle-right" aria-hidden="true"></i></a>
          </div>
        </article>
    <?php
      endwhile;
    endif;
    ?>
  </div>
</main>
<?php get_footer() ?>