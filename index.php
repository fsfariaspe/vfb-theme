<?php
get_header();
?>


<main id="main-content" style="padding: 60px 20px; text-align: center;">
  <h1>Pacotes Forfait (Queensberry)</h1>
  <div style="margin-bottom: 20px;">
    <button onclick="iframeGoBack()" style="padding:8px 18px;">Voltar</button>
  </div>
  <iframe id="queens-iframe" src="https://api.queensberry.com.br/Caderno/forfait"
          style="width:100%;max-width:1200px;height:1800px;border:none;display:block;margin:40px auto;"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
  <script>
    function iframeGoBack() {
      var iframe = document.getElementById('queens-iframe');
      try {
        iframe.contentWindow.history.back();
      } catch (e) {
        // Se não for possível acessar o histórico (cross-origin), recarrega a página inicial
        iframe.src = 'https://api.queensberry.com.br/Caderno/forfait';
      }
    }
  </script>
</main>

<?php get_footer(); ?>
