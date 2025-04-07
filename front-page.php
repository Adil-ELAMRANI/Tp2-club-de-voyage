<?php get_header(); ?>

<?php get_template_part('gabarits/hero'); ?>
<?php get_template_part('gabarits/registration'); ?>

<!-- Section Galerie -->
<section class="galerie-section">
    <h2 class="photo-grid-title">Nos destinations favorites</h2>
    <div class="galerie-global">
        <?php
        $galerie_query = new WP_Query(array(
            'category_name' => 'galerie',
            'posts_per_page' => 6,
        ));
        if ($galerie_query->have_posts()) :
            while ($galerie_query->have_posts()) : $galerie_query->the_post(); ?>
                <div class="galerie">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="galerie-image">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                    <?php endif; ?>
                    <?php the_content(); ?>
                </div>
            <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</section>

<!-- Section Populaire -->
<section class="populaire global">
    <div class="global">
        <h2 class="photo-grid-title">Nos Destinations populaires</h2>
        <?php
        $populaire_query = new WP_Query(array(
            'category__not_in' => array(get_cat_ID('galerie')),
            'posts_per_page' => 6,
        ));
        if ($populaire_query->have_posts()) :
            while ($populaire_query->have_posts()) : $populaire_query->the_post(); ?>
                <?php get_template_part('gabarits/carte'); ?>
            <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</section>

<!-- Section Destination par catégorie -->
<section class="global destination">
    <h2 class="photo-grid-title">Nos Destinations par catégorie</h2>
    <?php
    $categories = get_terms(array(
        'taxonomy' => 'category',
        'exclude' => array(get_cat_ID('Non classé'), get_cat_ID('galerie')),
        'hide_empty' => false,
    ));
    if (!empty($categories)) : ?>
        <div class="destination__bouton">
            <?php foreach ($categories as $category) : ?>
                <a href="<?php echo esc_url(get_term_link($category)); ?>" class="category-button">
                    <?php echo esc_html($category->name); ?>
                </a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>

<!-- Section Articles par catégorie -->
<section class="destination">
    <div class="global">
        <h2>Articles de la catégorie</h2>
        <div class="destination__list">
            <?php
            $category_posts = new WP_Query(array(
                'category_name' => 'nom-de-la-categorie',
                'posts_per_page' => 6,
            ));
            if ($category_posts->have_posts()) :
                while ($category_posts->have_posts()) : $category_posts->the_post(); ?>
                    <div class="destination__list-item">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                    </div>
                <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
