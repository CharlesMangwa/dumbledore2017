<?php
/*
*Template Name: Thank you
*/
get_header();
$page_object = get_queried_object();
?>

<div class="DonationGreetings">
  <div class="DonationGreetings__thumbnail">
    <?php the_post_thumbnail(); ?>
  </div>
  <ul class="DonationGreetings__list MainWrapper">
    <li><h1><?php the_title(); ?></h1></li>
    <li><p><?php echo $page_object->post_content; ?></p></li>
    <a href="<?php echo get_site_url(); ?>"><li class="button">Retour</li></a>
  </ul>

</div>


<?php get_footer(); ?>
