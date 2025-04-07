<?php




/**
 * Template Name: Résultats de recherche
 * Description: Affiche les résultats de recherche avec un layout responsive.
 */

get_header();
?>

<main class="site__main">
    <section class="recherche__section">
        <div class="recherche__entete">
            <h1 class="recherche__titre">Résultats pour : <span><?php echo get_search_query(); ?></span></h1>
        </div>

        <?php if (have_posts()) : ?>
            <div class="recherche__resultats">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('gabarits/carte'); ?>
                <?php endwhile; ?>
            </div>

            <div class="recherche__pagination">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('&laquo; Précédent', 'Adil'),
                    'next_text' => __('Suivant &raquo;', 'Adil'),
                ));
                ?>
            </div>
        <?php else : ?>
            <p class="recherche__vide">Aucun résultat trouvé pour votre recherche. Essayez avec d'autres mots-clés.</p>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
