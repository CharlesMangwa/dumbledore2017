<?php
/**
 * Displays posts content
 */
?>

<article id="actu-single-<?php the_ID(); ?>" class="actu-single content content-actu-single">
    <section class="actu-single-content MainWrapper">
        <div class="actu-single-padding">
          <h4 class="actu-single-heading">agir pour l'avenir</h4>
          <h2 class="actu-single-title">rejoindre un comité</h2>
          <h5>d</h5>
          <p>
            Partout en France et dans le monde, les Français s'engagent pour Albus Dumbledore en recrutant des soutiens sur le terrain. Vous aussi, rejoignez dès aujourd'hui un comité AD! près de chez vous !
          </p>
        </div>
        <ul class="JoinContent">
          <li><?php echo do_shortcode('[contact-form-7 id="116" title="Rejoindre"]'); ?></li>
          <li><?php echo do_shortcode('[ank_google_map]'); ?></li>
          <?php get_template_part( 'templates/partials/networks');?>
        </ul>
    </section>
</article>
