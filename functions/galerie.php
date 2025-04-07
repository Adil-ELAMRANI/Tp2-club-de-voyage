<?php // Register Custom Post Type for Gallerie
function create_gallerie_post_type()
{
    $args = array(
        'public' => true,
        'label'  => 'Gallerie Home',
        'supports' => array('title', 'thumbnail'),
        'menu_icon' => 'dashicons-format-gallerie',
    );
    register_post_type('gallerie_home', $args);
}
add_action('init', 'create_gallerie_post_type');

// Add Custom Field for URL
function add_gallerie_url_field()
{
    add_meta_box(
        'gallerie_url', // ID
        'Page URL', // Title
        'render_gallerie_url_field', // Callback
        'gallerie_home', // Post Type
        'normal', // Context
        'default' // Priority
    );
}
add_action('add_meta_boxes', 'add_gallerie_url_field');

// Render the URL Field
function render_gallerie_url_field($post)
{
    $url = get_post_meta($post->ID, 'gallerie_url', true);
    echo '<input type="url" name="gallerie_url" value="' . esc_url($url) . '" style="width: 100%;" placeholder="Enter the page URL">';
}

// Save the URL Field
function save_gallerie_url_field($post_id)
{
    if (array_key_exists('gallerie_url', $_POST)) {
        update_post_meta(
            $post_id,
            'gallerie_url',
            esc_url_raw($_POST['gallerie_url'])
        );
    }
}
add_action('save_post', 'save_gallerie_url_field');