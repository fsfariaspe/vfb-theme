<?php
/**
 * Configuração do tema
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */

// Evitar acesso direto
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configuração do tema
 */
function vfb_setup() {
    // Suporte a título dinâmico
    add_theme_support('title-tag');
    
    // Suporte a imagens destacadas
    add_theme_support('post-thumbnails');
    
    // Suporte a HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Suporte a logo personalizada
    add_theme_support('custom-logo', array(
        'height'      => 120,
        'width'       => 120,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Suporte a menus
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'viaje-facil-brasil'),
        'footer'  => __('Menu do Rodapé', 'viaje-facil-brasil'),
    ));
    
    // Suporte a cores personalizadas
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    
    // Suporte a editor de blocos
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    
    // Suporte a responsividade
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'vfb_setup');

/**
 * Personalizar tamanhos de imagens
 */
function vfb_image_sizes() {
    add_image_size('vfb-hero', 1920, 1080, true);
    add_image_size('vfb-thumbnail', 300, 200, true);
    add_image_size('vfb-medium', 600, 400, true);
    add_image_size('vfb-large', 1200, 800, true);
}
add_action('after_setup_theme', 'vfb_image_sizes');

/**
 * Adicionar classes personalizadas ao body
 */
function vfb_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'home-page';
    }
    
    if (is_page('quem-somos')) {
        $classes[] = 'about-page';
    }
    
    return $classes;
}
add_filter('body_class', 'vfb_body_classes');
