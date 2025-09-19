<?php
/**
 * Template para arquivos do tema Viaje Fácil Brasil
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
                    <?php
                    if (is_category()) {
                        single_cat_title();
                    } elseif (is_tag()) {
                        single_tag_title();
                    } elseif (is_author()) {
                        echo 'Posts por: ' . get_the_author();
                    } elseif (is_date()) {
                        if (is_year()) {
                            echo 'Posts de ' . get_the_date('Y');
                        } elseif (is_month()) {
                            echo 'Posts de ' . get_the_date('F Y');
                        } elseif (is_day()) {
                            echo 'Posts de ' . get_the_date('j \d\e F \d\e Y');
                        }
                    } else {
                        echo 'Arquivo';
                    }
                    ?>
                </h1>
                
                <?php if (is_category() || is_tag()) : ?>
                    <div class="archive-description">
                        <?php
                        $description = get_the_archive_description();
                        if ($description) {
                            echo '<p class="text-lg text-gray-600">' . $description . '</p>';
                        }
                        ?>
                    </div>
                <?php endif; ?>
            </header>

            <?php if (have_posts()) : ?>
                <div class="posts-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('post bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300'); ?>>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('vfb-medium', array('class' => 'w-full h-48 object-cover')); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <div class="post-content p-6">
                                <header class="post-header mb-4">
                                    <h2 class="post-title text-xl font-semibold text-gray-800 mb-2">
                                        <a href="<?php the_permalink(); ?>" class="text-gray-800 hover:text-blue-600 transition-colors duration-300">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    
                                    <div class="post-meta text-sm text-gray-500">
                                        <span class="post-date">
                                            📅 <?php echo get_the_date(); ?>
                                        </span>
                                        <span class="post-author ml-4">
                                            👤 <?php the_author(); ?>
                                        </span>
                                    </div>
                                </header>
                                
                                <div class="post-excerpt text-gray-600 mb-4">
                                    <?php the_excerpt(); ?>
                                </div>
                                
                                <footer class="post-footer">
                                    <a href="<?php the_permalink(); ?>" 
                                       class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors duration-300">
                                        Ler mais →
                                    </a>
                                </footer>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- Paginação -->
                <div class="pagination mt-12">
                    <?php
                    the_posts_pagination(array(
                        'mid_size'  => 2,
                        'prev_text' => __('← Anterior', 'viaje-facil-brasil'),
                        'next_text' => __('Próximo →', 'viaje-facil-brasil'),
                    ));
                    ?>
                </div>
            <?php else : ?>
                <div class="no-posts text-center py-12">
                    <div class="text-6xl mb-6">📝</div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                        Nenhum post encontrado
                    </h2>
                    <p class="text-gray-600 mb-8">
                        Parece que não há posts neste arquivo ainda.
                    </p>
                    <a href="<?php echo esc_url(home_url('/')); ?>" 
                       class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors duration-300">
                        🏠 Voltar ao Início
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
