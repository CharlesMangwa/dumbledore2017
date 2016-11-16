<?php
/*
Template Name: rejoindre
*/
?>
<?php get_header(); ?>
<main class="SingleActu">
  <div class="SingleActu__thumbnail">
    <img src="<?php bloginfo( 'template_url' )?>/assets/images/dumby.png" alt="logo" class="AboutImage"/>
  </div>
  <?php
    $args = array(
      'post_type' => 'projets',
      'posts_per_page' => 1,
    );
    $the_actu_query = new WP_Query( $args );

   ?>

   <?php if ( $the_actu_query->have_posts() ) : ?>
       <?php while ( $the_actu_query->have_posts()) : $the_actu_query->the_post(); ?>
         <?php
               get_template_part( 'templates/partials/rejoindre-template');
          ?>
       <?php endwhile; ?>
   <?php endif; ?>
</main>
<?php get_footer(); ?>
