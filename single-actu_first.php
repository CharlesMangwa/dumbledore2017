<?php
/*
Single Post Template: [single-actus]
*/
?>
<?php get_header(); ?>

<main class="SingleActu">
  <div class="SingleActu__thumbnail">
    <?php the_post_thumbnail(); ?>
  </div>
  <?php
    $args = array(
      'post_type' => 'actu_first',
      'posts_per_page' => 1,
    );
    $the_actu_query = new WP_Query( $args );

   ?>

   <?php if ( $the_actu_query->have_posts() ) : ?>
       <?php while ( $the_actu_query->have_posts()) : $the_actu_query->the_post(); ?>
         <?php
               get_template_part( 'templates/partials/actus-panels-single');
          ?>
       <?php endwhile; ?>
   <?php endif; ?>
</main>

<?php get_footer(); ?>
