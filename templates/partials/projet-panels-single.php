<?php
/**
 * Displays posts content
 */
?>

<article id="actu-single-<?php the_ID(); ?>" class="actu-single content content-actu-single">
    <section class="actu-single-content MainWrapper">
        <div class="actu-single-padding">
          <h4 class="actu-single-heading"><?php the_field('label'); ?></h4>
          <h2 class="actu-single-title"><?php the_title(); ?></h2>
          <h5>d</h5>
          <?php the_content(); ?>
        </div>
        <div class="actu-single-networks">
          <?php
          get_template_part( 'templates/partials/networks');
          ?>
          <ul>
            <a href="#"><li class="button">retour</li></a>
          </ul>
        </div>
    </section>
</article>
