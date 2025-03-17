<?php

/**
 * Modèle pour les résultats de recherche
 */
get_header();
?>
<main class="site__main">
    <section class="recherche__section">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('gabarits/carte'); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun résultat trouvé.</p>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>