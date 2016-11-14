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

<main class="Homepage__content">
  <ul class="Homepage__content__section Homepage__content__section--first">
    <li class="Homepage__content__section__about">
      <div class="Homepage__content__section__about__wrapper">
        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>
              <?php
                $id = get_field('id');
                if ($id == 1) {
                  get_template_part( 'templates/partials/content-landing');
                }
              ?>
            <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </li>
    <li class="Homepage__content__section__dunno">
      <div class="Homepage__content__section__dunno__content">
        <h2>83</h2>
        <p>je sais pas quoi</p>
        <h4>2015 - 2016</h4>
        <h5>d</p>
        <h2>9</h2>
        <p>je sais pas quoi</p>
        <h4>de je sais pas qui</h4>
      </div>
    </li>
  </ul>
  <ul class="Homepage__content__section Homepage__content__section--second">
    <li><h4>Newsletter</h4></li>
    <li><h2>Soyez toujours informés</h2></li>
    <li><h5>d</h5></li>
    <li><p>Inscrivez vous pour recevoir toute l'actualité d'Albus Dumbledore</p></li>
    <li><?php echo do_shortcode('[contact-form-7 id="55" title="Adhesion"]'); ?></li>
  </ul>
  <ul class="Homepage__content__section Homepage__content__section--third MainWrapper">
    <div class="Homepage__content__section--third__firstChild">
      <?php if ( have_posts() ) : ?>

          <?php while ( have_posts() ) : the_post(); ?>
            <?php
              $id = get_field('id');
              if ($id == 2) {
                get_template_part( 'templates/partials/content-landing-project');
              }
            ?>
          <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="Homepage__content__section--third__secondChild">

      <?php
        $args = array(
          'post_type' => 'projets',
          'posts_per_page' => 6,
        );
        $the_projets_query = new WP_Query( $args );

       ?>

      <?php if ( $the_projets_query->have_posts() ) : ?>

          <?php while ( $the_projets_query->have_posts() ) : $the_projets_query->the_post(); ?>
            <?php get_template_part( 'templates/partials/panels');?>
          <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </ul>
  <ul class="Homepage__content__section Homepage__content__section--fourth">
    <li class="Homepage__content__section--fourth__heading MainWrapper">
      <div>
        <h4>réseaux & actu</h4>
        <h2>nos actualités</h2>
      </div>
    </li>
    <li>
      <?php echo do_shortcode('[custom-twitter-feeds]'); ?>
    </li>

  </ul>
</main>

<?php get_footer(); ?>
