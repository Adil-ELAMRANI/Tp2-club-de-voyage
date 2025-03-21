<?php get_header(); ?>

<?php get_template_part('gabarits/hero'); ?>
<?php get_template_part('gabarits/registration'); ?>

<section class="populaire global">
    <h2 class="photo-grid-title">Nos destinations favorites</h2>

    <div class="global">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php if (in_category('galerie')) : ?>
                    <div class="galerie">
                        <?php the_content(); ?>
                    </div>
                <?php else : ?>
                    <article>
                        <div>
                            <div class="carte__image">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('large');
                                }
                                ?>
                            </div>
                            <div class="card__content">
                                <div class="carte__category">
                                    <?php the_category(); ?>
                                </div>
                                <h2 class="card__title"><?php the_title(); ?></h2>

                                <p class="card__description"><?php the_content() ?>
                                </p>
                                <p class="card__description">
                                    Temperature maximun:<?php the_field('temperature_maximum'); ?> | Temperature minimum:<?php the_field('temperature_minimum'); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>">Lire la suite</a>
                            </div>
                        </div>
                    </article>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>