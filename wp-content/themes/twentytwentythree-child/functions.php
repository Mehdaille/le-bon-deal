<?php

function childtheme_parent_styles() {
    // Chargement du style du thème parent
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // Chargement du style du thème enfant
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style'), // Déclare une dépendance au style du thème parent
        wp_get_theme()->get('Version') // Utilise la version du thème enfant pour invalider le cache si nécessaire
    );
}
add_action( 'wp_enqueue_scripts', 'childtheme_parent_styles' );