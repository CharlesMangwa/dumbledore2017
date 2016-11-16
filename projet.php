<?php
/*
Template Name: projet
*/
?>
<?php get_header(); ?>
<main class="ProjetTemplate">
  <ul class="ProjetTemplate__headings MainWrapper">
    <li><h4>notre projet</h4></li>
    <li><h2>nos propositions</h2></li>
    <li>
      <ul class="ProjetTemplate__headings__tiles">
        <li>éducation</li>
        <li>emploi</li>
        <li>justice</li>
        <li>santé</li>
        <li>sécurité</li>
        <li>culture</li>
      </ul>
    </li>
  </ul>
  <ul class="ProjetTemplate__projects MainWrapper">
    <?php
      $args = array(
        'post_type' => 'projets',
      );
      $the_projets_query = new WP_Query( $args );

     ?>
    <?php if ( $the_projets_query->have_posts() ) : ?>
        <?php while ( $the_projets_query->have_posts() ) : $the_projets_query->the_post(); ?>
          <?php get_template_part( 'templates/partials/panels-projet');?>
        <?php endwhile; ?>
    <?php endif; ?>
  </ul>
</main>
<?php get_footer(); ?>
