<?php
    // Cargar el estilo del tema padre
    function mi_tema_hijo_scripts() {
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('mi-tema-hijo-style', get_stylesheet_uri()); // Cargar el estilo del tema hijo
    }
    add_action('wp_enqueue_scripts', 'mi_tema_hijo_scripts');
?>