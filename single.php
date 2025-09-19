<?php
/**
 * Template para posts individuais do tema Viaje Fácil Brasil
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
                    <header class="entry-header mb-8">
                        <h1 class="post-title text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                            <?php the_title(); ?>
                        </h1>
                        
                        <div class="post-meta text-sm text-gray-600 mb-6">
                            <span class="post-date">
                                📅 <?php echo get_the_date(); ?>
                            </span>
                            <span class="post-author ml-4">
                                👤 Por <?php the_author(); ?>
                            </span>
                            <?php if (has_category()) : ?>
                                <span class="post-categories ml-4">
                                    📂 <?php the_category(', '); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="featured-image mb-8">
                                <?php the_post_thumbnail('vfb-large', array('class' => 'w-full h-64 md:h-96 object-cover rounded-lg shadow-lg')); ?>
                            </div>
                        <?php endif; ?>
                    </header>

                    <div class="entry-content post-content">
                        <?php
                        the_content();
                        
                        wp_link_pages(array(
                            'before' => '<div class="page-links">',
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>

                    <footer class="entry-footer mt-8 pt-8 border-t border-gray-200">
                        <?php if (has_tag()) : ?>
                            <div class="post-tags mb-4">
                                <span class="text-sm text-gray-600">🏷️ Tags: </span>
                                <?php the_tags('', ', ', ''); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="post-navigation flex justify-between items-center">
                            <?php
                            $prev_post = get_previous_post();
                            $next_post = get_next_post();
                            ?>
                            
                            <?php if ($prev_post) : ?>
                                <div class="prev-post">
                                    <a href="<?php echo get_permalink($prev_post->ID); ?>" class="text-blue-600 hover:text-blue-800 transition-colors duration-300">
                                        ← <?php echo get_the_title($prev_post->ID); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ($next_post) : ?>
                                <div class="next-post">
                                    <a href="<?php echo get_permalink($next_post->ID); ?>" class="text-blue-600 hover:text-blue-800 transition-colors duration-300">
                                        <?php echo get_the_title($next_post->ID); ?> →
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </footer>
                </article>

                <?php if (comments_open() || get_comments_number()) : ?>
                    <div class="comments-section mt-12">
                        <?php comments_template(); ?>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
