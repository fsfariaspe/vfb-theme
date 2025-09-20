<?php
/**
 * Template para páginas do tema Viaje Fácil Brasil
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container mx-auto px-4 py-16">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('max-w-4xl mx-auto'); ?>>
                <header class="entry-header mb-8">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="vfb-back-btn">← Voltar para Início</a>
                    <h1 class="page-title text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        <?php the_title(); ?>
                    </h1>
                    
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="featured-image mb-8">
                            <?php the_post_thumbnail('vfb-large', array('class' => 'w-full h-64 md:h-96 object-cover rounded-lg shadow-lg')); ?>
                        </div>
                    <?php endif; ?>
                </header>

                <div class="entry-content page-content">
                    <?php
                    the_content();
                    
                    wp_link_pages(array(
                        'before' => '<div class="page-links">',
                        'after'  => '</div>',
                    ));
                    ?>
                </div>

                <?php if (comments_open() || get_comments_number()) : ?>
                    <div class="comments-section mt-12">
                        <?php comments_template(); ?>
                    </div>
                <?php endif; ?>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
