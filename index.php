<?php
/**
 * Displays standard posts
 */
?>

<?php get_header(); ?>
<div class="Homepage">
  <section class="Homepage__heading">

  </section>

</div>

<main class="Homepage__content MainWrapper">
  <ul class="Homepage__content__section">
    <li class="Homepage__content__section__about">
      <?php if ( have_posts() ) : ?>

          <?php while ( have_posts() ) : the_post(); ?>
              <?php  get_template_part( 'templates/partials/content-landing'); ?>
          <?php endwhile; ?>

          <?php if ($wp_query->max_num_pages > 1) : ?>
              <?php get_template_part( 'templates/partials/pager' ); ?>
          <?php endif; ?>

      <?php else : ?>

          <?php get_template_part( 'templates/partials/content', 'none' ); ?>

      <?php endif; ?>
    </li>
    <li class="Homepage__content__section__dunno">

    </li>
  </ul>
</main>

<?php get_footer(); ?>
