<?php
/**
* Plugin Name: US info Produit
* Description: Un plugin permettant de publier des produits à vendre
* Version: 1.0
* Author: US info
* Author URI: http://www.usinfo.pf/
**/

// Publication d'un produit'

function product_publish() {
 
    $labels = array(
        'name' => _x( 'Tous les produits', 'product_publisher' ),
        'singular_name' => _x( 'Tous les produits', 'product_publisher' ),
        'add_new' => _x( 'Ajouter', 'product_publisher' ),
        'add_new_item' => _x( 'Ajouter un nouveau produit', 'product_publisher' ),
        'edit_item' => _x( 'Editer le produit', 'product_publisher' ),
        'new_item' => _x( 'Nouveau produit', 'product_publisher' ),
        'view_item' => _x( 'Voir le produit', 'product_publisher' ),
        'search_items' => _x( 'Search Product', 'product_publisher' ),
        'not_found' => _x( 'Aucun produit trouvé', 'product_publisher' ),
        'not_found_in_trash' => _x( 'Aucun produit trouvé dans la corbeille', 'product_publisher' ),
        'menu_name' => _x( 'US Info Produits', 'product_publisher' ),
    );
 
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Product filterable by category',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions'),
        'taxonomies' => array( 'category' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_template_directory_uri().'/assets/img/plugin-icon.png',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type( 'product', $args );

}
 
add_action( 'init', 'product_publish' );

function category_taxonomy() {
    register_taxonomy(
        'catégories',
        'produit',
        array(
            'hierarchical' => true,
            'label' => 'Genres',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'genre',
                'with_front' => false
            )
        )
    );
}
add_action( 'init', 'category_taxonomy');
 
?>