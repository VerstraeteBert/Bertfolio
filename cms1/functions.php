<?php

if (!function_exists('portfolio_setup')) {
    function portfolio_setup() {
        add_theme_support('title-tag');
        add_theme_support( 'post-thumbnails' );
    }
}

add_action('after_setup_theme', 'portfolio_setup');

function register_portfolio_menus() {
    register_nav_menus(
        [
            'primary' => __('Primary Menu'),
            'footer' => __('Footer Social Menu')
        ]
    );
}
add_action('init', 'register_portfolio_menus');

function portfolio_scripts() {
    wp_enqueue_style('portfolio_styles', get_stylesheet_uri());
    wp_enqueue_style('font_awesome_5_brands', 'https://use.fontawesome.com/releases/v5.5.0/css/brands.css');
    wp_enqueue_style('font_awesome_5', 'https://use.fontawesome.com/releases/v5.5.0/css/fontawesome.css');
    wp_enqueue_style('font_awesome_5_solid', 'https://use.fontawesome.com/releases/v5.5.0/css/regular.css');
}
add_action('wp_enqueue_scripts', 'portfolio_scripts');

function create_work_post_type() {
register_post_type( 'work',
    array(
        'labels' => array(
            'name' => __( 'work' ),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'custom-fields',
            'excerpt'
        ),
        'rewrite' => array('slug' => 'work'),
    ));
}
add_action( 'init', 'create_work_post_type' );

/**
 * Removes width and height attributes from image tags
 *
 * @param string $html
 *
 * @return string
 */
function remove_image_size_attributes( $html ) {
    return preg_replace( '/(width|height)="\d*"/', '', $html );
}

// Remove image size attributes from post thumbnails
add_filter( 'post_thumbnail_html', 'remove_image_size_attributes' );