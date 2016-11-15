<?php
/**
 * Template Name: À propos
 */
?>

<?php get_header(); ?>

<main class="main">

    <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" class="content about-content">

            <section class="about-featured-image">
                <?php the_post_thumbnail( 'large' ); ?>
            </section>

            <div class="about-container">

                <header class="about-header">
                    <h5 class="about-subtitle"><?php the_field('subtitle') ?></h5>
                    <h4 class="about-heading"><?php the_field('heading') ?></h4>
                    <p class="ornements">d</p>
                    <p class="about-heading intro"><?php the_field('intro') ?></p>
                    <?php get_template_part('/post-meta'); ?>
                </header>
                <?php
                  $args = array(
                    'post_type' => 'abouts', // enter custom post type
                    'orderby' => 'date',
                    'order' => 'DESC',
                  );

                      $loop = new WP_Query( $args );
                     ?>

                        <!-- echo '<div class="about">';
                        echo '<div class="about-image">'. get_the_post_thumbnail( $id ).'</div>';
                        echo '<div class="about-title">'. the_field('about-article-title').'</div>';
                        echo '<p class="ornements-blue">'. "d".'</p>';
                        echo '<div class="about-work">'. the_field('about-article-content').'</div>';
                        echo '</div>';
                      endif; -->


                    <?php  if( $loop->have_posts() ): ?>
                    <?php while( $loop->have_posts() ): $loop->the_post(); global $post; ?>

                        <div class="about">
                            <div class="about_background"></div>
                            <div class="about-image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="about-article__content">
                                <h3 class="about-title"><?php the_field('about-article-title'); ?></h3>
                                <div class="ornements">d</div>
                                <p class="about-work">
                                    <?php the_field('about-article-content'); ?>
                                </p>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
    <?php endwhile; // end of the loop. ?>

            </div>

        </article>

</main>

<?php get_footer(); ?>
