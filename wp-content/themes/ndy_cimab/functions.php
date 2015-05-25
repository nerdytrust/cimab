<?php

/**
 * Método para eliminar la versión de WP del header y feeds
 * @return
 */
function ndy_version_removal(){
	return '';
}
add_filter( 'the_generator', 'ndy_version_removal' );

/**
 * Método para eliminar los mensajes de actualización de Wordpress para los usuarios que no son administradores
 */
global $user_login;
get_currentuserinfo();
if ( ! current_user_can( 'update_plugins') ){
	add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
	add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
}

/**
 * Método para mostrar mensajes de actualización sólo de los plugins activos
 * @param  string
 * @return
 */
function update_active_plugins( $value = '' ){
	if ( ( isset( $value->response ) ) && ( count( $value->response ) ) ) {
        $active_plugins = get_option( 'active_plugins' );    
        if ( $active_plugins ) {
            foreach ( $value->response as $plugin_idx => $plugin_item ) {
                if ( ! in_array( $plugin_idx, $active_plugins ) )
                    unset( $value->response[$plugin_idx] );
            }
        } else {
            foreach ( $value->response as $plugin_idx => $plugin_item ) {
                unset( $value->response );
            }          
        }
    }  
    return $value;
}
add_filter( 'transient_update_plugins', 'update_active_plugins' );

/**
 * Agregando soporte para thumbnails ( Imagen Destacada )
 */
add_theme_support( 'post-thumbnails' );

/**
 * Agregando soporte para munús personalizados
 */
add_theme_support( 'menus' );

/**
 * Agregando soporte HTML5 para formulario de búsqueda, formulario de comentarios, galerías, etc...
 */
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption', 'widgets' ) );

/**
 * Agregando soporte para tipos de posts
 */
add_theme_support( 'post-formats', array( 'gallery', 'quote', 'image', 'video', 'audio' ) );

/**
 * Agregando soporte de excerpt para las páginas
 */
add_post_type_support( 'page', 'excerpt' );

/**
 * Agregando tamaños de imágenes que necesitamos para la plantilla
 */
add_image_size( 'posts_home', 350, 186, true );
//add_image_size( 'nota', 840, 477, true );

/**
 * Agregando parámetro para la calidad de las imágenes
 * @return
 */
add_filter( 'jpeg_quality', create_function( '', 'return 95;' ) );

/**
 * Método para encolar los estilos y los scripts y se carguen correctamente en el theme
 * @return
 */
function theme_ndy_scripts(){
    // CSS
    /*wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css', '20150324' );
    wp_enqueue_style( 'fontawesome-min', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', '20150324' );*/
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', '20150324' );
    wp_enqueue_style( 'fontawesome-min', get_template_directory_uri() . '/css/font-awesome.min.css', '20150324' );
    wp_enqueue_style( 'cimab', get_template_directory_uri() . '/css/cimab.css', '20150324' );
    wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css', '20150324' );
    
    // JS
    //wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), '1.11.2', true );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.11.2', true );
    //wp_enqueue_script( 're_captcha', 'https://www.google.com/recaptcha/api.js', array(), '2.0', true );
    wp_enqueue_script( 'noconflict', get_template_directory_uri() . '/js/jquery.noconflict.js', array(), '20150324', true );
    //wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array(), '3.3.4', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true );
    wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array(), '20150324', true );
    wp_enqueue_script( 'jquery_easing', get_template_directory_uri() . '/js/jquery.easing.js', array(), '20150324', true );
    wp_enqueue_script( 'jquery_mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.js', array(), '20150324', true );
    wp_enqueue_script( 'cimab', get_template_directory_uri() . '/js/cimab.js', array(), '20150324', true );
}
add_action( 'wp_enqueue_scripts', 'theme_ndy_scripts' );

/**
 * Método para dar de alta widgets y agregar soporte para widgets al theme
 * @return
 */
/*function ndy_cimab_widgets_init(){
    $widgets = array( __( 'Catálogo Sidebar' ) );
    foreach ( $widgets as $widget ){
        register_sidebar( array(
            'name'          => $widget,
            'description'   => '',
            'class'         => '',
            'before_widget' => '<div id="%1" class="widget %2">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>'
        ) );
    }
}
add_action( 'widgets_init', 'ndy_cimab_widgets_init' );*/

