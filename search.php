<?php
/**
 * Template para resultados de busca do tema Viaje Fácil Brasil
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto">
            <header class="page-header mb-8">
                <h1 class="page-title text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Resultados da Busca
                </h1>
                
                <?php if (have_posts()) : ?>
                    <p class="text-lg text-gray-600">
                        Resultados para: <strong>"<?php echo get_search_query(); ?>"</strong>
                    </p>
                <?php else : ?>
                    <p class="text-lg text-gray-600">
                        Nenhum resultado encontrado para: <strong>"<?php echo get_search_query(); ?>"</strong>
                    </p>
                <?php endif; ?>
            </header>

            <?php if (have_posts()) : ?>
                <div class="search-results">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="search-result bg-white rounded-lg shadow-lg p-6 mb-6">
                            <h2 class="search-result-title text-xl font-semibold mb-2">
                                <a href="<?php the_permalink(); ?>" class="text-blue-600 hover:text-blue-800 transition-colors duration-300">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <div class="search-result-meta text-sm text-gray-500 mb-3">
                                <span class="post-type">
                                    <?php 
                                    $post_type = get_post_type();
                                    $post_type_labels = get_post_type_labels(get_post_type_object($post_type));
                                    echo $post_type_labels->singular_name;
                                    ?>
                                </span>
                                <span class="post-date ml-4">
                                    📅 <?php echo get_the_date(); ?>
                                </span>
                            </div>
                            
                            <div class="search-result-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <div class="mt-4">
                                <a href="<?php the_permalink(); ?>" 
                                   class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors duration-300">
                                    Ler mais →
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>

                <!-- Paginação -->
                <div class="pagination mt-8">
                    <?php
                    the_posts_pagination(array(
                        'mid_size'  => 2,
                        'prev_text' => __('← Anterior', 'viaje-facil-brasil'),
                        'next_text' => __('Próximo →', 'viaje-facil-brasil'),
                    ));
                    ?>
                </div>
            <?php else : ?>
                <div class="no-results text-center py-12">
                    <div class="text-6xl mb-6">🔍</div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                        Nenhum resultado encontrado
                    </h2>
                    <p class="text-gray-600 mb-8">
                        Tente usar palavras-chave diferentes ou verifique a ortografia.
                    </p>
                    
                    <!-- Sugestões de busca -->
                    <div class="max-w-2xl mx-auto">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">
                            Sugestões de busca:
                        </h3>
                        <div class="flex flex-wrap gap-2 justify-center">
                            <a href="<?php echo esc_url(home_url('/?s=pacotes')); ?>" 
                               class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm hover:bg-blue-200 transition-colors duration-300">
                                Pacotes
                            </a>
                            <a href="<?php echo esc_url(home_url('/?s=passagens')); ?>" 
                               class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm hover:bg-blue-200 transition-colors duration-300">
                                Passagens
                            </a>
                            <a href="<?php echo esc_url(home_url('/?s=hotéis')); ?>" 
                               class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm hover:bg-blue-200 transition-colors duration-300">
                                Hotéis
                            </a>
                            <a href="<?php echo esc_url(home_url('/?s=fernando+de+noronha')); ?>" 
                               class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm hover:bg-blue-200 transition-colors duration-300">
                                Fernando de Noronha
                            </a>
                            <a href="<?php echo esc_url(home_url('/?s=chapada+diamantina')); ?>" 
                               class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm hover:bg-blue-200 transition-colors duration-300">
                                Chapada Diamantina
                            </a>
                            <a href="<?php echo esc_url(home_url('/?s=egito')); ?>" 
                               class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm hover:bg-blue-200 transition-colors duration-300">
                                Egito
                            </a>
                        </div>
                    </div>
                    
                    <!-- Formulário de busca -->
                    <div class="max-w-md mx-auto mt-8">
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
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
