<?php

class Custom_walker_page_list extends Walker_Page {

    function start_el(&$output, $page, $depth, $args, $current_page ){
        if ( $depth )
            $indent = str_repeat('\t', $depth);
        else
            $indent = '';

        extract( $args, EXTR_SKIP );
        $css_class = array( 'page_item', 'page-item-' . $page->ID );
        if ( ! empty( $current_page ) ){
            $_current_page = get_page( $current_page );
            _get_post_ancestors( $_current_page );
            if ( isset ( $_current_page ) && in_array( $page->ID, (array) $_current_page->ancestors ) )
                $css_class[] = 'current_page_ancestor';
            if ( $page->ID == $current_page )
                $css_class[] = 'current_page_item';
            elseif ( $_current_page && $page->ID == $_current_page->post_parent )
                $css_class[] = 'current_page_parent';
        } elseif ( $page->ID == get_option( 'page_for_posts' ) ){
            $css_class[] = 'current_page_parent';
        }

        $css_class = implode( ' ', apply_filters( 'page_css_class', $css_class, $page, $depth, $args, $current_page ) );
        if ( $page->ID != $current_page )
            $output .= $indent . '<li><p><a href="' . get_permalink( $page->ID ) . '">' . $link_before . get_the_title( $page->ID ) . $link_after . '</a></p><span class="fecha">+</span></li>';
        
        if ( ! empty( $show_date ) ){
            if ( 'modified' == $show_date )
                $time = $page->post_modified;
            else
                $time = $page->post_date;

            $output .= " " . mysql2date( $date_format, $time );
        }
    }
}