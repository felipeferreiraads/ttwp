<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

function my_theme_wrapper_start() {
    echo '<section id="shop"><div class="container">';
}

function my_theme_wrapper_end() {
    echo '</div></section>';
}

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['description'] ); // Remove the description tab
    unset( $tabs['reviews'] ); // Remove the reviews tab
    unset( $tabs['additional_information'] ); // Remove the additional information tab

    return $tabs;
}

add_action('init', 'custom_post_types', 0);
function custom_post_types() {
  $labels = [
    'name' => _x('Artistas', 'Artistas'),
    'singular_name' => _x('Artista', 'Artista'),
    'add_new' => _x('Adicionar Artista', 'Novo artista'),
    'add_new_item' => __('Novo Artista'),
    'edit_item' => __('Editar Artista'),
    'new_item' => __('Novo Artista'),
    'view_item' => __('Ver Artista'),
    'search_items' => __('Procurar Artistas'),
    'not_found' =>  __('Nenhum registro encontrado'),
    'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
    'parent_item_colon' => '',
    'menu_name' => 'Artistas'
  ];

  $args = [
    'labels' => $labels,
    'public' => true,
    'public_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false,
    'hierarchical' => true,
    'menu_position' => null,
    'menu_icon' => 'dashicons-admin-users',
    'taxonomies' => ['category'],
    'supports' => ['title', 'thumbnail', 'excerpt', 'category', 'editor']
  ];

  register_post_type('artistas', $args);
  flush_rewrite_rules();
}