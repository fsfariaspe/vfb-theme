<?php
/**
 * Template para páginas 404 do tema Viaje Fácil Brasil
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container mx-auto px-4 py-16">
        <div class="error-404 text-center">
            <h1 class="text-6xl md:text-8xl font-bold text-blue-600 mb-4">404</h1>
            <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 mb-6">
                Oops! Página não encontrada
            </h2>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Parece que a página que você está procurando não existe ou foi movida. 
                Não se preocupe, vamos te ajudar a encontrar o que você precisa!
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                <a href="<?php echo esc_url(home_url('/')); ?>" 
                   class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors duration-300">
                    🏠 Voltar ao Início
                </a>
                <a href="<?php echo esc_url(home_url('/quem-somos')); ?>" 
                   class="bg-gray-600 hover:bg-gray-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors duration-300">
                    ℹ️ Quem Somos
                </a>
            </div>
            
            <!-- Sugestões de páginas populares -->
            <div class="max-w-4xl mx-auto">
                <h3 class="text-xl font-semibold text-gray-800 mb-6">
                    Páginas Populares
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="text-3xl mb-4">✈️</div>
                        <h4 class="font-semibold text-gray-800 mb-2">Passagens Aéreas</h4>
                        <p class="text-gray-600 text-sm">Encontre as melhores ofertas de passagens</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="text-3xl mb-4">🏨</div>
                        <h4 class="font-semibold text-gray-800 mb-2">Hotéis</h4>
                        <p class="text-gray-600 text-sm">Acomodações selecionadas para sua viagem</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="text-3xl mb-4">📦</div>
                        <h4 class="font-semibold text-gray-800 mb-2">Pacotes</h4>
                        <p class="text-gray-600 text-sm">Viagens completas com tudo incluso</p>
                    </div>
                </div>
            </div>
            
            <!-- Formulário de busca -->
            <div class="max-w-md mx-auto mt-12">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">
                    Ou busque por algo específico:
                </h3>
                <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="flex">
                    <input type="search" 
                           class="flex-1 px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                           placeholder="Digite sua busca..." 
                           value="<?php echo get_search_query(); ?>" 
                           name="s" />
                    <button type="submit" 
                            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-r-lg transition-colors duration-300">
                        🔍 Buscar
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
