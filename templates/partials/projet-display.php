<ul class="ProjetTemplate__projects MainWrapper">
  <?php
    $args=array(
      'post_type' => 'projets',
      'posts_per_page' => 6,
      'paged' => $paged,
   );
    $the_projets_query = new WP_Query( $args );
    if ( $the_projets_query->have_posts() ) : while ( $the_projets_query->have_posts() ) : $the_projets_query->the_post();
      get_template_part( 'templates/partials/panels-projet');
      endwhile;
    endif;
   ?>
</ul>

<?php
  if( $the_projets_query->max_num_pages > $paged)
  {
      echo '<a href="#" class="button buttonMore MainWrapper" data-paged="'.($paged+1).'">Voir plus</a>';
  }
 ?>
