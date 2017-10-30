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
        wp_enqueue_script( 'home',
            get_stylesheet_directory_uri() . '/dist/js/home.js',
            array(),
            wp_get_theme()->get('Version'),
            true
        );           
    }

    if (is_singular('projects')) {    
        wp_enqueue_style( 'single-project',
            get_stylesheet_directory_uri() . '/dist/css/single-project.css',
            array(),
            wp_get_theme()->get('Version')
        );    
        wp_enqueue_script( 'single-project',
            get_stylesheet_directory_uri() . '/dist/js/single-project.js',
            array(),
            wp_get_theme()->get('Version'),
            true
        );         
    }
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );