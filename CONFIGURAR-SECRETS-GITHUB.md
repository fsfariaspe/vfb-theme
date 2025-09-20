# 🔐 Configurar Secrets no GitHub - VFB Theme

## ✅ Informações da Sua Conta FTP

Baseado na sua configuração FTP:

- **Servidor:** `ftp.viajefacilbrasil.com.br`
- **Usuário:** `ftp-vfb@viajefacilbrasil.com.br`
- **Senha:** (a senha que você definiu)
- **Porta:** `21` (já configurada)

## 🎯 Passo a Passo para Configurar

### 1. Acessar o GitHub
1. Vá para: **https://github.com/fsfariaspe/vfb-theme**
2. Clique em **"Settings"** (aba superior)
3. No menu lateral, clique em **"Secrets and variables"**
4. Clique em **"Actions"**

### 2. Adicionar os 4 Secrets

Clique em **"New repository secret"** para cada um:

#### Secret 1: `FTP_SERVER`
- **Nome:** `FTP_SERVER`
- **Valor:** `ftp.viajefacilbrasil.com.br`

#### Secret 2: `FTP_USERNAME`
- **Nome:** `FTP_USERNAME`
- **Valor:** `ftp-vfb@viajefacilbrasil.com.br`

#### Secret 3: `FTP_PASSWORD`
- **Nome:** `FTP_PASSWORD`
- **Valor:** (coloque a senha que você definiu ao criar a conta FTP)

#### Secret 4: `FTP_DIRECTORY`
- **Nome:** `FTP_DIRECTORY`
- **Valor:** `/public_html/wp-content/themes/vfb-theme/`

## ⚠️ IMPORTANTE: Confirmar Caminho do Tema

**Você precisa verificar qual é o caminho correto do seu tema WordPress:**

### Opção 1: Se o FTP aponta para a raiz do site
- `FTP_DIRECTORY`: `/public_html/wp-content/themes/vfb-theme/`

### Opção 2: Se o FTP aponta para uma pasta específica
- `FTP_DIRECTORY`: `/wp-content/themes/vfb-theme/`

### Opção 3: Se o tema tem outro nome
- `FTP_DIRECTORY`: `/public_html/wp-content/themes/[nome-do-tema]/`

## 🔍 Como Verificar o Caminho Correto

1. **No painel da Nuvem Hospedagem:**
   - Vá em **"Gerenciador de Arquivos"**
   - Navegue até onde está seu WordPress
   - Localize a pasta `wp-content/themes/`
   - Veja qual é o nome da pasta do seu tema

2. **Ou teste com um cliente FTP:**
   - Use FileZilla ou outro cliente FTP
   - Conecte com as credenciais da imagem
   - Navegue até encontrar a pasta do tema WordPress

## ✅ Após Configurar os Secrets

1. **Faça um teste simples:**
   ```bash
   # Adicione um comentário no style.css
   git add .
   git commit -m "test: Testar deploy automático"
   git push origin main
   ```

2. **Verifique o deploy:**
   - Vá na aba **"Actions"** do GitHub
   - Veja se o workflow executou com sucesso
   - Acesse seu site para ver se as mudanças apareceram

## 🚨 Se o Deploy Falhar

**Problema mais comum:** Caminho do tema incorreto

**Soluções:**
1. Verifique se a pasta do tema existe no servidor
2. Teste caminhos diferentes no `FTP_DIRECTORY`
3. Confirme se o WordPress está ativo no tema correto

---

**Pronto! Configure os 4 secrets e faça o teste!** 🚀
