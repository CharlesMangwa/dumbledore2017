<?php
/**
 * Template Name: Nos actualités
 */
?>

<?php get_header(); ?>

      <?php if ( have_posts() ) : ?>

          <?php while ( have_posts() ) : the_post(); ?>
              <?php  get_template_part( 'templates/partials/content-actu'); ?>
          <?php endwhile; ?>

      <?php else : ?>

          <?php get_template_part( 'templates/partials/content', 'none' ); ?>

      <?php endif; ?>

<?php get_footer(); ?>
