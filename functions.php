<?php

function simple_theme_setup()
{
    // Add an img theme support
    add_theme_support('post-thumbnails');

    //Menus
    register_nav_menus(
        array(
            'primary' => __('Primary Menu')
        )
    );
}

add_action('after_setup_theme', 'simple_theme_setup');

function set_excerpt_length()
{
    return 25;
}

add_filter('excerpt_length', 'set_excerpt_length');

// ADDING BOOTSTRAP TO THE WEBSITE
function simple_theme_enqueue_styles()
{
    wp_register_style('simple_theme_style', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
    $dependencies = array('bootstrap');
    wp_enqueue_style('simple_theme_style', get_template_directory_uri(), $dependencies);
}

add_action('wp_enqueue_scripts', 'simple_theme_enqueue_styles');

// REMOVING THE 32px ON TOP
function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'remove_admin_login_header');

// INITIALIZING WIDGETS ON SIDEBAR
function init_widgets($id)
{
    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div class="side-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
    );
}

add_action( 'widgets_init', 'init_widgets' );