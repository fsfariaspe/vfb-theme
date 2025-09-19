<?php
/**
 * Funções de dados e conteúdo
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */

// Evitar acesso direto
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Função para buscar promoções (placeholder para futuras integrações)
 */
function vfb_get_promotions($limit = 3) {
    // Placeholder - aqui você pode integrar com APIs de fornecedores
    $promotions = array(
        array(
            'title' => 'Fernando de Noronha',
            'description' => '7 dias de paraíso com hospedagem e passeios inclusos',
            'price' => 'R$ 2.499',
            'original_price' => 'R$ 3.299',
            'image' => get_template_directory_uri() . '/assets/images/destinations/fernando-noronha.jpg',
            'link' => '#'
        ),
        array(
            'title' => 'Chapada Diamantina',
            'description' => 'Aventura e natureza em um dos destinos mais belos do Brasil',
            'price' => 'R$ 1.899',
            'original_price' => 'R$ 2.399',
            'image' => get_template_directory_uri() . '/assets/images/destinations/chapada-diamantina.jpg',
            'link' => '#'
        ),
        array(
            'title' => 'Egito',
            'description' => 'Mistérios milenares e histórias que atravessam o tempo',
            'price' => 'R$ 4.999',
            'original_price' => 'R$ 6.299',
            'image' => get_template_directory_uri() . '/assets/images/destinations/egito.jpg',
            'link' => '#'
        )
    );
    
    return array_slice($promotions, 0, $limit);
}

/**
 * Função para buscar serviços especializados
 */
function vfb_get_services() {
    return array(
        array(
            'icon' => '✈️',
            'title' => 'Passagens Aéreas',
            'description' => 'Melhores preços e conexões para todo o Brasil e mundo',
            'color' => 'bg-blue-100'
        ),
        array(
            'icon' => '🏨',
            'title' => 'Hotéis',
            'description' => 'Acomodações selecionadas para sua comodidade',
            'color' => 'bg-green-100'
        ),
        array(
            'icon' => '📦',
            'title' => 'Pacotes Completos',
            'description' => 'Viagens organizadas com tudo incluso',
            'color' => 'bg-purple-100'
        ),
        array(
            'icon' => '🛡️',
            'title' => 'Seguros de Viagem',
            'description' => 'Proteção completa para sua tranquilidade',
            'color' => 'bg-yellow-100'
        ),
        array(
            'icon' => '💼',
            'title' => 'Trabalhos no Japão',
            'description' => 'Oportunidades de trabalho e intercâmbio',
            'color' => 'bg-blue-100'
        ),
        array(
            'icon' => '⛪',
            'title' => 'Terra Santa',
            'description' => 'Peregrinações e viagens religiosas',
            'color' => 'bg-red-100'
        )
    );
}

/**
 * Função para buscar destinos populares
 */
function vfb_get_destinations() {
    return array(
        array(
            'name' => 'Fernando de Noronha',
            'image' => get_template_directory_uri() . '/assets/images/destinations/fernando-noronha.jpg',
            'link' => '#'
        ),
        array(
            'name' => 'Chapada Diamantina',
            'image' => get_template_directory_uri() . '/assets/images/destinations/chapada-diamantina.jpg',
            'link' => '#'
        ),
        array(
            'name' => 'Alberta, Canadá',
            'image' => get_template_directory_uri() . '/assets/images/destinations/alberta-canada.jpg',
            'link' => '#'
        ),
        array(
            'name' => 'Egito',
            'image' => get_template_directory_uri() . '/assets/images/destinations/egito.jpg',
            'link' => '#'
        ),
        array(
            'name' => 'Kyoto, Japão',
            'image' => get_template_directory_uri() . '/assets/images/destinations/kyoto-japao.jpg',
            'link' => '#'
        ),
        array(
            'name' => 'Santiago, Chile',
            'image' => get_template_directory_uri() . '/assets/images/destinations/santiago-chile.jpg',
            'link' => '#'
        )
    );
}
