<?php get_header(); ?>

<div class="main">
  <div class="blog container">
    <h1>blog</h1>
    <div class="blog-posts">
      <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="card">
          <div class="card-body">
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>
          </div>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
