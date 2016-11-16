<?php
/**
 * Displays posts content
 */
?>

<article id="projet-<?php the_ID(); ?>" class="projet content content-projet">

    <header class="projet-header projet-header-<?php the_field('label'); ?>">
        <img src="<?php bloginfo( 'template_url' )?>/assets/images/<?php the_field('label'); ?>-icon.png" alt="icon" />
        <h4 class="projet-heading"><?php the_field('label'); ?></h4>
    </header>

    <section class="projet-content">
      <h2 class="projet-title-<?php the_field('label'); ?>"><?php the_title(); ?></h2>
      <?php the_excerpt() ?>
    </section>

    <footer class="projet-footer projet-<?php the_field('label'); ?>">
        <a href="<?php the_permalink(); ?>" class="projet-button">
          <div><p>En savoir plus</p></div>
        </a>
    </footer>

</article>
