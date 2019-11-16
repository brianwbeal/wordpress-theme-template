<?php get_header(); ?>

<main class="single-main">
  <div class="single-main__container container">
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
      <h1 class="single-main__title"><?php the_title(); ?></h1>
      <p class="single-main__content"><?php the_content(); ?></p>
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>
