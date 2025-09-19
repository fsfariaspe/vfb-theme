# 🚀 Instalação do Tema WordPress - Viaje Fácil Brasil

## 📋 Pré-requisitos

- WordPress 5.0 ou superior
- PHP 7.4 ou superior
- MySQL 5.6 ou superior
- Servidor web (Apache/Nginx)

## 📁 Estrutura do Tema

O tema WordPress está completo com os seguintes arquivos:

### ✅ Arquivos Principais
- `style.css` - Arquivo principal do tema (obrigatório)
- `index.php` - Template da página inicial
- `header.php` - Cabeçalho
- `footer.php` - Rodapé
- `functions.php` - Funções do tema

### ✅ Templates
- `page.php` - Páginas estáticas
- `single.php` - Posts individuais
- `archive.php` - Arquivos de posts
- `search.php` - Resultados de busca
- `404.php` - Página não encontrada
- `comments.php` - Sistema de comentários
- `sidebar.php` - Sidebar

### ✅ Recursos
- `assets/css/styles.css` - Estilos customizados
- `assets/js/main.js` - JavaScript principal
- `assets/images/` - Imagens do tema

## 🛠️ Passo a Passo da Instalação

### 1. Preparação
```bash
# Crie uma pasta para o tema
mkdir viaje-facil-brasil-theme
cd viaje-facil-brasil-theme
```

### 2. Upload dos Arquivos
1. **Via FTP/SFTP:**
   - Conecte ao seu servidor
   - Navegue até `/wp-content/themes/`
   - Faça upload de todos os arquivos do tema

2. **Via cPanel:**
   - Acesse o File Manager
   - Navegue até `/public_html/wp-content/themes/`
   - Faça upload dos arquivos

3. **Via WordPress Admin:**
   - Vá em **Aparência > Temas**
   - Clique em **Adicionar Novo**
   - Faça upload do arquivo ZIP do tema

### 3. Ativação do Tema
1. Acesse o painel administrativo do WordPress
2. Vá em **Aparência > Temas**
3. Encontre o tema "Viaje Fácil Brasil Theme"
4. Clique em **Ativar**

### 4. Configuração Inicial

#### 4.1 Menus
1. Vá em **Aparência > Menus**
2. Crie um novo menu chamado "Menu Principal"
3. Adicione as páginas desejadas
4. Atribua o menu à localização "Menu Principal"

#### 4.2 Widgets
1. Vá em **Aparência > Widgets**
2. Configure os widgets nas áreas disponíveis:
   - Sidebar Principal
   - Footer 1, 2, 3

#### 4.3 Personalização
1. Vá em **Aparência > Personalizar**
2. Configure:
   - Logo do site
   - Cores personalizadas
   - Configurações do site

### 5. Páginas Recomendadas

#### 5.1 Página "Quem Somos"
- A página é criada automaticamente
- Acesse: **Páginas > Quem Somos**
- Personalize o conteúdo conforme necessário

#### 5.2 Página de Contato
1. Crie uma nova página
2. Título: "Contato"
3. Adicione formulário de contato (recomendado: Contact Form 7)
4. Publique a página

#### 5.3 Página do Blog
1. Vá em **Configurações > Leitura**
2. Configure a página inicial como "Página estática"
3. Selecione uma página para o blog

## ⚙️ Configurações Avançadas

### 1. Permalinks
1. Vá em **Configurações > Permalinks**
2. Selecione "Nome do post"
3. Salve as alterações

### 2. Plugins Recomendados
- **Contact Form 7** - Formulários de contato
- **Yoast SEO** - Otimização para SEO
- **WP Super Cache** - Cache para performance
- **Smush** - Otimização de imagens

### 3. Configurações de Segurança
1. Altere o prefixo das tabelas do banco
2. Configure usuários com senhas fortes
3. Instale plugin de segurança (Wordfence)

## 🔧 Personalização

### 1. Cores
Edite o arquivo `assets/css/styles.css`:
```css
/* Cores principais */
:root {
  --primary-color: #2563eb;
  --secondary-color: #1d4ed8;
  --accent-color: #f59e0b;
}
```

### 2. Fontes
Adicione fontes personalizadas no `header.php`:
```html
<link href="https://fonts.googleapis.com/css2?family=SuaFonte:wght@400;700&display=swap" rel="stylesheet">
```

### 3. JavaScript
Personalize o arquivo `assets/js/main.js`:
- Carrossel de imagens
- Motor de busca
- Chatbot Vivi

## 📱 Teste de Funcionalidades

### 1. Responsividade
- Teste em diferentes dispositivos
- Verifique o menu mobile
- Confirme o carrossel

### 2. Funcionalidades
- Motor de busca
- Chatbot Vivi
- Formulários
- Links de navegação

### 3. Performance
- Teste de velocidade
- Otimização de imagens
- Cache do navegador

## 🐛 Solução de Problemas

### Problema: Tema não aparece
**Solução:**
- Verifique se os arquivos estão na pasta correta
- Confirme se o `style.css` tem o cabeçalho correto
- Verifique as permissões dos arquivos

### Problema: Estilos não aplicam
**Solução:**
- Limpe o cache do navegador
- Verifique se o Tailwind CSS está carregando
- Confirme se não há erros no console

### Problema: JavaScript não funciona
**Solução:**
- Verifique se o arquivo `main.js` está carregando
- Confirme se não há erros no console
- Teste em diferentes navegadores

### Problema: Imagens não aparecem
**Solução:**
- Verifique os caminhos das imagens
- Confirme se as imagens estão na pasta correta
- Verifique as permissões dos arquivos

## 📞 Suporte

Para suporte técnico:
- **Email**: atendimento@viajefacilbrasil.com.br
- **Telefone**: (81) 99242-9403
- **Desenvolvedor**: Flávio Soares de Farias

## 📄 Licença

Este tema foi desenvolvido especificamente para a Viaje Fácil Brasil.
Todos os direitos reservados.

---

**🎉 Parabéns! Seu tema WordPress está instalado e configurado!**

Agora você pode personalizar o conteúdo e começar a usar seu site.
