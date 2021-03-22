<?php

namespace App;

// Theme customizer API

function add_custom_theme_customization($wp_customize) {

    $wp_customize->add_panel('theme-customization', array(
        'priority'  => 10,
        'title'     => 'Modification du thème',
        'description' => 'Modifier le thème Portfolio'
    ));

    // Jumbotron section

    $wp_customize->add_section('jumbotron-section' , array(
        'title'      => 'Personnalisation du jumbotron',
        'priority'   => 2,
        'description' => 'Vous permet de modifier le texte ainsi que les boutons du jumbotron',
        'panel' => 'theme-customization'
    ));

    $wp_customize->add_setting('jumbotron-btn1-text' , array(
        'default'   => 'Me contacter.',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'jumbotron-btn1-text',
            array(
                'label'    => 'Texte du 1er bouton',
                'section'  => 'jumbotron-section',
                'settings' => 'jumbotron-btn1-text',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_setting('jumbotron-btn2-text' , array(
        'default'   => 'Mes réalisations.',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'jumbotron-btn2-text',
            array(
                'label'    => 'Texte du 2eme bouton',
                'section'  => 'jumbotron-section',
                'settings' => 'jumbotron-btn2-text',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_setting('jumbotron-btn1-link' , array(
        'default'   => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'jumbotron-btn1-link',
            array(
                'label'    => 'Lien du 1er bouton',
                'section'  => 'jumbotron-section',
                'settings' => 'jumbotron-btn1-link',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_setting('jumbotron-btn2-link' , array(
        'default'   => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'jumbotron-btn2-link',
            array(
                'label'    => 'Lien du 2eme bouton',
                'section'  => 'jumbotron-section',
                'settings' => 'jumbotron-btn2-link',
                'type'     => 'text'
            )
        )
    );

    // Services section

    $wp_customize->add_section('services-section' , array(
        'title'      => 'Personnalisation des services',
        'priority'   => 3,
        'description' => 'Vous permet de modifier les 4 sections de service',
        'panel' => 'theme-customization'
    ));
    
    $wp_customize->add_setting('services1-title' , array(
        'default'   => 'Prise de contact',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'services1-title',
            array(
                'label'    => 'Titre du 1er service',
                'section'  => 'services-section',
                'settings' => 'services1-title',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_setting('services1-description' , array(
        'default'   => 'Après une prise de contact par e-mail ou par téléphone. Nous voyons ensembles vos attentes pour votre site internet.',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'services1-description',
            array(
                'label'    => 'Description du 1er service',
                'section'  => 'services-section',
                'settings' => 'services1-description',
                'type'     => 'textarea'
            )
        )
    );

    $wp_customize->add_setting('services2-title' , array(
        'default'   => 'Développement web',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'services2-title',
            array(
                'label'    => 'Titre du 2ème service',
                'section'  => 'services-section',
                'settings' => 'services2-title',
                'type'     => 'text'
            )
        )
    );
    
    $wp_customize->add_setting('services2-description' , array(
        'default'   => 'Le développement du site commence en suivant l\'image de votre entreprise (couleurs, ..).',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'services2-description',
            array(
                'label'    => 'Description du 2ème service',
                'section'  => 'services-section',
                'settings' => 'services2-description',
                'type'     => 'textarea'
            )
        )
    );

    $wp_customize->add_setting('services3-title' , array(
        'default'   => 'Ajustements',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'services3-title',
            array(
                'label'    => 'Titre du 3eme service',
                'section'  => 'services-section',
                'settings' => 'services3-title',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_setting('services3-description' , array(
        'default'   => 'Je vous présente la version développée du site et effectue des changements si besoin.',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'services3-description',
            array(
                'label'    => 'Description du 3eme service',
                'section'  => 'services-section',
                'settings' => 'services3-description',
                'type'     => 'textarea'
            )
        )
    );

    $wp_customize->add_setting('services4-title' , array(
        'default'   => 'Mise en ligne',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'services4-title',
            array(
                'label'    => 'Titre du 4eme service',
                'section'  => 'services-section',
                'settings' => 'services4-title',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_setting('services4-description' , array(
        'default'   => 'Une fois le site vous convenant, commandez un hébergement web et je m\'occupe de la mise en ligne sur celui-ci.',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'services4-description',
            array(
                'label'    => 'Description du 4eme service',
                'section'  => 'services-section',
                'settings' => 'services4-description',
                'type'     => 'textarea'
            )
        )
    );

    // Contact section

    $wp_customize->add_section('contact-section' , array(
        'title'      => 'Personnalisation de la section contact',
        'priority'   => 3,
        'description' => 'Vous permet de modifier le texte ainsi que les boutons du contact',
        'panel' => 'theme-customization'
    ));

    $wp_customize->add_setting('contact-btn-link' , array(
        'default'   => '#',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new \WP_Customize_Control($wp_customize, 'contact-btn-link',
            array(
                'label'    => 'Lien du bouton',
                'section'  => 'contact-section',
                'settings' => 'contact-btn-link',
                'type'     => 'text'
            )
        )
    );

};

add_action('customize_register', __NAMESPACE__ . '\\add_custom_theme_customization');