<?php
/**
 * Displays posts content
 */
?>

<article id="actu-<?php the_ID(); ?>" class="actu content content-actu MainWrapper">

    <section class="actu-featured-image">
        <?php the_post_thumbnail( 'large' ); ?>
    </section>
    <section class="actu-content">
        <h4 class="actu-heading"><?php the_author(); ?> - <?php the_date(); ?></h4>
        <h2 class="actu-title"><?php the_title(); ?></h2>
        <h5>d</h5>
        <?php the_excerpt() ?>
        <a href="<?php the_permalink(); ?>" class="actu-bottom-button">Lire la suite</a>
    </section>
</article>
