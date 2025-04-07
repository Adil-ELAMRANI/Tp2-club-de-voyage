<?php

function theme_tp_customize_register($wp_customize)
{
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'theme_tp'),
        'priority' => 30,
    ));

    // TITLE
    $wp_customize->add_setting('hero_title', array(
        'default' => __('Default', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('hero_title', array(
        'label' => __('Title', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    // DESCRIPTION
    $wp_customize->add_setting('hero_description', array(
        'default' => __('Default', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('hero_description', array(
        'label' => __('Description', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // couriel
    $wp_customize->add_setting('hero_couriel', array(
        'default' => __('Adil', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('hero_couriel', array(
        'label' => __('Couriel', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // adresse
    $wp_customize->add_setting('hero_adresse', array(
        'default' => __('Adil', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('hero_adresse', array(
        'label' => __('Adresse', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // telephone
    $wp_customize->add_setting('hero_telephone', array(
        'default' => __('Adil', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('hero_telephone', array(
        'label' => __('Telephone', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // AUTEUR
    $wp_customize->add_setting('hero_auteur', array(
        'default' => __('Adil', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    //Ajoute du CTA dans la section hero

    $wp_customize->add_setting('hero_cta_text', array(
        'default' => __('Lire la suite', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_cta_text', array(
        'label' => __('CTA Button Text', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // COULEUR
    $wp_customize->add_setting('hero_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
        'label' => __('Hero Couleur', 'theme_tp'),
        'section' => 'hero_section',
    )));


    // BACKGROUND
    $wp_customize->add_setting('hero_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
        'label' => __('Hero Background Image', 'theme_tp'),
        'section' => 'hero_section',
    )));
}

add_action('customize_register', 'theme_tp_customize_register');

function theme_personnalisation($wp_customize) {
    $wp_customize->add_section('section_404', array(
      'title' => __('Page 404', 'theme_tp'),
      'priority' => 30,
    ));
  
    $wp_customize->add_setting('image_404', array(
      'default' => get_template_directory_uri() . '/images/image-404-default.jpg',
      'sanitize_callback' => 'esc_url_raw'
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_404', array(
      'label' => __('Image de fond', 'theme_tp'),
      'section' => 'section_404',
      'settings' => 'image_404',
    )));
  
    $wp_customize->add_setting('titre_404', array(
      'default' => "Oops, vous avez échoué sur l'île 404 !"
    ));
  
    $wp_customize->add_control('titre_404', array(
      'label' => __('Titre de la page 404', 'theme_tp'),
      'section' => 'section_404',
      'type' => 'text',
    ));
  
    $wp_customize->add_setting('message_404', array(
      'default' => "Pas de panique, cher membre explorateur ! 
      Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. 
      Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d’exception !"
    ));
  
    $wp_customize->add_control('message_404', array(
      'label' => __('Message personnalisé', 'theme_tp'),
      'section' => 'section_404',
      'type' => 'textarea',
    ));
  
    // Couleur du bouton et recherche
    $wp_customize->add_setting('couleur_404', array(
      'default' => '#ff9900'
    ));
  
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'couleur_404', array(
      'label' => __('Couleur des boutons et de la zone de recherche', 'theme_tp'),
      'section' => 'section_404',
    )));
  }
  add_action('customize_register', 'theme_personnalisation');
  