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

      // if( is_front_page() ){
      //     $paged = (get_query_var('page')) ? get_query_var('page') : 1;
      // } else {
      //     $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      // }

      $args = array(
        'post_type' => 'projets',
        'posts_per_page' => 6,
        // 'paged' => $paged,
      );
      $the_projets_query = new WP_Query( $args );
      if ( $the_projets_query->have_posts() ) : while ( $the_projets_query->have_posts() ) : $the_projets_query->the_post();
        get_template_part( 'templates/partials/panels-projet');
        endwhile;
      endif;
     ?>
  </ul>

  <?php
    // if( $the_projets_query->max_num_pages > $paged)
    // {
    //     echo '<a href="#" class="button buttonMore" data-id="'.$term_id.'" data-paged="'.($paged+1).'">Voir plus</a>';
    // }
   ?>
</main>
<?php get_footer(); ?>
