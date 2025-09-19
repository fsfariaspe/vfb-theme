# 🚀 Configuração Deploy Automático - Nuvem Hospedagem

Guia específico para configurar o deploy automático do tema VFB na **Nuvem Hospedagem**.

## 📋 Informações da Sua Hospedagem

- **Empresa:** Nuvem Hospedagem
- **Acesso:** Painel de controle
- **WordPress:** Instalado via painel

## ⚙️ Passo 1: Obter Credenciais FTP

### 1.1 Acessar o Painel da Nuvem Hospedagem
1. Faça login no painel da Nuvem Hospedagem
2. Vá para **"FTP"** ou **"Gerenciador de Arquivos"**
3. Localize as informações de acesso FTP

### 1.2 Informações Necessárias
Você precisará de:
- **Servidor FTP:** (ex: ftp.seudominio.com.br ou IP do servidor)
- **Usuário FTP:** (geralmente o mesmo do painel)
- **Senha FTP:** (pode ser a mesma do painel ou específica do FTP)
- **Diretório do tema:** `/public_html/wp-content/themes/vfb-theme/`

## 🔐 Passo 2: Configurar Secrets no GitHub

### 2.1 Acessar o Repositório
1. Vá para: https://github.com/fsfariaspe/vfb-theme
2. Clique em **"Settings"** (aba superior)
3. No menu lateral, clique em **"Secrets and variables"**
4. Clique em **"Actions"**

### 2.2 Adicionar os Secrets
Clique em **"New repository secret"** para cada item:

#### `FTP_SERVER`
- **Nome:** `FTP_SERVER`
- **Valor:** Seu servidor FTP (ex: `ftp.seudominio.com.br`)

#### `FTP_USERNAME`
- **Nome:** `FTP_USERNAME`
- **Valor:** Seu usuário FTP

#### `FTP_PASSWORD`
- **Nome:** `FTP_PASSWORD`
- **Valor:** Sua senha FTP

#### `FTP_DIRECTORY`
- **Nome:** `FTP_DIRECTORY`
- **Valor:** `/public_html/wp-content/themes/vfb-theme/`

## 🎯 Passo 3: Verificar Estrutura do Tema

### 3.1 Localizar o Tema no Servidor
No painel da Nuvem Hospedagem:
1. Acesse **"Gerenciador de Arquivos"**
2. Navegue até: `public_html/wp-content/themes/`
3. Verifique se existe a pasta `vfb-theme` ou crie se necessário

### 3.2 Estrutura Esperada
```
public_html/
└── wp-content/
    └── themes/
        └── vfb-theme/          ← Aqui será feito o deploy
            ├── style.css
            ├── index.php
            ├── functions.php
            └── ... (outros arquivos do tema)
```

## ✅ Passo 4: Testar o Deploy

### 4.1 Fazer uma Mudança de Teste
```bash
# No seu computador, edite qualquer arquivo do tema
# Por exemplo, adicione um comentário no style.css

# Adicione as mudanças
git add .

# Faça commit
git commit -m "test: Testar deploy automático"

# Faça push (isso vai acionar o deploy!)
git push origin main
```

### 4.2 Verificar o Deploy
1. Acesse a aba **"Actions"** no GitHub
2. Clique no workflow que está rodando
3. Aguarde a conclusão (deve mostrar ✅ verde)
4. Acesse seu site para verificar se as mudanças apareceram

## 🔧 Configurações Específicas da Nuvem Hospedagem

### Timeout Aumentado
O workflow foi configurado com timeout de 120 segundos para hospedagens mais lentas.

### Protocolo FTP
Configurado para usar FTP padrão (porta 21) que é mais comum na Nuvem Hospedagem.

### Exclusões Otimizadas
Arquivos de documentação e referências não são enviados para o servidor.

## 🚨 Troubleshooting

### Problema: "Connection timeout"
**Solução:** 
- Verifique se o servidor FTP está correto
- Confirme se a porta 21 está liberada
- Teste a conexão FTP manualmente

### Problema: "Authentication failed"
**Solução:**
- Verifique usuário e senha nos secrets
- Confirme se as credenciais são específicas do FTP
- Teste login manual no cliente FTP

### Problema: "Directory not found"
**Solução:**
- Verifique se o caminho `FTP_DIRECTORY` está correto
- Confirme se a pasta do tema existe no servidor
- Crie a pasta manualmente se necessário

### Problema: "Files not updating"
**Solução:**
- Verifique se o WordPress está ativo no tema correto
- Limpe cache do WordPress
- Confirme se os arquivos foram enviados via FTP

## 📞 Suporte Nuvem Hospedagem

Se tiver problemas com as credenciais FTP:
1. Entre em contato com o suporte da Nuvem Hospedagem
2. Solicite informações específicas de FTP
3. Confirme se há restrições de acesso

## 🎉 Próximos Passos

Após configurar os secrets:
1. Faça um commit de teste
2. Verifique se o deploy funciona
3. Configure notificações (opcional)
4. Comece a usar o fluxo normal de desenvolvimento!

---

**Dica:** Mantenha as credenciais FTP seguras e nunca as compartilhe publicamente!
