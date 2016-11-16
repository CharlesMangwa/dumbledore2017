<?php
/**
 * Displays posts content
 */
?>

<article id="actu-single-<?php the_ID(); ?>" class="actu-single content content-actu-single">
    <section class="actu-single-content MainWrapper">
        <div class="actu-single-padding">
          <h4 class="actu-single-heading">découvrez son parcours atypique</h4>
          <h2 class="actu-single-title">Albus Perceval Wulfric Brian Dumbledore</h2>
          <h5>d</h5>
          <p>
            Albus Perceval Wulfric Brian Dumbledore, est l'une des figures politique les plus éminentes de tous les temps, le directeur de l'ENA depuis 1988. Avant cette nomination en remplacement du préfet Bernard Boucault, il était professeur de Sciences politiques.
          </p>
        </div>
        <ul class="AboutUl">
          <li class="Homepage__content__section--fourth__actuTop MainWrapper AboutFlex">
            <?php
            $args = array(
              'post_type' => 'a-propos',
            );
            $the_actu_query = new WP_Query( $args );
            ?>
            <?php if ( $the_actu_query->have_posts() ) : ?>
              <?php while ( $the_actu_query->have_posts()) : $the_actu_query->the_post(); ?>
                <?php
                get_template_part( 'templates/partials/about-panels');
                ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </li>
        </ul>
    </section>
</article>
