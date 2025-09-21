<?php
/**
 * Template Name: Vitrine de Pacotes
 *
 * Exibe a listagem de todos os pacotes de viagem em formato de cards.
 */
get_header();
?>
<main id="main-content">
    <!-- Seção de Título da Página -->
    <section class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight"><?php the_title(); ?></h1>
            <p class="mt-3 max-w-2xl mx-auto text-lg text-gray-500">Explore nossas aventuras cuidadosamente selecionadas ao redor do mundo.</p>
        </div>
    </section>
    <!-- Seção de Filtros (Visual) -->
    <section class="bg-white py-6 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex flex-wrap items-center gap-4">
                    <input type="text" placeholder="Busca por nome..." class="border-gray-300 rounded-md shadow-sm focus:border-sky-500 focus:ring-sky-500">
                    <input type="text" placeholder="Busca por destino..." class="border-gray-300 rounded-md shadow-sm focus:border-sky-500 focus:ring-sky-500">
                </div>
                <div>
                    <select class="border-gray-300 rounded-md shadow-sm focus:border-sky-500 focus:ring-sky-500">
                        <option>Ordenar por: A nossa seleção</option>
                        <option>Menor Preço</option>
                        <option>Maior Preço</option>
                    </select>
                </div>
            </div>
        </div>
    </section>
    <!-- Grid com os Cards dos Pacotes -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <?php
            // Argumentos para buscar todos os posts (pacotes)
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => -1, // -1 para buscar todos
                'post_status'    => 'publish',
            );
            $pacotes_query = new WP_Query($args);
            ?>
            <?php if ($pacotes_query->have_posts()) : ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    <?php while ($pacotes_query->have_posts()) : $pacotes_query->the_post(); ?>
                        <!-- Card do Pacote -->
                        <div class="w-full bg-white rounded-lg shadow-xl overflow-hidden group">
                            <a href="<?php the_permalink(); ?>" class="block">
                                <div class="relative h-[520px]">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>" class="absolute inset-0 w-full h-full object-cover">
                                    <?php else: ?>
                                        <div class="absolute inset-0 w-full h-full bg-gray-400 flex items-center justify-center">
                                            <span class="text-white">Sem imagem</span>
                                        </div>
                                    <?php endif; ?>
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-black/30"></div>
                                    <div class="relative flex flex-col h-full p-6 text-white">
                                        <h3 class="text-3xl font-extrabold uppercase leading-tight text-sky-300" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.5);"><?php the_title(); ?></h3>
                                        <div class="mt-2 mb-2 h-px w-full bg-white/60"></div>
                                        <div class="flex items-center space-x-4 text-sm font-semibold">
                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 mr-1.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.1.4-.27.61-.474a10.81 10.81 0 002.64-2.426C16.285 13.283 17 11.434 17 9.5c0-3.866-3.582-7-8-7S1 5.634 1 9.5c0 1.934.715 3.783 2.15 5.93a10.81 10.81 0 002.64 2.426c.21.204.424.374.61.474.097.052.193.102.28.14l.018.008.006.003zM10 11.5a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" /></svg>
                                                <span><?php the_field('numero_de_destinos'); ?> DESTINOS</span>
                                            </div>
                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 mr-1.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M10 2a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0v-1.5A.75.75 0 0110 2zM8.5 6.5a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5zM11.5 6.5a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5zM9 10.5a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5zM11 10.5a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5zM12.5 14.5a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5zM10 17a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0v-1.5A.75.75 0 0110 17zM15 9.5a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z" /><path fill-rule="evenodd" d="M10 1.25a8.75 8.75 0 100 17.5 8.75 8.75 0 000-17.5zM2.5 10a7.5 7.5 0 1115 0 7.5 7.5 0 01-15 0z" clip-rule="evenodd" /></svg>
                                                <span><?php the_field('duracao_noites'); ?> NOITES</span>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                             <span class="bg-lime-400 text-black text-xs font-bold px-4 py-2 rounded-lg uppercase shadow-lg">Viagens Personalizadas</span>
                                        </div>
                                        <div class="mt-auto text-right">
                                            <span class="text-sm font-light">a partir de:</span>
                                            <p class="text-4xl font-bold tracking-tight"><?php the_field('preco_a_partir_de'); ?></p>
                                            <span class="text-sm font-light">Por pessoa</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 bg-white">
                                    <p class="text-sm text-gray-700 truncate">
                                        <span class="font-bold">Destinos:</span> <?php the_field('lista_de_destinos'); ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p class="text-center text-gray-600 text-xl">Nenhum pacote de viagem encontrado no momento.</p>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
