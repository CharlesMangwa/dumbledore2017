<?php
/**
 * Displays posts content
 */
?>

<article id="actu-<?php the_ID(); ?>" class="actu content content-actu MainWrapper">
  
    <section class="actu-featured-image">
        <?php the_post_thumbnail(); ?>
    </section>
    <section class="actu-content">
        <h2 class="actu-title"><?php the_title(); ?></h2>
        <h5>d</h5>
        <?php the_content() ?>
    </section>
</article>
