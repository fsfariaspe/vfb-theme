<?php
/**
 * Registrar áreas de widgets
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */

// Evitar acesso direto
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Registrar áreas de widgets
 */
function vfb_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar Principal', 'viaje-facil-brasil'),
        'id'            => 'sidebar-1',
        'description'   => __('Adicione widgets aqui para aparecer na sidebar.', 'viaje-facil-brasil'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 1', 'viaje-facil-brasil'),
        'id'            => 'footer-1',
        'description'   => __('Widgets do rodapé coluna 1.', 'viaje-facil-brasil'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 2', 'viaje-facil-brasil'),
        'id'            => 'footer-2',
        'description'   => __('Widgets do rodapé coluna 2.', 'viaje-facil-brasil'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 3', 'viaje-facil-brasil'),
        'id'            => 'footer-3',
        'description'   => __('Widgets do rodapé coluna 3.', 'viaje-facil-brasil'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'vfb_widgets_init');
