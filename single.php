<?php get_header(); ?>

<div class="main">
  <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="<?php the_title(); ?> container">
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
    </div>
  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
