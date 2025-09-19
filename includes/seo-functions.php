<?php
/**
 * Funções de SEO e otimização
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */

// Evitar acesso direto
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Função para adicionar meta tags SEO
 */
function vfb_seo_meta_tags() {
    if (is_front_page()) {
        echo '<meta name="description" content="Viaje Fácil Brasil - Sua agência de viagens de confiança. Pacotes, passagens aéreas, hotéis e muito mais. Transformando sonhos em experiências inesquecíveis desde 2018.">' . "\n";
        echo '<meta name="keywords" content="viagem, pacotes, passagens aéreas, hotéis, agência de viagem, Fernando de Noronha, Chapada Diamantina, Egito, Japão, Canadá">' . "\n";
        echo '<meta property="og:title" content="Viaje Fácil Brasil - Sua Próxima História Começa Aqui">' . "\n";
        echo '<meta property="og:description" content="Sua agência de viagens de confiança. Pacotes, passagens aéreas, hotéis e muito mais.">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:url" content="' . home_url() . '">' . "\n";
        echo '<meta property="og:image" content="' . get_template_directory_uri() . '/assets/images/Logo_VFB_07-2000x2000.png">' . "\n";
    }
}
add_action('wp_head', 'vfb_seo_meta_tags');

/**
 * Função para adicionar schema markup
 */
function vfb_schema_markup() {
    if (is_front_page()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'TravelAgency',
            'name' => 'Viaje Fácil Brasil',
            'description' => 'Sua agência de viagens de confiança, transformando sonhos em experiências inesquecíveis desde 2018.',
            'url' => home_url(),
            'logo' => get_template_directory_uri() . '/assets/images/Logo_VFB_07-2000x2000.png',
            'contactPoint' => array(
                '@type' => 'ContactPoint',
                'telephone' => '+55-81-99242-9403',
                'contactType' => 'customer service',
                'email' => 'atendimento@viajefacilbrasil.com.br'
            ),
            'address' => array(
                '@type' => 'PostalAddress',
                'addressLocality' => 'Recife',
                'addressRegion' => 'PE',
                'addressCountry' => 'BR'
            ),
            'foundingDate' => '2018',
            'serviceArea' => array(
                '@type' => 'Country',
                'name' => 'Brazil'
            )
        );
        
        echo '<script type="application/ld+json">' . json_encode($schema) . '</script>' . "\n";
    }
}
add_action('wp_head', 'vfb_schema_markup');

/**
 * Personalizar excerpt
 */
function vfb_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'vfb_excerpt_length');

function vfb_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'vfb_excerpt_more');
