<?php
/**
 * Displays standard posts
 */
?>

<?php get_header(); ?>
<div class="page-actu">

<<<<<<< HEAD

  <section class="page-actu__heading">
    <h3 class="page-actu__subtitle">RÉSEAUX & ACTU</h3>
    <h1 class="page-actu__title">Nos Actualités</h1>
  </section>
  <section class="page-actu__content">

    <div class="page-actu__firstarticle">
      <img class="page-actu-firstarticle__img" src="https://unsplash.it/600/400" alt="" />
      <div class="page-actu-firstarticle__background"></div>
      <div class="page-actu-firstarticle__content">
        <h4 class="page-actu-article__date page-actu-article__date-red">GENMAG . MAI 2016</h4>
        <h3 class="page-actu-article__title">TITRE</h3>
        <h3 class="page-actu-article__title">ACTU N°1</h3>
        <h3 class="page-actu-article__ornement">d</h3>
        <p class="page-actu-article__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <h4 class="page-actu-article__plus">Lire la suite</h4>
      </div>
    </div>

    <div class="page-actu__articles">
      <div class="page-actu__article">
        <img class="page-actu-article__img" src="https://unsplash.it/300/300" alt="" />
        <div class="page-actu-article__content">
          <h4 class="page-actu-article__date page-actu-article__date-red">GENMAG . MAI 2016</h4>
          <h3 class="page-actu-article__title">TITRE</h3>
          <h3 class="page-actu-article__title">ACTU N°2</h3>
          <h3 class="page-actu-article__ornement">d</h3>
          <p class="page-actu-article__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <div class="page-actu__article page-actu-article__twitter">
        <h4 class="page-actu-article__date page-actu-article-twitter__date-red">GENMAG . MAI 2016</h4>
        <p class="page-actu-article__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="page-actu__article">
        <img class="page-actu-article__img" src="https://unsplash.it/300/300" alt="" />
        <div class="page-actu-article__content">
          <h4 class="page-actu-article__date page-actu-article__date-red">GENMAG . MAI 2016</h4>
          <h3 class="page-actu-article__title">TITRE</h3>
          <h3 class="page-actu-article__title">ACTU N°2</h3>
          <h3 class="page-actu-article__ornement">d</h3>
          <p class="page-actu-article__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
    </div>

    <div class="page-actu__articles">
      <div class="page-actu__article page-actu-article__twitter">
        <h4 class="page-actu-article__date page-actu-article-twitter__date-red">GENMAG . MAI 2016</h4>
        <p class="page-actu-article__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="page-actu__article">
        <img class="page-actu-article__img" src="https://unsplash.it/300/300" alt="" />
        <div class="page-actu-article__content">
          <h4 class="page-actu-article__date page-actu-article__date-red">GENMAG . MAI 2016</h4>
          <h3 class="page-actu-article__title">TITRE</h3>
          <h3 class="page-actu-article__title">ACTU N°2</h3>
          <h3 class="page-actu-article__ornement">d</h3>
          <p class="page-actu-article__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <div class="page-actu__article page-actu-article__twitter">
        <h4 class="page-actu-article__date page-actu-article-twitter__date-red">GENMAG . MAI 2016</h4>
        <p class="page-actu-article__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </section>

</div>

=======
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
  <ul class="Homepage__content__section Homepage__content__section--fourth">
    <li class="Homepage__content__section--fourth__heading MainWrapper">
      <div>
        <h4>réseaux & actu</h4>
        <h2>nos actualités</h2>
      </div>
    </li>
    <li class="Homepage__content__section--fourth__actuTop MainWrapper">
      <?php
        $args = array(
          'post_type' => 'actus',
          'posts_per_page' => 4,
        );
        $the_actu_query = new WP_Query( $args );

       ?>

       <?php if ( $the_actu_query->have_posts() ) : ?>
           <?php while ( $the_actu_query->have_posts()) : $the_actu_query->the_post(); ?>
             <?php
               $focus = get_field('focus');
               if ($focus == 1) {
                   get_template_part( 'templates/partials/actus-panels');
               }
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
          'posts_per_page' => 4,
        );
        $the_actu_bot_query = new WP_Query( $args );

       ?>

       <?php if ( $the_actu_bot_query->have_posts() ) : ?>
           <?php while ( $the_actu_bot_query->have_posts()) : $the_actu_bot_query->the_post(); ?>
             <?php
               $focus = get_field('focus');
               if ($focus != 1) {
                   get_template_part( 'templates/partials/actus-panels-bottom');
               }
              ?>
           <?php endwhile; ?>
       <?php endif; ?>
    </li>
  </ul>
  <ul class="Homepage__content__section Homepage__content__section--fifth">
    <?php echo do_shortcode('[ank_google_map]'); ?>
  </ul>
</main>
>>>>>>> dev

<?php get_footer(); ?>
