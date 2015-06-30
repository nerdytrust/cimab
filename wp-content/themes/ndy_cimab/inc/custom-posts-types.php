<?php

/**
 * Método para agregar posts tipo Convenios Médicos
 * @return
 */
function create_posts_agreements_type(){
    register_post_type( 'agreements', array(
        'labels' => array(
            'name'          => __( 'Convenios Médicos' ),
            'singular'      => __( 'Convenio Médico' )
        ),
        'public'            => true,
        'has_archive'       => true,
        'rewrite'           => array( 'slug' => 'convenios' ),
        'supports'          => array( 'title', 'editor', 'thumbnail' ),
        'capability_type'   => 'post',
        'menu_icon'         => 'dashicons-share'
    ) );

    add_filter( 'manage_edit-agreements_columns', function( $columns ){
        $columns = array(
            'cb'        => '<input type="checkbox" />',
            'title'     => __( 'Nombre del Hospital / Especialista' ),
            'author'    => __( 'Autor' ),
            'comments'  => '<span class="vers comment-grey-bubble" title="Comentarios"><span class="screen-reader-text">Comentarios</span></span>',
            'date'      => __( 'Fecha' )
        );
        return $columns;
    } );
}
add_action( 'init', 'create_posts_agreements_type' );

/**
 * Método para agregar posts tipo video
 * @return
 */
function create_posts_video_type(){
    $labels = array(
        'name'              => _x( 'Videos', 'post type general name' ),
        'singular'          => _x( 'Video', 'post type singular name' ),
        'menu_name'         => _x( 'Videos', 'admin-menu' ),
        'name_admin_bar'    => _x( 'Video', 'add new on admin bar' ),
        'add_new'           => _x( 'Agregar nuevo', 'video' ),
        'add_new_item'      => __( 'Agregar nuevo video' )
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'show_ui'           => true,
        'show_ui_menu'      => true,
        'query_var'         => true,
        'has_archive'       => true,
        'rewrite'           => array( 'slug' => 'videos' ),
        'supports'          => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments' ),
        'capability_type'   => 'post',
        'menu_icon'         => 'dashicons-format-video'
    );
    register_post_type( 'videos', $args );

    add_filter( 'manage_edit-videos_columns', function( $columns ){
        $columns = array(
            'cb'        => '<input type="checkbox" />',
            'title'     => __( 'Nombre del video' ),
            'author'    => __( 'Autor' ),
            'comments'  => '<span class="vers comment-grey-bubble" title="Comentarios"><span class="screen-reader-text">Comentarios</span></span>',
            'date'      => __( 'Fecha' )
        );
        return $columns;
    } );
}
add_action( 'init', 'create_posts_video_type' );

/**
 * Método para agregar posts tipo ONG's
 * @return
 */
function create_posts_ongs_type(){
    register_post_type( 'ongs', array(
        'labels' => array(
            'name'          => __( "ONG's" ),
            'singular'      => __( 'ONG' ),
        ),
        'public'            => true,
        'has_archive'       => true,
        'rewrite'           => array( 'slug' => 'ongs' ),
        'supports'          => array( 'title' ),
        'capability_type'   => 'post',
        'menu_icon'         => 'dashicons-groups'
    ) );
}
add_action( 'init', 'create_posts_ongs_type' );

/**
 * Método para crear posts tipo Alianzas con Empresas
 * @return
 */
function create_posts_partnerships_type(){
    register_post_type( 'partnerships', array(
        'labels' => array(
            'name'          => __( 'Alianzas' ),
            'singular'      => __( 'Alianza' ),
        ),
        'public'            => true,
        'has_archive'       => true,
        'rewrite'           => array( 'slug' => 'partnerships' ),
        'supports'          => array( 'title', 'thumbnail' ),
        'capability_type'   => 'post',
        'menu_icon'         => 'dashicons-building'
    ) );
}
add_action( 'init', 'create_posts_partnerships_type' );

/**
 * Método para agregar posts tipo slider
 * @return
 */
function create_posts_sliders_type(){
    register_post_type( 'sliders', array(
        'labels'    => array(
            'name'          => __( 'Sliders', 'cimab' ),
            'singular_name' => __( 'Slider', 'cimab' ),
        ),
        'public'            => true,
        'has_archive'       => true,
        'rewrite'           => array( 'slug' => 'sliders' ),
        'supports'          => array( 'title' ),
        'capability_type'   => 'post',
        'menu_icon'         => 'dashicons-money'
    ) );
}
add_action( 'init', 'create_posts_sliders_type' );

/**
 * Método para agregar posts tipo banners
 * @return
 */
function create_posts_banners_type(){
    register_post_type( 'banners', array(
        'labels' => array(
            'name'          => __( 'Banners' ),
            'singular'      => __( 'Banner' ),
        ),
        'public'            => true,
        'has_archive'       => true,
        'rewrite'           => array( 'slug' => 'banners' ),
        'supports'          => array( 'title' ),
        'capability_type'   => 'post',
        'menu_icon'         => 'dashicons-images-alt'
    ) );
}
add_action( 'init', 'create_posts_banners_type' );

/**
 * Método para agregar posts tipo galerías
 * @return
 */
function create_posts_gallery_type(){
    register_post_type( 'galleries', array(
        'labels' => array(
            'name'          => __( 'Galerías' ),
            'singular'      => __( 'Galería' ),
        ),
        'public'            => true,
        'has_archive'       => true,
        'rewrite'           => array( 'slug' => 'galerias' ),
        'supports'          => array( 'title', 'excerpt', 'thumbnail', 'comments' ),
        'capability_type'   => 'post',
        'menu_icon'         => 'dashicons-format-gallery',
        'taxonomies'        => array( 'category-gallery' )
    ) );
}
add_action( 'init', 'create_posts_gallery_type' );

/**
 * Método para agregar posts tipo biblioteca
 * @return
 */
function create_posts_library_type(){
    register_post_type( 'library', array(
        'labels'            => array(
            'name'          => __( 'Biblioteca' ),
            'singular'      => __( 'Biblioteca' ),
        ),
        'public'            => true,
        'has_archive'       => true,
        'rewrite'           => array( 'slug' => 'biblioteca' ),
        'supports'          => array( 'title', 'thumbnail', 'excerpt' ),
        'capability_type'   => 'post',
        'menu_icon'         => 'dashicons-book'

    ) );
}
add_action( 'init', 'create_posts_library_type' );


/**
 * Método para agregar posts tipo materiales educativos
 * @return
 */
function create_posts_educational_type(){
    register_post_type( 'educational', array(
        'labels'             => array(
            'name'          => __( 'Materiales Educativos' ),
            'single'        => __( 'Material Educativo' )
        ),
        'public'            => true,
        'has_archive'       => true,
        'rewrite'           => array( 'slug' => 'materiales-educativos' ),
        'supports'          => array( 'title', 'thumbnail', 'editor', 'excerpt' ),
        'capability_type'   => 'post',
        'menu_icon'         => 'dashicons-welcome-learn-more'
    ) );
}
add_action( 'init', 'create_posts_educational_type' );