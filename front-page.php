<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Bienvenue à notre club de voyage</h1>
        <p>Découvrez un monde d'opportunités et d'aventures avec notre club de voyage. Que vous recherchiez des
            escapades relaxantes, des expériences culturelles enrichissantes ou des défis sportifs, nous sommes là
            pour transformer vos rêves en réalité. Rejoignez notre communauté et explorez les plus belles
            destinations du monde avec confiance et sérénité.</p>
        <a href="mailto:info@cmaisonneuve.qc.ca" class="contact-email">info@cmaisonneuve.qc.ca</a>
        <button class="cta-button">Inscription</button>
        <div class="social-icons">
            <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000" alt="Facebook" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000" alt="LinkedIn" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000" alt="Paypal" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" alt="instagram" width="20"
                height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=youtube&color=000" alt="youtube" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000" alt="snapchat" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=tiktok&color=000" alt="tiktok" width="20" height="20">
        </div>
    </div>
</section>

<!-- Registration Form -->
<section class="registration-form">
    <h2>Inscrivez-vous maintenant</h2>
    <form>
        <input type="text" placeholder="Nom" required>
        <input type="text" placeholder="Prénom" required>
        <input type="email" placeholder="Courriel" required>
        <input type="tel" placeholder="Téléphone" required>
        <button type="submit">S'INSCRIRE</button>
    </form>
</section>

<section class="populaire global">
<h2 class="photo-grid-title">Nos destinations favorites</h2>
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (in_category('galerie')) {
                    the_content();
                } else { ?>
                    <article>
                        <div class="card card--big">
                            <div class="carte__image">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('medium');
                                }
                                ?>
                            </div>
                            <div class="card__content">
                                <h2 class="card__title"><?php the_title(); ?></h2>
                                <p class="card__description"><?php echo wp_trim_words(get_the_excerpt(), 25, "..."); ?></p>
                                <a href="<?php the_permalink(); ?>">Lire la suite</a>
                            </div>
                        </div>
                    </article>
                <?php } ?>
        <?php endwhile;
        endif; ?>

    </div>

</section>
<?php get_footer(); ?>