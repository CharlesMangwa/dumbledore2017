<?php
/*
Template Name: actus
*/
?>
<?php get_header(); ?>
<main class="Actus">
  <ul class="Homepage__content__section Homepage__content__section--fourth">
    <li class="Homepage__content__section--fourth__heading MainWrapper FixDegueulasse">
      <div>
        <h4>réseaux & actus</h4>
        <h2>Nos actualités</h2>

      </div>
    </li>
    <li class="Homepage__content__section--fourth__actuTop MainWrapper">
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
                   get_template_part( 'templates/partials/actus-panels');
              ?>
           <?php endwhile; ?>
       <?php endif; ?>
    </li>
    <li class="Homepage__content__section--fourth__actuBot MainWrapper">
      <?php
        $args = array(
          'post_type' => 'actus',
        );
        $the_actu_bot_query = new WP_Query( $args );

       ?>
       <?php if ( $the_actu_bot_query->have_posts() ) : ?>
           <?php while ( $the_actu_bot_query->have_posts()) : $the_actu_bot_query->the_post(); ?>
             <?php
                   get_template_part( 'templates/partials/actus-panels-bottom');
              ?>
           <?php endwhile; ?>
       <?php endif; ?>
    </li>
  </ul>
</main>
<?php get_footer(); ?>
