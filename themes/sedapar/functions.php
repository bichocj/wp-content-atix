<?php

// esta funcion se usara para agregar recursos como css, js, font, etc
function main_scripts()
{

    // para agregar css se usara wp_enqueue_style
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '3.2');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '3.2');
    wp_enqueue_style('fonts-google', 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Muli:300,300i,400', array(), '3.2');
    wp_enqueue_style('jquery-ui', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css', array(), '3.2');

    // jquery esta por defecto en WP, para usar la version que desee debe 'desregistrar' la version actual y registrar la version nueva
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', true, null);
    wp_enqueue_script('jquery');

    // para agregar js se usara wp_enqueue_script
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1', true);

}

// agregamos los scripts de la funcion main_scripts
add_action('wp_enqueue_scripts', 'main_scripts');


function widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar', 'a1host'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar.', 'twentysixteen'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

// inicializa los recursos de nuestro WP
add_action('widgets_init', 'widgets_init');

// agrega soporte para poder usar thumbnails en los post
add_theme_support('post-thumbnails');

// agrega soporte para manejar menus dinamicos
add_theme_support('menus');

// agrega soporte para manejar widgets del sidebar
add_theme_support('widgets');
