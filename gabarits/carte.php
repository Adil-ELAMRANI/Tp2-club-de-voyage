<?php
/**
 * Template Name: carte
 */
?>
<article>
    <div class="carte carte--big">

        <div class="carte__image">
            <a href="<?php the_permalink(); ?>">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                }
                ?>
            </a>
        </div>

        <div class="card__content">
            <div class="carte__category">
                <?php the_category(); ?>
            </div>
            <h2 class="card__title"><?php the_title(); ?></h2>

            <p class="card__description">
                <?php echo wp_trim_words(get_the_excerpt(), 25, "..."); ?>
            </p>
            <p class="card__description">
                Temperature maximun:<?php the_field('temperature_maximum'); ?> | Temperature minimum:<?php the_field('temperature_minimum'); ?>
            </p>

            <a href="<?php the_permalink(); ?>">Lire la suite</a>
        </div>
    </div>
</article>