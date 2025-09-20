<?php
get_header();
?>


<main id="main-content" style="padding: 60px 20px; text-align: center;">
  <h1>Pacotes Forfait (Queensberry)</h1>
  <div id="forfait-list">
    <p>Carregando pacotes...</p>
  </div>
</main>

<script>
fetch('https://api.queensberry.com.br/Caderno/forfait')
  .then(response => response.json())
  .then(data => {
    const container = document.getElementById('forfait-list');
    if (Array.isArray(data) && data.length > 0) {
      container.innerHTML = '<ul style="list-style:none;padding:0;">' +
        data.map(item => `
          <li style="margin-bottom:24px;">
            <strong>${item.nome || 'Pacote'}</strong><br>
            ${item.descricao || ''}<br>
            <em>${item.periodo || ''}</em>
          </li>
        `).join('') +
      '</ul>';
    } else {
      container.innerHTML = '<p>Nenhum pacote encontrado.</p>';
    }
  })
  .catch(() => {
    document.getElementById('forfait-list').innerHTML = '<p>Erro ao carregar pacotes.</p>';
  });
</script>

<?php get_footer(); ?>
