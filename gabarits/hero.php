<?php

/**
 * Template Name: Hero
 */
?>




<?php 

$hero_title = get_theme_mod('hero_title', 'Default Title');
$hero_description = get_theme_mod('hero_description', 'Default Title');
$hero_couriel = get_theme_mod('hero_couriel', 'Default Title');
$hero_adresse = get_theme_mod('hero_adresse', 'Default Title');
$hero_telephone = get_theme_mod('hero_telephone', 'Default Title');
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
$hero_background = get_theme_mod('hero_background', 'Default Title');
?>

<!-- Hero Section -->
<section class="hero" style="background-image: url(<?php echo $hero_background ?>);">
    <div class="hero-content">
        <h1><?php echo $hero_title ?></h1>
        <p><?php echo $hero_description ?></p>
        <a href="mailto:<?php echo $hero_couriel ?>" class="contact-email"><?php echo $hero_couriel ?></a>
        <p>Adresse: <?php echo $hero_adresse ?></p>
        <p>Téléphone: <?php echo $hero_telephone ?></p>
        <p>Auteur: <?php echo $hero_auteur ?></p>
        <button class="cta-button">Inscription</button>
        <?php get_template_part('gabarits/icone-sociaux'); ?>
    </div>
</section>