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

    register_sidebar(array(
        'name'          => __('Sidebar Açıklama', 'vlmf'),
        'id'            => 'sidebar-description',
        'description'   => __('Sidebar metni için widget alanı.', 'vlmf'),
        'before_widget' => '<div class="sidebar-description-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => ''
    ));

    register_sidebar(array(
        'name'          => __('Sidebar Sosyal Medya', 'vlmf'),
        'id'            => 'sidebar-social',
        'description'   => __('Sidebar sosyal medya ikonları için widget alanı.', 'vlmf'),
        'before_widget' => '<div class="sidebar-social-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>'
    ));
}
add_action('widgets_init', 'vlmf_widgets_init');

function register_service_post_type()
{
    register_post_type('service', array(
        'labels' => array(
            'name' => __('Services'),
            'singular_name' => __('Service')
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-hammer',
        'supports' => array('title', 'editor'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'register_service_post_type');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Tema Ayarları',
        'menu_title' => 'Tema Ayarları',
        'menu_slug'  => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ));
}

// Footer widget alanı tanımı
function vlmf_register_footer_widget()
{
    register_sidebar(array(
        'name'          => __('Footer Alanı', 'vlmf'),
        'id'            => 'footer-widget',
        'description'   => __('Footer için bileşen alanı.', 'vlmf'),
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
}

add_action('widgets_init', 'vlmf_register_footer_widget');

// Footer kolon widget alanları tanımı
function vlmf_register_footer_columns()
{
    register_sidebar(array(
        'name'          => __('Footer Kolon 1', 'vlmf'),
        'id'            => 'footer-col-1',
        'description'   => __('Footer birinci sütun', 'vlmf'),
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Kolon 2', 'vlmf'),
        'id'            => 'footer-col-2',
        'description'   => __('Footer ikinci sütun', 'vlmf'),
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Kolon 3', 'vlmf'),
        'id'            => 'footer-col-3',
        'description'   => __('Footer üçüncü sütun', 'vlmf'),
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
}
add_action('widgets_init', 'vlmf_register_footer_columns');
