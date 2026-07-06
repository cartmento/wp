<?php
/**
 * The main template file — required fallback for every WordPress theme.
 * Used for any content type that doesn't have a more specific template
 * (e.g. blog post archives, search results, single blog posts).
 */
get_header();
?>

<section class="section">
  <div class="container" style="max-width:760px;">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?> style="margin-bottom:48px;">
          <h1><?php the_title(); ?></h1>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>

      <?php the_posts_pagination(); ?>

    <?php else : ?>
      <h1>Nothing Found</h1>
      <p>Sorry, no content matched your request.</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
