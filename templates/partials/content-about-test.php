<?php
/**
 * Displays about content
 */
?>

<section class="post-featured-image">
    <?php the_post_thumbnail( 'large' ); ?>
</section>

<header class="post-header">

    <h6 class="post-heading">
        <?php the_field('subtitle'); ?>
    </h6>

    <h2 class="post-title">
        <?php the_title(); ?>
    </h2>

    <p class="ornements">
        d
    </p>

    <p class="post-summary">
        <?php the_excerpt(); ?>
    </p>

</header>

<article class="post content">

    <h4 class="post-title">
        <?php the_title(); ?>
    </h4>

    <p class="ornements">
        d
    </p>

    <section class="post-content">
        <?php the_content(); ?>
    </section>

    <section class="post-featured-image">
        <?php the_post_thumbnail( 'thumbnail' ); ?>
    </section>

</article>
