<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4W4-Voyage</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header-container">
            <figure class="logo">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } else {
                    echo '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
                }
                ?>
            </figure>

            <nav class="navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu' => 'menu-principal',
                    'container'      => false,
                    'menu_class'     => 'menu'
                ));
                ?>
            </nav>

            <div class="search-bar">
                <?php get_search_form(); ?>
            </div>
        </div>
    </header>
</body>

</html>