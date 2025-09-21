<?php
get_header();
?>


<main id="main-content" style="padding: 60px 20px; text-align: center;">
  <h1>Pacotes Forfait (Queensberry)</h1>
  <div style="margin-bottom: 32px; display: flex; justify-content: center; align-items: center;">
    <button id="iframe-back-btn" disabled
      style="
        background: linear-gradient(90deg, #2563eb 0%, #1d4ed8 100%);
        color: #fff;
        border: none;
        border-radius: 30px;
        padding: 0.75rem 2.2rem;
        font-size: 1.1rem;
        font-weight: 600;
        box-shadow: 0 2px 8px rgba(37,99,235,0.08);
        cursor: not-allowed;
        opacity: 0.5;
        transition: background 0.2s, transform 0.2s, opacity 0.2s;
        outline: none;
        letter-spacing: 0.02em;
      "
      onmouseover="if(!this.disabled){this.style.background='linear-gradient(90deg,#1d4ed8 0%,#2563eb 100%)'}"
      onmouseout="if(!this.disabled){this.style.background='linear-gradient(90deg,#2563eb 0%,#1d4ed8 100%)'}"
      >
      &#8592; Voltar
    </button>
  </div>
  <iframe id="queens-iframe" src="https://api.queensberry.com.br/Caderno/forfait"
          style="width:100%;max-width:1200px;height:1800px;border:none;display:block;margin:40px auto;"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          onclick="enableIframeBackBtn()"
  ></iframe>
  <script>
    function iframeGoBack() {
      var iframe = document.getElementById('queens-iframe');
      try {
        iframe.contentWindow.history.back();
      } catch (e) {
        iframe.src = 'https://api.queensberry.com.br/Caderno/forfait';
      }
    }
    function enableIframeBackBtn() {
      var btn = document.getElementById('iframe-back-btn');
      btn.disabled = false;
      btn.style.opacity = 1;
      btn.style.cursor = 'pointer';
    }
    // Habilita o botão após o primeiro clique no iframe
    document.getElementById('queens-iframe').addEventListener('load', function() {
      var btn = document.getElementById('iframe-back-btn');
      btn.disabled = false;
      btn.style.opacity = 1;
      btn.style.cursor = 'pointer';
    }, { once: true });
  </script>
</main>

<?php get_footer(); ?>
