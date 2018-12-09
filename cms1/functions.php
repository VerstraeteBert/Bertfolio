<?php

if (!function_exists('portfolio_setup')) {
    function portfolio_setup() {
        add_theme_support('title-tag');
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