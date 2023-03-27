<?php
/*

Theme Functions File

*/

if (!defined('LANDINGPAGE_THEME_VERSION')) {
    define('LANDINGPAGE_THEME_VERSION', '1.0.0');
}


add_theme_support('custom-logo');

add_theme_support('title-tag');

add_theme_support('post-thumbnails');

add_theme_support('automatic-feed-links');

add_theme_support('site-icon', array('size' => '512x512'));

add_theme_support('customize-selective-refresh-widgets');

add_theme_support('custom-background');

register_nav_menus(array(
    'primary'   => __('Primary Menu', 'landingpage'),
    'footer'    => __('Footer Menu', 'landingpage')
));

function landingPageScripts()
{
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css');

    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), LANDINGPAGE_THEME_VERSION, true);

    wp_enqueue_script('chart-cdn', 'https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js', array('jquery'), LANDINGPAGE_THEME_VERSION, true);
}
add_action('wp_enqueue_scripts', 'landingPageScripts');


function customWidgetsInit()
{
    register_sidebar([
        'name'          => esc_html__('Footer-Menu', 'landingpage'),
        'id'            => 'footer-menu',
        'description'   => esc_html__('Add widgets for footer menu here', 'landingpage'),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);
}

add_action('widget_init', 'customWidgetsInit');
