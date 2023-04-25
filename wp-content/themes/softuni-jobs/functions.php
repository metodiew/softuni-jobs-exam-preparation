<?php

/**
 * This function takes care of handling the assets with enqueue
 *
 * @return void
 */

function softuni_assets() {
    wp_enqueue_style( 'softuni-jobs', get_stylesheet_directory_uri() . '/assets/css/master.css', array(), filemtime(  get_template_directory() . '/assets/css/master.css' ) );
}
add_action( 'wp_enqueue_scripts', 'softuni_assets' );

/**
 * This function add a custom class
 *
 * @return void
 */
function softuni_body_class( $classes ) {
    $classes[] = 'test-class';

    return $classes;
}
add_filter( 'body_class', 'softuni_body_class' );