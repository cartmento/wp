<?php
/**
 * Generic Page template — used for any Page that isn't
 * services / pricing / portfolio / contact / the front page
 * (e.g. a future "Privacy Policy" or "Terms" page).
 */
get_header();
?>

<section class="page-hero">
  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
    <?php endwhile; ?>
  </div>
</section>

<section class="section">
  <div class="container" style="max-width:760px;">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  </div>
</section>

<?php get_footer(); ?>
