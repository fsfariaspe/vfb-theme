<?php
get_header();
?>


<main id="main-content" style="padding: 60px 20px; text-align: center;">
  <h1>Pacotes Forfait (Queensberry)</h1>
  <div id="forfait-list">
    <?php
    $response = wp_remote_get('https://api.queensberry.com.br/Caderno/forfait');
    if (is_wp_error($response)) {
      echo '<p>Erro ao carregar pacotes.</p>';
    } else {
      $body = wp_remote_retrieve_body($response);
      // DEBUG: Exibir resposta bruta da API
      echo '<pre style="text-align:left;max-width:700px;margin:24px auto;background:#f8f8f8;padding:16px;border-radius:8px;overflow-x:auto;">';
      echo esc_html($body);
      echo '</pre>';
      $data = json_decode($body);
      if (is_array($data) && count($data) > 0) {
        echo '<ul style="list-style:none;padding:0;">';
        foreach ($data as $item) {
          echo '<li style="margin-bottom:24px;">';
          echo '<strong>' . esc_html($item->nome ?? 'Pacote') . '</strong><br>';
          echo !empty($item->descricao) ? esc_html($item->descricao) . '<br>' : '';
          echo !empty($item->periodo) ? '<em>' . esc_html($item->periodo) . '</em>' : '';
          echo '</li>';
        }
        echo '</ul>';
      } else {
        echo '<p>Nenhum pacote encontrado.</p>';
      }
    }
    ?>
  </div>
</main>

<?php get_footer(); ?>
