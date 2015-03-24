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