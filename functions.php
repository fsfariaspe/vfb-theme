// Custom Post Type: Pacote de Viagem
function vfb_register_pacote_post_type() {
    $labels = array(
        'name' => 'Pacotes',
        'singular_name' => 'Pacote',
        'menu_name' => 'Pacotes',
        'name_admin_bar' => 'Pacote',
        'add_new' => 'Adicionar Novo',
        'add_new_item' => 'Adicionar Novo Pacote',
        'new_item' => 'Novo Pacote',
        'edit_item' => 'Editar Pacote',
        'view_item' => 'Ver Pacote',
        'all_items' => 'Todos os Pacotes',
        'search_items' => 'Buscar Pacotes',
        'not_found' => 'Nenhum pacote encontrado.',
        'not_found_in_trash' => 'Nenhum pacote na lixeira.'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'pacotes'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-palmtree',
        'show_in_rest' => true,
    );
    register_post_type('pacote', $args);
}
add_action('init', 'vfb_register_pacote_post_type');
<?php
/**
 * Funções do tema Viaje Fácil Brasil
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */

// Evitar acesso direto
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Carregar arquivos de includes
 */
require_once get_template_directory() . '/includes/theme-setup.php';
require_once get_template_directory() . '/includes/enqueue-scripts.php';
require_once get_template_directory() . '/includes/widgets.php';
require_once get_template_directory() . '/includes/data-functions.php';
require_once get_template_directory() . '/includes/seo-functions.php';
require_once get_template_directory() . '/includes/menu-functions.php';

/**
 * Função para criar página "Quem Somos" automaticamente
 */
