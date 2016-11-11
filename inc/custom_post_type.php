<?php
add_action('init', 'create_custom_post_type_articles');

function create_custom_post_type_articles(){

  $labels = array(
        'name'               => 'Articles',
        'singular_name'      => 'Article',
        'all_items'          => 'Tous les articles',
        'add_new'            => 'Ajouter une article',
        'add_new_item'       => 'Ajouter une nouvel article',
        'edit_item'          => "Modifier l'article",
        'new_item'           => 'Nouvel article',
        'view_item'          => "Voir l'article",
        'search_items'       => 'Rechercher un article',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Article parent:',
        'menu_name'          => 'Articles',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'comments'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => -1,
        'menu_icon'           => 'dashicons-megaphone',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'article' ),
        'capabilities' => array(
                          'publish_posts' => 'publish_article',
                          'edit_posts' => 'edit_article',
                          'edit_others_posts' => 'edit_others_article',
                          'delete_posts' => 'delete_annonce',
                          'delete_others_posts' => 'delete_others_article',
                          'read_private_posts' => 'read_private_article',
                          'edit_post' => 'edit_article',
                          'delete_post' => 'delete_article',
                          'read_post' => 'read_article'
                              ),

    );
    register_post_type( 'article', $args );
}

add_action('init', 'create_custom_post_type_pages');

function create_custom_post_type_pages(){

    $labels = array(
        'name'               => 'Pages',
        'singular_name'      => 'Page',
        'all_items'          => 'Toutes les pages',
        'add_new'            => 'Ajouter une page',
        'add_new_item'       => 'Ajouter une nouvelle page',
        'edit_item'          => "Modifier la page",
        'new_item'           => 'Nouvelle page',
        'view_item'          => "Voir la page",
        'search_items'       => 'Rechercher une page',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Page parente:',
        'menu_name'          => 'Page',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 0,
        'menu_icon'           => 'dashicons-megaphone',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'page' ),
    );
    register_post_type( 'page', $args );
}
