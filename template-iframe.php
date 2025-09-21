<?php
/*
Template Name: Página de Iframe Personalizado
*/
get_header();

$iframe_url = get_post_meta(get_the_ID(), 'iframe_url', true); // Defina esse campo personalizado na página
?>
<main id="main-content" style="padding: 60px 20px; text-align: center;">
  <h1><?php the_title(); ?></h1>
  <?php if ($iframe_url): ?>
    <iframe src="<?php echo esc_url($iframe_url); ?>"
      style="width:100%;max-width:1200px;height:1800px;border:none;display:block;margin:40px auto;"
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>
  <?php else: ?>
    <p style="color:#b91c1c;font-weight:600;">Nenhuma URL definida para este iframe.</p>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
