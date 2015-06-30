<?php

/**
 * Método para obtener el nombre de la categoría de los tipos de posts personalizados
 * @return string Nombre de la Categoría
 */
function get_category_tax(){
    global $wp_query;
    $term = $wp_query->get_queried_object();
    $title = $term->labels->name;
    return $title;
}

/**
 * Método para obtener la categoría de los posts personalizados
 * @param  boolean $id
 * @param  string  $tcat
 * @return string        Nombre de la categoría
 */
function get_the_category_custompost( $id = false, $tcat = '' ){
    $categories = get_the_terms( $id, 'category-' . $tcat );
    if ( ! $categories )
        $category = array();

    $category = array_values( $categories );
    foreach (array_keys( $categories ) as $key ) {
        _make_cat_compat( $categories[$key] );
    }

    return apply_filters( 'get_the_categories', $categories );
}

/**
 * Método para agregar categorías a los Posts Personalizados tipo Convenios Médicos
 * @return
 */
function create_category_agreements_types_taxonomies(){
    $labels = array(
        'name'              => _x( 'Categorías', 'taxonomy general name' ),
        'singular_items'    => _x( 'Categoría', 'taxonomy singular name' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Categorías' )
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true
    );

    register_taxonomy( 'category-agreements', array( 'agreements' ), $args );
}
add_action( 'init', 'create_category_agreements_types_taxonomies' );

/**
 * Método para agregar categorías que aplican sólo para los posts tipo galerías
 * @return
 */
function create_category_gallery_types_taxonomies(){
    $labels = array(
        'name'              => _x( 'Categorías', 'taxonomy general name' ),
        'singular_items'    => _x( 'Categoría', 'taxonomy singular name' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Categorías' )
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true
    );

    register_taxonomy( 'category-gallery', array( 'galleries' ), $args );
}
add_action( 'init', 'create_category_gallery_types_taxonomies' );