<?php

/**
 * Template Name: Hero
 */
?>




<?php $hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
$hero_couriel = get_theme_mod('hero_couriel', 'Default Title');
$hero_title = get_theme_mod('hero_title', 'Default Title');
$hero_description = get_theme_mod('hero_description', 'Default Title');
$hero_background = get_theme_mod('hero_background', 'Default Title');
?>

<!-- Hero Section -->
<section class="hero" style="background-image: url(<?php echo $hero_background ?>);">
    <div class="hero-content">
        <h1><?php echo $hero_title ?></h1>
        <p><?php echo $hero_description ?></p>
        <a href="mailto:<?php echo $hero_couriel ?>" class="contact-email"><?php echo $hero_couriel ?></a>
        <p>Auteur: <?php echo $hero_auteur ?></p>
        <button class="cta-button">Inscription</button>
        <?php get_template_part('gabarits/icone-sociaux'); ?>

    </div>
</section>