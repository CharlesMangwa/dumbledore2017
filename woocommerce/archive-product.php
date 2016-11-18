<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
	?>

		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
    <main class="WooArchiveHeading">
      <ul class="WooArchiveHeading__content MainWrapper">
        <li><h4>montrez votre soutien</h4></li>
        <li><h2><?php woocommerce_page_title(); ?></h2></li>

        <!-- <li>
          <ul class="WooArchiveHeading__tiles">
            <li>vêtement</li>
            <li>goodies</li>
            <li>badges, stickers</li>
          </ul>
        </li> -->
        <li>
          <?php if ( have_posts() ) : ?>

            <?php woocommerce_product_loop_start(); ?>

              <?php woocommerce_product_subcategories(); ?>

              <?php while ( have_posts() ) : the_post(); ?>

                <?php wc_get_template_part( 'content', 'product' ); ?>

              <?php endwhile; // end of the loop. ?>

            <?php woocommerce_product_loop_end(); ?>

          <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

            <?php wc_get_template( 'loop/no-products-found.php' ); ?>

          <?php endif; ?>
        </li>
      </ul>
    </main>

		<?php endif; ?>

<?php get_footer(); ?>
