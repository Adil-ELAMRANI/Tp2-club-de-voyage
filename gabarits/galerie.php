<?php

/**
 * Template Name: Galerie
 */

// Query to get gallery items
$args = array(
    'post_type' => 'gallery_home',
    'posts_per_page' => 10,
);
$gallery_query = new WP_Query($args);

if ($gallery_query->have_posts()) :
?>
    <div class="gallery-grid">
        <?php while ($gallery_query->have_posts()) : $gallery_query->the_post(); ?>
            <?php
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $title = get_the_title();
            $page_url = get_post_meta(get_the_ID(), 'gallery_url', true);
            ?>
            <div class="gallery-item">
                <a href="<?php echo esc_url($page_url); ?>">
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>">
                    <div class="overlay">
                        <span><?php echo esc_html($title); ?></span>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p>No gallery items found.</p>
<?php endif; ?>