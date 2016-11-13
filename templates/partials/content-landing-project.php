<?php
/**
 * Displays posts content
 */
?>

<article id="post-<?php the_ID(); ?>" class="post content content-post">

    <header class="post-header">
        <h4 class="post-heading"><?php the_field('heading') ?></h4>
        <h2 class="post-title">
            <a href="<?php the_permalink(); ?>" class="content-headings f2"><?php the_title(); ?></a>
        </h2>
        <p class="ornements">
          d
        </p>

        <?php get_template_part('/post-meta'); ?>
    </header>

    <section class="post-featured-image">
        <?php the_post_thumbnail( 'large' ); ?>
    </section>

    <section class="post-content">
      <p>
        <?php the_field('intro') ?>
      </p>
    </section>

    <footer class="post-footer">
        <a href="<?php the_permalink(); ?>" class="button post-button">En savoir plus</a>
    </footer>

</article>
