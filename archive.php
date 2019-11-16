<?php get_header(); ?>

<main class="archive-main">
  <div class="archive-main__container container">
    <h1 class="archive-main__title">recent posts</h1>
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="card card--archive">
        <h3 class="card__title card__title--archive"><?php the_title(); ?></h3>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="card__button card__button--archive">read more</a>
      </div>
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>
