<?php

// Tema destekleri
function vlmf_theme_setup()
{
    add_theme_support('custom-logo');

    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'vlmf'),
    ));
}
add_action('after_setup_theme', 'vlmf_theme_setup');


function vlmf_theme_scripts()
{
    wp_enqueue_style('vlmf-style', get_stylesheet_uri()); // style.css
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null, 'all');
    wp_enqueue_style('glightbox-css', get_template_directory_uri() . '/assets/css/glightbox.min.css', array(), null, 'all');
    wp_enqueue_style('tiny-slider-css', get_template_directory_uri() . '/assets/css/tiny-slider.css', array(), null, 'all');
    wp_enqueue_style('lineicons-css', get_template_directory_uri() . '/assets/css/lineicons.css', array(), null, 'all');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css', array(), null, 'all');

    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), null, true);
    wp_enqueue_script('glightbox-js', get_template_directory_uri() . '/assets/js/glightbox.min.js', array(), null, true);
    wp_enqueue_script('tiny-slider-js', get_template_directory_uri() . '/assets/js/tiny-slider.js', array(), null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'vlmf_theme_scripts');

// Bootstrap classes for nav menu items
function vlmf_add_menu_item_class($classes, $item, $args)
{
    if ($args->theme_location === 'primary_menu') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'vlmf_add_menu_item_class', 10, 3);

function vlmf_add_menu_link_class($atts, $item, $args)
{
    if ($args->theme_location === 'primary_menu') {
        $atts['class'] = 'page-scroll nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'vlmf_add_menu_link_class', 10, 3);

// Sidebar alanı tanımı
function vlmf_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Left Sidebar', 'vlmf'),
        'id'            => 'sidebar-left',
        'description'   => __('Bu alan sol sidebar için kullanılır.', 'vlmf'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
}
add_action('widgets_init', 'vlmf_widgets_init');