function vfb_create_about_page() {
    $page_title = 'Quem Somos';
    $page_slug = 'quem-somos';
    
    // Verificar se a página já existe
    $existing_page = get_page_by_path($page_slug);
    
    if (!$existing_page) {
        $page_content = '
        <!-- Hero Section -->
        <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20 mt-16">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 font-playfair">Quem Somos</h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto leading-relaxed">
                    Conheça a história, missão e valores da Viaje Fácil Brasil, sua parceira em viagens inesquecíveis
                </p>
            </div>
        </section>

        <!-- Nossa História -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Nossa História</h2>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                                A <strong>Viaje Fácil Brasil</strong> nasceu em 2018 com um sonho simples: tornar as viagens mais
                                acessíveis e memoráveis para todos os brasileiros. Fundada por Flávio Soares de Farias, nossa agência
                                começou com uma visão clara de oferecer experiências únicas e personalizadas.
                            </p>

                            <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                                Ao longo dos anos, construímos uma rede sólida de parceiros e fornecedores, sempre priorizando a qualidade
                                e a satisfação de nossos clientes. Cada viagem planejada é uma oportunidade de criar memórias que durarão
                                para sempre.
                            </p>

                            <p class="text-lg text-gray-700 leading-relaxed">
                                Hoje, continuamos crescendo e evoluindo, sempre mantendo nosso compromisso com a excelência no atendimento
                                e a paixão por conectar pessoas a destinos incríveis ao redor do mundo.
                            </p>
                        </div>

                        <div class="text-center">
                            <img src="' . get_template_directory_uri() . '/assets/images/profiles/flavio-profissional.jpeg" alt="Flávio Soares de Farias"
                                class="w-80 h-80 object-cover rounded-full mx-auto shadow-lg">
                            <h3 class="text-2xl font-bold mt-6 text-gray-800">Flávio Soares de Farias</h3>
                            <p class="text-lg text-gray-600">Fundador e Diretor</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nossa Missão -->
        <section class="py-16 bg-cover bg-center bg-fixed relative"
            style="background-image: url(\'' . get_template_directory_uri() . '/assets/images/backgrounds/montanhas.jpg\');">
            <div class="absolute inset-0 bg-white bg-opacity-20"></div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl font-bold mb-8 text-white drop-shadow-lg">Nossa Missão</h2>
                    <p class="text-xl text-white leading-relaxed drop-shadow-md">
                        Facilitar e tornar acessível a realização dos sonhos de viagem de nossos clientes, oferecendo serviços
                        personalizados, preços competitivos e um atendimento excepcional que transforma cada jornada em uma
                        experiência única e inesquecível.
                    </p>
                </div>
            </div>
        </section>

        <!-- Nossos Serviços Especializados -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Nossos Serviços Especializados</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Serviço 1 -->
                    <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">✈️</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-800">Passagens Aéreas</h3>
                        <p class="text-gray-600">Melhores preços e conexões para qualquer destino nacional e internacional</p>
                    </div>

                    <!-- Serviço 2 -->
                    <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">🏨</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-800">Hospedagem</h3>
                        <p class="text-gray-600">Hotéis, pousadas e resorts selecionados para sua comodidade e conforto</p>
                    </div>

                    <!-- Serviço 3 -->
                    <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">📦</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-800">Pacotes Completos</h3>
                        <p class="text-gray-600">Viagens organizadas com voo, hospedagem, traslados e passeios inclusos</p>
                    </div>

                    <!-- Serviço 4 -->
                    <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">🛡️</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-800">Seguros de Viagem</h3>
                        <p class="text-gray-600">Proteção completa para sua tranquilidade durante toda a viagem</p>
                    </div>

                    <!-- Serviço 5 -->
                    <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">💼</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-800">Trabalhos no Japão</h3>
                        <p class="text-gray-600">Oportunidades de trabalho e intercâmbio cultural no Japão</p>
                    </div>

                    <!-- Serviço 6 -->
                    <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">🎯</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-800">Consultoria Personalizada</h3>
                        <p class="text-gray-600">Planejamento individualizado para atender suas necessidades específicas</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Alguns Destinos que Trabalhamos -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Alguns Destinos que Trabalhamos</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Destino 1 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 cursor-pointer">
                        <img src="' . get_template_directory_uri() . '/assets/images/destinations/fernando-noronha.jpg" alt="Fernando de Noronha"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Fernando de Noronha</h3>
                            <p class="text-gray-600">Paraíso brasileiro com praias paradisíacas e vida marinha única</p>
                        </div>
                    </div>

                    <!-- Destino 2 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 cursor-pointer">
                        <img src="' . get_template_directory_uri() . '/assets/images/destinations/chapada-diamantina.jpg" alt="Chapada Diamantina"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Chapada Diamantina</h3>
                            <p class="text-gray-600">Cachoeiras cristalinas e paisagens deslumbrantes na Bahia</p>
                        </div>
                    </div>

                    <!-- Destino 3 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 cursor-pointer">
                        <img src="' . get_template_directory_uri() . '/assets/images/destinations/kyoto-japao.jpg" alt="Kyoto, Japão" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Kyoto, Japão</h3>
                            <p class="text-gray-600">Tradição e modernidade se encontram em harmonia perfeita</p>
                        </div>
                    </div>

                    <!-- Destino 4 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 cursor-pointer">
                        <img src="' . get_template_directory_uri() . '/assets/images/destinations/alberta-canada.jpg" alt="Alberta, Canadá"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Alberta, Canadá</h3>
                            <p class="text-gray-600">Montanhas majestosas e lagos de águas cristalinas</p>
                        </div>
                    </div>

                    <!-- Destino 5 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 cursor-pointer">
                        <img src="' . get_template_directory_uri() . '/assets/images/destinations/egito.jpg" alt="Egito" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Egito</h3>
                            <p class="text-gray-600">Mistérios milenares e histórias que atravessam o tempo</p>
                        </div>
                    </div>

                    <!-- Destino 6 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 cursor-pointer">
                        <img src="' . get_template_directory_uri() . '/assets/images/destinations/santiago-chile.jpg" alt="Santiago, Chile"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Santiago, Chile</h3>
                            <p class="text-gray-600">Entre os Andes e o Pacífico, uma cidade de contrastes únicos</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Informações da Empresa -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Informações da Empresa</h2>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div>
                                <h3 class="text-xl font-bold mb-4 text-gray-800">Dados da Empresa</h3>
                                <ul class="space-y-2 text-gray-700">
                                    <li><strong>Razão Social:</strong> Viaje Fácil Brasil Agência de Viagens LTDA</li>
                                    <li><strong>CNPJ:</strong> 12.345.678/0001-90</li>
                                    <li><strong>Inscrição Estadual:</strong> 123456789</li>
                                    <li><strong>Endereço:</strong> Rua das Flores, 123 - Boa Viagem, Recife/PE - CEP: 51030-000</li>
                                    <li><strong>Telefone:</strong> (81) 99242-9403</li>
                                    <li><strong>E-mail:</strong> atendimento@viajefacilbrasil.com.br</li>
                                </ul>
                            </div>

                            <div>
                                <h3 class="text-xl font-bold mb-4 text-gray-800">Registros e Licenças</h3>
                                <ul class="space-y-2 text-gray-700">
                                    <li><strong>CADASTUR:</strong> 12.345.678.90</li>
                                    <li><strong>IATA:</strong> 12345678</li>
                                    <li><strong>ABAV:</strong> Membro Associado</li>
                                    <li><strong>Fundada em:</strong> 2018</li>
                                    <li><strong>Atuação:</strong> Nacional e Internacional</li>
                                    <li><strong>Especialidades:</strong> Turismo de Lazer e Corporativo</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        ';
        
        $page_data = array(
            'post_title'    => $page_title,
            'post_content'  => $page_content,
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => $page_slug,
            'post_author'   => 1,
        );
        
        wp_insert_post($page_data);
    }
}
add_action('after_switch_theme', 'vfb_create_about_page');

/**
 * Função para recriar página Quem Somos se necessário
 */
function vfb_recreate_about_page() {
    $page_title = 'Quem Somos';
    $page_slug = 'quem-somos';
    
    // Verificar se a página existe
    $existing_page = get_page_by_path($page_slug);
    
    // Se não existe ou foi deletada, criar novamente
    if (!$existing_page) {
        vfb_create_about_page();
    }
}
add_action('init', 'vfb_recreate_about_page');

/**
 * Função para otimizar imagens
 */
function vfb_optimize_images() {
    // Adicionar suporte a WebP se disponível
    if (function_exists('imagewebp')) {
        add_filter('wp_generate_attachment_metadata', 'vfb_webp_support', 10, 2);
    }
}
add_action('init', 'vfb_optimize_images');

/**
 * Função para suporte a WebP
 */
function vfb_webp_support($metadata, $attachment_id) {
    $upload_dir = wp_upload_dir();
    $file_path = $upload_dir['basedir'] . '/' . $metadata['file'];
    
    if (file_exists($file_path)) {
        $webp_path = str_replace(array('.jpg', '.jpeg', '.png'), '.webp', $file_path);
        
        if (function_exists('imagewebp')) {
            $image = imagecreatefromstring(file_get_contents($file_path));
            if ($image) {
                imagewebp($image, $webp_path, 80);
                imagedestroy($image);
            }
        }
    }
    
    return $metadata;
}
?>
