<?php
/**
 * Displays posts content
 */
?>

<article id="actu-single-<?php the_ID(); ?>" class="actu-single content content-actu-single">
    <section class="actu-single-content MainWrapper">
        <div class="actu-single-padding">
          <h4 class="actu-single-heading"><?php the_date(); ?></h4>
          <h2 class="actu-single-title"><?php the_title(); ?></h2>
          <h5>d</h5>
          <?php the_content(); ?>
        </div>
        <div class="actu-single-networks">
          <ul class="actu-single-firstList">
            <a href="#"><li class="button">partager<span><img src="<?php bloginfo( 'template_url' )?>/assets/images/facebook-icon.svg" alt="partager sur facebook" /></span></li></a>
            <a href="#"><li class="button">tweeter<span><img src="<?php bloginfo( 'template_url' )?>/assets/images/twitter-icon.svg" alt="partager sur twitter" /></span></li></a>
            <a href="#"><li class="button">email<span><img src="<?php bloginfo( 'template_url' )?>/assets/images/mail-icon.svg" alt="partager sur facebook" /></span></li></a>
          </ul>
          <ul class="actu-single-secondList">
            <a href="#"><li class="button">retour</li></a>
          </ul>
        </div>
    </section>
</article>
