<?php
/**
 * Funções de menu e navegação
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */

// Evitar acesso direto
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Função de fallback para o menu principal
 */
function vfb_fallback_menu() {
    echo '<a href="' . esc_url(home_url('/')) . '" class="text-gray-700 hover:text-blue-600 transition-colors duration-300">Início</a>';
    echo '<a href="#" class="text-gray-700 hover:text-blue-600 transition-colors duration-300">Pacotes</a>';
    echo '<a href="#" class="text-gray-700 hover:text-blue-600 transition-colors duration-300">Passagens Aéreas</a>';
    echo '<a href="#" class="text-gray-700 hover:text-blue-600 transition-colors duration-300">Hotéis</a>';
    echo '<a href="' . esc_url(home_url('/quem-somos')) . '" class="text-gray-700 hover:text-blue-600 transition-colors duration-300">Quem Somos</a>';
    echo '<a href="#" class="text-gray-700 hover:text-blue-600 transition-colors duration-300">Contato</a>';
}

/**
 * Função de fallback para o menu mobile
 */
function vfb_fallback_mobile_menu() {
    echo '<a href="' . esc_url(home_url('/')) . '" class="text-gray-700 hover:text-blue-600 py-2">Início</a>';
    echo '<a href="#" class="text-gray-700 hover:text-blue-600 py-2">Pacotes</a>';
    echo '<a href="#" class="text-gray-700 hover:text-blue-600 py-2">Passagens Aéreas</a>';
    echo '<a href="#" class="text-gray-700 hover:text-blue-600 py-2">Hotéis</a>';
    echo '<a href="' . esc_url(home_url('/quem-somos')) . '" class="text-gray-700 hover:text-blue-600 py-2">Quem Somos</a>';
    echo '<a href="#" class="text-gray-700 hover:text-blue-600 py-2">Contato</a>';
}
