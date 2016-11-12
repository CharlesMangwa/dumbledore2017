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

<main class="Homepage__content MainWrapper">
  <ul class="Homepage__content__section">
    <li class="Homepage__content__section__about">
      <?php if ( have_posts() ) : ?>

          <?php while ( have_posts() ) : the_post(); ?>
              <?php  get_template_part( 'templates/partials/content-landing'); ?>
          <?php endwhile; ?>

          <?php if ($wp_query->max_num_pages > 1) : ?>
              <?php get_template_part( 'templates/partials/pager' ); ?>
          <?php endif; ?>

      <?php else : ?>

          <?php get_template_part( 'templates/partials/content', 'none' ); ?>

      <?php endif; ?>
    </li>
    <li class="Homepage__content__section__dunno">

    </li>
  </ul>
</main>
>>>>>>> dev

<?php get_footer(); ?>
