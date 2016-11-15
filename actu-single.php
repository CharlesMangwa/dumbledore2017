<?php
/*
* Template name: Single actu
*/

get_header();
?>

    <?php while ( have_posts() ) : the_post(); ?>
        <?php  get_template_part( 'templates/partials/content-single'); ?>
    <?php endwhile; ?>

<?php
get_footer();
?>
