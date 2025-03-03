<?php

function mon_theme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}

add_action('after_setup_theme', 'mon_theme_supports');


function theme_tp_enqueue_styles()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style(
        'main-styles',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    );
}
add_action('wp_enqueue_scripts', 'theme_tp_enqueue_styles');


/**
 * Modifie la requete principale de WordPress avant qu'elle soit exÃ©cutÃ©
 * le hook Â« pre_get_posts Â» se manifeste juste avant d'exÃ©cuter la requÃªte principal
 * DÃ©pendant de la condition initiale on peut filtrer un type particulier de requÃªte
 * Dans ce cas ci nous filtrons la requÃªte de la page d'accueil
 * @param WP_query  $query la requÃªte principal de WP
 */
function modifie_requete_principal($query)
{
    if ($query->is_home() && $query->is_main_query() && ! is_admin()) {
        $query->set('category_name', 'Populaires');
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'modifie_requete_principal');