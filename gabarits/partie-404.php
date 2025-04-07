<section class="erreur-404" style="background-image: url('<?php echo esc_url(get_theme_mod('image_404')); ?>');">
    <div class="erreur-404__contenu">
        <h1 class="erreur-404__titre">
            <?php echo esc_html(get_theme_mod('titre_404', "Oops, vous avez échoué sur l'île 404 !")); ?>
        </h1>

        <p class="erreur-404__message">
            <?php 
            echo esc_html(get_theme_mod('message_404', 
            "Pas de panique, cher membre explorateur ! 
            Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. 
            Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d’exception !")); ?>
        </p>

        <div class="erreur-404__recherche">
            <?php get_search_form(); ?>
        </div>

        <div class="erreur-404__bouton">
            <a href="<?php echo esc_url(home_url()); ?>" class="btn-accueil" style="background-color: 
            <?php echo get_theme_mod('couleur_404', '#0073aa'); ?>;">
                Retour à l’accueil
            </a>
        </div>

        <nav class="erreur-404__menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu_404',
                'container' => false,
                'menu_class' => 'erreur-404__menu-liste'
            ));
            ?>
        </nav>
    </div>
</section>