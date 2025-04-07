<?php

/**
 * Active certaines fonctionnalités du thème WordPress
 * - Titre automatique des pages
 * - Support des menus
 * - Support des images mises en avant (thumbnails)
 * - Logo personnalisable avec des dimensions flexibles
 * - Support du HTML5 pour certains éléments
 */
function mon_theme_supports()
{
    add_theme_support('title-tag'); // Permet à WordPress de gérer automatiquement le titre des pages
    add_theme_support('menus'); // Active la gestion des menus dans l'interface d'administration de WordPress
    add_theme_support('post-thumbnails'); // Active la prise en charge des images mises en avant pour les articles et pages
    add_theme_support('custom-logo', array(
        'height'      => 250, // Hauteur par défaut du logo
        'width'       => 250, // Largeur par défaut du logo
        'flex-height' => true, // Autorise un ajustement flexible de la hauteur
        'flex-width'  => true, // Autorise un ajustement flexible de la largeur
    ));
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption')); // Active le support du HTML5 pour certains éléments
}

// Exécute la fonction `mon_theme_supports` après l'initialisation du thème
add_action('after_setup_theme', 'mon_theme_supports');



/**
 * Charge les fichiers CSS du thème
 */
function theme_tp_enqueue_styles()
{
    // Charge le fichier Normalize.css pour une meilleure compatibilité entre navigateurs
    /*wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css');*/

    // Charge le fichier style.css du thème avec une version basée sur la date de modification pour éviter la mise en cache
    wp_enqueue_style(
        'main-styles',
        get_template_directory_uri() . '/style.css',
        array(), // Aucune dépendance spécifique
        filemtime(get_template_directory() . '/style.css') // Met à jour la version en fonction de la date de modification du fichier
    );

    /*wp_enqueue_script(
        'destination_restapi',
        get_template_directory_uri() . '/js/destination.js',
        array(),
        filemtime(get_template_directory() . '/js/destination.js'),
        true
    );*/

   /* wp_enqueue_script(
        'custom-script',
         get_template_directory_uri() . '/js/destination.js',
          array(),
          '1.0', 
          true);*/
    wp_enqueue_script(
        'custom-script',
        get_template_directory_uri() . '/js/destination.js',
        array(),
        time(), // Ajoute un timestamp pour éviter le cache
        true
    );
    
}
// Ajoute les styles au chargement des scripts de WordPress
add_action('wp_enqueue_scripts', 'theme_tp_enqueue_styles');


/**
 * Modifie la requête principale de WordPress avant son exécution
 * Le hook `pre_get_posts` est déclenché juste avant d'exécuter la requête principale
 * On filtre ici les articles affichés sur la page d'accueil
 *
 * @param WP_Query $query La requête principale de WordPress
 */
function modifie_requete_principal($query)
{
    // Vérifie si on est sur la page d'accueil, que c'est la requête principale et qu'on n'est pas dans l'admin
    if ($query->is_home() && $query->is_main_query() && ! is_admin()) {
        $query->set('category_name', 'Populaires'); // Filtre pour n'afficher que les articles de la catégorie "Populaires"
        $query->set('orderby', 'title'); // Trie les articles par titre
        $query->set('order', 'ASC'); // Trie par ordre alphabétique croissant
    }
}
// Exécute la fonction avant l'exécution de la requête principale de WordPress
add_action('pre_get_posts', 'modifie_requete_principal');

function ajout_options()
{
    // Activer le support des menus personnalisés
    add_theme_support('menus');
    add_theme_support('custom - logo', array(
        'height'      => 159,
        'width'       => 154,
        'flex - height' => true,
        'flex - width'  => true,
    ));
}
add_action('after_setup_theme', 'ajout_options');

function categories_liste() {
    $categories = get_categories();
    if (!empty($categories)) {
        echo '<ul>';
        foreach ($categories as $category) {
            echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
        }
        echo '</ul>';
    }
}
