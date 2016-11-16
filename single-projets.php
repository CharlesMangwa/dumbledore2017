<?php
/*
Single Post Template: [single-projet]
*/
?>
<?php get_header(); ?>
<main class="SingleActu">
  <div class="SingleActu__thumbnail">
    <?php the_post_thumbnail(); ?>
  </div>
  <?php
  // boucle WordPress
  if (have_posts()){
    while (have_posts()){
      the_post();
      get_template_part( 'templates/partials/projet-panels-single');
    }
  }
  ?>
</main>
<?php get_footer(); ?>
