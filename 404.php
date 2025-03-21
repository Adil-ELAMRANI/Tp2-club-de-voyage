<?php

/**
 * Template Name: 404 Page
 * Description: Page personnalisée pour les erreurs 404.
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="recherche__section">
            <header class="page-header">
                <h1 class="page-title">Page introuvable</h1>
            </header>

            <div class="page-content">
                <p>Désolé, la page que vous recherchez n'existe pas ou a été déplacée.</p>
                <p>Vous pouvez essayer une recherche ou retourner à <a href="<?php echo esc_url(home_url('/')); ?>">l'accueil</a>.</p>

                <?php get_search_form(); ?>
            </div>
        </section>
    </main>
</div>

<?php
get_footer();
?>