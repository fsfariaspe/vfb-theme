
<?php get_header(); ?>

<main id="main-content" style="padding: 60px 20px; text-align: center;">
  <h1>Pacotes Forfait (Queensberry)</h1>
  <div id="iframe-container">
    <!-- O conteúdo será trocado via JS conforme o dispositivo -->
  </div>
</main>

<script>
function isMobile() {
  return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

document.addEventListener("DOMContentLoaded", function() {
  var container = document.getElementById('iframe-container');
  if (isMobile()) {
    container.innerHTML = `
      <p style="font-size:1.2em;margin-bottom:24px;">
        Para melhor experiência no celular, acesse os pacotes diretamente:
      </p>
      <a href="https://api.queensberry.com.br/Caderno/forfait" target="_blank" rel="noopener"
         style="display:inline-block;background:linear-gradient(90deg,#2563eb 0%,#1d4ed8 100%);color:#fff;border:none;border-radius:30px;padding:0.75rem 2.2rem;font-size:1.1rem;font-weight:600;box-shadow:0 2px 8px rgba(37,99,235,0.08);text-decoration:none;transition:background 0.2s,transform 0.2s,opacity 0.2s;letter-spacing:0.02em;">
        Abrir Pacotes Forfait
      </a>
    `;
  } else {
    container.innerHTML = `
      <div style="margin-bottom: 32px; display: flex; justify-content: center; align-items: center;">
        <button id="iframe-back-btn"
          style="
            background: linear-gradient(90deg, #2563eb 0%, #1d4ed8 100%);
            color: #fff;
            border: none;
            border-radius: 30px;
            padding: 0.75rem 2.2rem;
            font-size: 1.1rem;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(37,99,235,0.08);
            cursor: pointer;
            transition: background 0.2s, transform 0.2s, opacity 0.2s;
            outline: none;
            letter-spacing: 0.02em;
          "
          onmouseover="this.style.background='linear-gradient(90deg,#1d4ed8 0%,#2563eb 100%)'"
          onmouseout="this.style.background='linear-gradient(90deg,#2563eb 0%,#1d4ed8 100%)'"
          onclick="document.getElementById('queens-iframe').src='https://api.queensberry.com.br/Caderno/forfait'"
        >
          &#8592; Voltar à página inicial
        </button>
      </div>
      <iframe id="queens-iframe" src="https://api.queensberry.com.br/Caderno/forfait"
        style="width:100%;max-width:1200px;height:1800px;border:none;display:block;margin:40px auto;"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    `;
  }
});
</script>

<?php get_footer(); ?>
