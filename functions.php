<?php
// Chemin vers le dossier functions
$functions_dir = get_template_directory() . '/functions/';

// Liste des fichiers à inclure
$function_files = array(
    'customizer.php',
    'options.php',
);

// Boucle pour inclure tous les fichiers
foreach ($function_files as $file) {
    include_once $functions_dir . $file;
}


function register_my_menus(){
    register_nav_menus(
        array(
            'menu-404' => __('Menu 404', 'theme-tp')
        )
    );
}
add_action('init', 'register_my_menus');
