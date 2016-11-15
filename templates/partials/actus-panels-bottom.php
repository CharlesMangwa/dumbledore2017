<?php
/**
 * Displays posts content
 */
?>

<article id="actu-<?php the_ID(); ?>" class="actu-bottom content content-actu-bottom MainWrapper">
    <section class="actu-bottom-content">
        <?php the_post_thumbnail(); ?>
        <div class="actu-bottom-padding">
          <h4 class="actu-bottom-heading"><?php the_author(); ?> - <?php the_date(); ?></h4>
          <h2 class="actu-bottom-title"><?php the_title(); ?></h2>
          <h5>d</h5>
          <?php the_excerpt() ?>
          <a href="<?php the_permalink(); ?>" class="actu-bottom-button">Lire la suite</a>
        </div>
    </section>
</article>
