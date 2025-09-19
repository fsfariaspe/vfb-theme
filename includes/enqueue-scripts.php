<?php
/**
 * Enfileirar estilos e scripts
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */

// Evitar acesso direto
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enfileirar estilos e scripts
 */
function vfb_scripts() {
    // Estilos
    wp_enqueue_style('vfb-style', get_stylesheet_uri(), array(), '1.1.7');
    wp_enqueue_style('vfb-custom', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.1.7');
    
    // Scripts
    wp_enqueue_script('vfb-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.1.7', true);
    
    // Localizar script para AJAX
    wp_localize_script('vfb-main', 'vfb_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('vfb_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'vfb_scripts');
