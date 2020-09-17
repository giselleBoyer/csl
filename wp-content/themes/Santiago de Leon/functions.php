<?php

function enqueue_parent_theme_style()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_parent_theme_style');

function enqueue_child_theme_style()
{
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_style', 100);

function enqueue_child_theme_scripts()
{
    wp_enqueue_script('child-js', get_stylesheet_directory_uri() . '/assets/js/main.js');
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_scripts');

wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array('jquery'), '1.0', true);

function autoload($dirs = array())
{
    foreach ($dirs as $dir) {
        foreach (scandir(dirname(__FILE__) . $dir) as $filename) {
            $path = dirname(__FILE__) . $dir . $filename;
            $pathinfo = pathinfo($path);
            if (array_key_exists('extension', $pathinfo) && $pathinfo["extension"] == "php" && is_file($path)) {
                require_once $path;
            } elseif ($pathinfo['filename'] != "" && $pathinfo['filename'] != "." && $pathinfo['filename'] != "..") {
                if (is_dir(dirname(__FILE__) . $dir . $pathinfo['filename'])) {
                    foreach (scandir(dirname(__FILE__) . $dir . $pathinfo['filename']) as $filename) {

                        $path = dirname(__FILE__) . $dir . $pathinfo['filename'] . '/' . $filename;
                        $pathinfo_sc = pathinfo($path);

                        if (array_key_exists('extension', $pathinfo_sc) && $pathinfo_sc["extension"] == "php" && is_file($path)) {
                            require_once $path;
                        }
                    }
                }
            }
        }
    }
}


$autoload_dirs = array(
    '/shortcodes/'
);
autoload($autoload_dirs);

//DOCTOR SEARCH
//[search_dr]
function shapeSpace_display_search_form()
{
    return get_search_form(false);
}
add_shortcode('display_search_form', 'shapeSpace_display_search_form');

function filtro_mostrar_entradas($query)
{
    if ($query->is_search) {
         $query->set('post_type', array(
             'post', 
             'especialista', 
        ));
    }
    return $query;
}
add_filter('pre_get_posts', 'filtro_mostrar_entradas');
