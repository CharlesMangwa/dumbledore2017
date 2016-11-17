<?php
/*
*Template Name: Thank you
*/
get_header(); 
$page_object = get_queried_object();
?>
<div>
    <?php the_post_thumbnail(); ?>
</div>
<div class="thanks__content">
    <h1><?php the_title(); ?></h1>
    <p><?php echo $page_object->post_content; ?></p>
    <a href="/dumbledore"><div class="button">Retour</div></a>
</div>






<?php get_footer(); ?>