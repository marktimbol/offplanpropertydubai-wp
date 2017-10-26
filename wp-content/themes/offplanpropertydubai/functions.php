<?php

function my_theme_enqueue_styles() {
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    // wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->get('Version')
    );
    
    wp_enqueue_style( 'app-style',
        get_stylesheet_directory_uri() . '/dist/css/app.css',
        array(),
        wp_get_theme()->get('Version')
    );

    if ( is_front_page() || is_home() ) {
        wp_enqueue_style( 'home',
            get_stylesheet_directory_uri() . '/dist/css/home.css',
            array(),
            wp_get_theme()->get('Version')
        );
        wp_enqueue_style( 'main-carousel',
            get_stylesheet_directory_uri() . '/dist/css/main-carousel.css',
            array(),
            wp_get_theme()->get('Version')
        );   
        wp_enqueue_script( 'main-carousel',
            get_stylesheet_directory_uri() . '/dist/js/main-carousel.js',
            array(),
            wp_get_theme()->get('Version'),
            true
        );           
    }
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );