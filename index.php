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
  <!-- // SECTION 1 : ABOUT //
  //------------------------------------>
  <ul class="Homepage__content__section Homepage__content__section--first">
    <!-- Right section (blue part)-->
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
    <!-- Right section (blue part)-->
    <li class="Homepage__content__section__dunno">
      <div class="Homepage__content__section__dunno__content">
        <h2>83</h2>
        <p>propositions de lois</p>
        <h4>2015 - 2016</h4>
        <h5>d</p>
          <h2>5</h2>
          <p>grands chantiers</p>
          <h4>2017 - 2022</h4>
        </div>
      </li>
    </ul>
    <!-- // SECTION 2 : NEWSLETTER PART  //
    //------------------------------------>
    <ul class="Homepage__content__section Homepage__content__section--second">
      <li><h4>Newsletter</h4></li>
      <li><h2>Soyez toujours informés</h2></li>
      <li><h5>d</h5></li>
      <li><p>Inscrivez vous pour recevoir toute l'actualité d'Albus Dumbledore</p></li>
      <li><?php echo do_shortcode('[contact-form-7 id="55" title="Adhesion"]'); ?></li>
    </ul>
    <!-- // SECTION 3 : PROJET //
    //------------------------------------>
    <ul class="Homepage__content__section Homepage__content__section--third MainWrapper">
      <!-- Text part -->
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
      <!-- Tiles part -->
      <div class="Homepage__content__section--third__secondChild">
        <?php
        $args = array(
          'post_type' => 'projets',
          'posts_per_page' => 3,
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
    <!-- // SECTION 4 : ACTUS //
    //------------------------------------>
    <ul class="Homepage__content__section Homepage__content__section--fourth">
      <li class="Homepage__content__section--fourth__heading MainWrapper">
        <div>
          <h4>réseaux & actus</h4>
          <h2>nos actualités</h2>
        </div>
        <div class="Homepage__content__section--fourth__heading__buton">
          <a href="<?php echo get_page_link(5); ?>" class="Homepage__content__section--fourth__heading__buton--modifier button">Tous les articles</a>
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
      <li class="Homepage__content__section--fourth__content">
        <?php echo do_shortcode('[custom-twitter-feeds]'); ?>
      </li>
      <li class="Homepage__content__section--fourth__actuBot MainWrapper">
        <?php
        $args = array(
          'post_type' => 'actus',
          'posts_per_page' => 3,
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
    <!-- // SECTION 5 : GOOGLE MAP //
    //------------------------------------>
    <ul class="Homepage__content__section Homepage__content__section--fifth">
      <?php echo do_shortcode('[ank_google_map]'); ?>
    </ul>
  </main>


  <?php 
  get_footer(); ?>
