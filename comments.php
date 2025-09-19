<?php
/**
 * Template para comentários do tema Viaje Fácil Brasil
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h2 class="comments-title text-2xl font-bold text-gray-800 mb-6">
            <?php
            $comments_number = get_comments_number();
            if ($comments_number == 1) {
                echo '1 Comentário';
            } else {
                echo $comments_number . ' Comentários';
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
                'callback'   => 'vfb_comment_callback',
            ));
            ?>
        </ol>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="comment-navigation" role="navigation">
                <div class="nav-previous">
                    <?php previous_comments_link('← Comentários Anteriores'); ?>
                </div>
                <div class="nav-next">
                    <?php next_comments_link('Comentários Mais Recentes →'); ?>
                </div>
            </nav>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments text-gray-600 text-center py-8">
            Os comentários estão fechados.
        </p>
    <?php endif; ?>

    <?php
    $comment_form_args = array(
        'title_reply'          => 'Deixe um Comentário',
        'title_reply_to'       => 'Deixe um Comentário para %s',
        'cancel_reply_link'    => 'Cancelar Resposta',
        'label_submit'         => 'Enviar Comentário',
        'comment_field'        => '<p class="comment-form-comment"><label for="comment">Comentário *</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea></p>',
        'fields'               => array(
            'author' => '<p class="comment-form-author"><label for="author">Nome *</label><input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" aria-required="true" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" /></p>',
            'email'  => '<p class="comment-form-email"><label for="email">E-mail *</label><input id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" aria-required="true" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" /></p>',
            'url'    => '<p class="comment-form-url"><label for="url">Site</label><input id="url" name="url" type="url" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" /></p>',
        ),
        'class_form'           => 'comment-form bg-gray-50 p-6 rounded-lg',
        'class_submit'         => 'bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition-colors duration-300',
    );

    comment_form($comment_form_args);
    ?>
</div>

<?php
/**
 * Callback personalizado para exibir comentários
 */
function vfb_comment_callback($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class('comment'); ?> id="comment-<?php comment_ID(); ?>">
        <div class="comment-body bg-white p-6 rounded-lg shadow-sm mb-4">
            <div class="comment-meta flex items-center mb-4">
                <div class="comment-author-avatar mr-4">
                    <?php echo get_avatar($comment, 50, '', '', array('class' => 'rounded-full')); ?>
                </div>
                <div class="comment-meta-content">
                    <div class="comment-author font-semibold text-gray-800">
                        <?php comment_author_link(); ?>
                    </div>
                    <div class="comment-date text-sm text-gray-500">
                        📅 <?php comment_date(); ?> às <?php comment_time(); ?>
                    </div>
                </div>
            </div>
            
            <div class="comment-content text-gray-700">
                <?php comment_text(); ?>
            </div>
            
            <div class="comment-reply mt-4">
                <?php
                comment_reply_link(array_merge($args, array(
                    'depth'     => $depth,
                    'max_depth' => $args['max_depth'],
                    'class'     => 'text-blue-600 hover:text-blue-800 transition-colors duration-300'
                )));
                ?>
            </div>
        </div>
    <?php
}
?>
