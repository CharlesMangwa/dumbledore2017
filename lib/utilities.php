<?php
/**
 * Utilities
 */

/**
 * Cleanup header
 * Based on http://wpengineer.com/1438/wordpress-header and https://github.com/roots/soil
 */
function blujay_head_cleanup() {

    // General cleanup
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

    // Remove the WordPress version from RSS feeds
    add_filter( 'the_generator', '__return_false' );
}

// Disable REST API and oEmbed discovery links
function blujay_disable_rest_and_oembed() {
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
    remove_action( 'wp_head', 'wp_oembed_add_host_js' );
}

// Disable emoji inline styles and scripts
function blujay_disable_emoji_styles_scripts() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}

/**
 * Moves scripts to footer
 */
function blujay_js_to_footer() {
    remove_action( 'wp_head', 'wp_print_scripts' );
    remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
    remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );
}

/**
 * Adds some useful classes to the body
 */
function blujay_add_page_slug( $classes ) {
    global $post;

    // Adds page and post slugs
    if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }

    // Add is-blog class if blog related page
    if ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_search()) || (is_tag()) ) == true) {
        $classes[] = "is-blog";
    }

    return $classes;
}

/**
 * Adds custom image sizes to media library
 */
function blujay_custom_image_sizes( $image_sizes ) {

    // Get the custom image sizes
    global $_wp_additional_image_sizes;

    // If there are none, just return the built-in sizes
    if ( empty( $_wp_additional_image_sizes ) ) {
        return $image_sizes;
    }

    // Add all the custom sizes to the built-in sizes
    foreach ( $_wp_additional_image_sizes as $id => $data ) {
        if ( !isset($image_sizes[$id]) ) {
            $image_sizes[$id] = ucfirst( str_replace( '-', ' ', $id )  );
        }
    }

    return $image_sizes;
}

// Project
add_action('init', 'create_custom_post_type_projets');

function create_custom_post_type_projets(){

  $labels = array(
        'name'               => 'Projet',
        'singular_name'      => 'Projet',
        'all_items'          => 'Tous les projets',
        'add_new'            => 'Ajouter un projet',
        'add_new_item'       => 'Ajouter un nouveaux projet',
        'edit_item'          => "Modifier le projet",
        'new_item'           => 'Nouveaux projet',
        'view_item'          => "Voir le projet",
        'search_items'       => 'Rechercher un projet',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'projet parente:',
        'menu_name'          => 'Projet',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','editor', 'excerpt', 'thumbnail'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-megaphone',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'projet' )
    );
    register_post_type( 'projets', $args );
}

// Actu
add_action('init', 'create_custom_post_type_actu');

function create_custom_post_type_actu(){

  $labels = array(
        'name'               => 'Actus',
        'singular_name'      => 'Actu',
        'all_items'          => 'Toutes les actus',
        'add_new'            => 'Ajouter une actu',
        'add_new_item'       => 'Ajouter une nouvelle actu',
        'edit_item'          => "Modifier l'actu",
        'new_item'           => 'Nouvelle actu',
        'view_item'          => "Voir le projet",
        'search_items'       => 'Rechercher un projet',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Actu parente:',
        'menu_name'          => 'Actus',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'comments'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-tickets',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'actus')
    );
    register_post_type( 'actus', $args );
}

// Actu first
add_action('init', 'create_custom_post_type_actu_first');

function create_custom_post_type_actu_first(){

  $labels = array(
        'name'               => 'Actus_first',
        'singular_name'      => 'Actu_first',
        'all_items'          => 'Toutes les actus_first',
        'add_new'            => 'Ajouter une actu_first',
        'add_new_item'       => 'Ajouter une nouvelle actu_first',
        'edit_item'          => "Modifier l'actu_first",
        'new_item'           => 'Nouvelle actu_first',
        'view_item'          => "Voir l'actu_first",
        'search_items'       => 'Rechercher une actu_first',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Actu_first parente:',
        'menu_name'          => 'Actus_first',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'comments'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-star-filled',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'actus-first' ),
    );
    register_post_type( 'actu_first', $args );
}

// About
add_action('init', 'create_custom_post_type_apropos');

function create_custom_post_type_apropos(){

  $labels = array(
        'name'               => 'A propos',
        'singular_name'      => 'A propos',
        'all_items'          => 'Toutes les a-propos',
        'add_new'            => 'Ajouter une a-propos',
        'add_new_item'       => 'Ajouter une nouvelle a-propos',
        'edit_item'          => "Modifier a-propos",
        'new_item'           => 'Nouvelle a-propos',
        'view_item'          => "Voir a-propos",
        'search_items'       => 'Rechercher une a-propos',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'a-propos parente:',
        'menu_name'          => 'a-propos',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'comments'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-star-filled',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'a-propos' ),
    );
    register_post_type( 'a-propos', $args );
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
// Or just remove them all in one line
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// TAXONOMIES
add_action('init', 'create_custom_taxonomy');
function create_custom_taxonomy(){
  $args = array(
          'label' => 'Catégorie projet',
          'rewrite' => array( 'slug' => 'categorie-projet' ),
          'hierarchical' => true,
      );
  register_taxonomy(
    'categorie-projet',
    array('projets'),
     $args );
}
