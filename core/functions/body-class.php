<?php

add_filter('body_class','add_custom_body_class', 99 );
function add_custom_body_class( $classes ) {


    
    if ( is_singular( 'post' ) ) {
        global $post;
        $classes[] = 'qodef-header--standard-for-single';
    }


    
    return $classes;
}