/**
 * Método para agregar la leyenda de Power by en el Footer
 * @return string
 */
function remove_footer_admin(){
    return 'Creador por <a href="http://www.nerdytrust.com" target="_blank">Nerdy Trust</a> &copy; ' . date( 'Y' );
}
add_filter( 'admin_footer_text', 'remove_footer_admin' );

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
 * Método para customizar y limitar el excerpt a los caracteres que se quiera
 * @param  integer $limit Limite de caracteres
 * @return
 */
function custom_excerpt( $limit ){
    $excerpt = explode( ' ', get_the_excerpt(), $limit );
    if ( count( $excerpt ) >= $limit ){
        array_pop( $excerpt );
        $excerpt = implode(" ", $excerpt ) . '...';
    } else {
        $excerpt = implode( " ", $excerpt );
    }
    $custom = '<p>';
    $custom .= preg_replace( '`\[[^\]]*\]`', '', $excerpt );
    $custom .= '</p>';
    return $custom;
}

/**
 * Método para agregar soporte de WooCommerce
 * @return
 */
function woocommerce_support(){
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'woocommerce_support' );


/**
 * Método para mostrar el total de items en el carrito de compra
 * @return integer Total de Items en el Carrito
 */
function woocommerce_cart_total_items(){
    global $woocommerce;
    printf( _n( '%d', $woocommerce->cart->cart_contents_count, 'woothemes' ), $woocommerce->cart->cart_contents_count );
}

/**
 * Método para mostrar la URL del carrito de compra
 * @return string URL Carrito de Compra
 */
function woocommerce_cart_url(){
    global $woocommerce;
    printf( '%s', $woocommerce->cart->get_cart_url(), 'woothemes' );
}

/**
 * Método para reemplazar la URL del login en la pantalla de login del administrador
 * @return string URL del Desarrollador
 */
function custom_url_login(){
    return 'http://nerdytrust.com';
}
add_filter( 'login_headerurl', 'custom_url_login' );

/**
 * Método para customizar el logo del login en la pantalla de login del administrador
 * @return
 */
function custom_login_logo(){
    echo '<style type="text/css">
        .login h1 a {
            background-image: url(' . get_template_directory_uri() . '/img/logo_login.png);
            padding-bottom: 30px;
        }
    </style>';
}
add_action( 'login_enqueue_scripts', 'custom_login_logo' );

/**
 * Métodos para agregar un widget en el dashboard con la información técnica del sistema
 * @return
 */
function custom_dashboard_widget(){
    echo '<ul>
                <li>Release Date: Mayo 2015</li>
                <li>Author: Eric Bravo para Nerdy Trust</li>
                <li>Hosting Provider: Nerdy Trust</li>
            </ul>';
}

function custom_add_dashboard_widgets(){
    wp_add_dashboard_widget( 'wp_dashboard_widget', 'Información Técnica', 'custom_dashboard_widget' );
}
add_action( 'wp_dashboard_setup', 'custom_add_dashboard_widgets' );

/**
 * Método para customizar el logo del admin dashboard de Wordpress
 * @return
 */
function custom_dashboard_logo(){
    echo '<style type="text/css">
        #wp-admin-bar-wp-logo {
            width: 42px;
        }
        #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
            content: url(' . get_template_directory_uri() . '/img/dashboard-logo.png) !important;
            top: -4px;
        }
        #wpadminbar #wp-admin-bar-wp-logo > a.ab-item {
            pointer-events: none;
            cursor: default;
        }
    </style>';
}
add_action( 'wp_before_admin_bar_render', 'custom_dashboard_logo', 0 );

function custom_login_url_title(){
    return 'Powered by Nerdy Trust';
}
add_filter( 'login_headertitle', 'custom_login_url_title' );

/**
 * Método para reemplazar el placeholder de los productos de woocommerce
 * cuando no tienen imagen adjuntada
 * @return string URL de la imagen splash o placeholder asignada por nosotros
 */
function custom_fix_woocommerce_thumbnail(){
    add_filter( 'woocommerce_placeholder_img_src', 'custom_woocommerce_placeholder_img_src' );
    function custom_woocommerce_placeholder_img_src(){
        return get_template_directory_uri() . '/img/splash_tienda.png';
    }
}
add_action( 'init', 'custom_fix_woocommerce_thumbnail' );

