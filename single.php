<?php get_header(); ?>

<?php get_template_part('gabarits/hero'); ?>
<?php get_template_part('gabarits/registration'); ?>





<section class="populaire global">
    <h2 class="photo-grid-title">Nos destinations favorites</h2>
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (in_category('galerie')) { ?>
                    <div class="galerie">
                        <?php the_content(); ?>
                    <?php } else { ?>
                        <?php get_template_part('gabarits/carte'); ?>
                    <?php } ?>
            <?php endwhile;
        endif; ?>
                    </div>
</section>
<?php get_footer(); ?>