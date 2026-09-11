<?php
/**
 * Configurações e Funções do Tema aqgoes Theme
 */

if ( ! function_exists( 'aqgoes_setup' ) ) :
    function aqgoes_setup() {
        // Suporte a título dinâmico na aba do navegador
        add_theme_support( 'title-tag' );

        // Suporte a Imagens Destacadas (Thumbnails)
        add_theme_support( 'post-thumbnails' );

        // Registrar Menu Principal
        register_nav_menus( array(
            'primary_menu' => __( 'Menu Principal', 'aqgoes-theme' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'aqgoes_setup' );

/**
 * Enfileiramento de Scripts e Estilos (Enqueue)
 */
function aqgoes_enqueue_scripts() {
    // 1. Tailwind CDN (Carregado primeiro no head)
    wp_enqueue_script( 'tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false );

    // 2. Tailwind Config local
    wp_enqueue_script( 'tailwind-config', get_template_directory_uri() . '/assets/js/tailwind-config.js', array('tailwind-cdn'), '1.0.0', false );

    // 3. Estilo principal do tema (Metadados do WP)
    wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), '1.0.0' );

    // 4. Seus estilos customizados em CSS
    wp_enqueue_style( 'aqgoes-custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0' );

    // 5. Seu JavaScript Principal (no rodapé)
    wp_enqueue_script( 'aqgoes-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'aqgoes_enqueue_scripts' );