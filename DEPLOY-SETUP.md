# Configuração de Deploy Automático - VFB Theme

Este documento explica como configurar o deploy automático do tema WordPress para o servidor.

## 🚀 Como Funciona

O deploy automático funciona através do GitHub Actions. Sempre que você fizer um `git push` para a branch `main`, o GitHub Actions irá:

1. Fazer checkout do código
2. Instalar dependências
3. Fazer build dos assets (CSS/JS)
4. Fazer upload dos arquivos para o servidor via FTP

## 📋 Pré-requisitos

- Repositório GitHub configurado
- Credenciais de acesso FTP/SFTP do servidor
- Tema WordPress instalado no servidor

## ⚙️ Configuração

### 1. Configurar Secrets no GitHub

Acesse seu repositório no GitHub e vá em:
**Settings** → **Secrets and variables** → **Actions**

Adicione os seguintes secrets:

- `FTP_SERVER`: Endereço do servidor FTP (ex: ftp.seudominio.com)
- `FTP_USERNAME`: Seu usuário FTP
- `FTP_PASSWORD`: Sua senha FTP
- `FTP_DIRECTORY`: Caminho para a pasta do tema (ex: /public_html/wp-content/themes/vfb-theme)

### 2. Estrutura do Servidor

O tema deve estar localizado em:
```
/public_html/wp-content/themes/vfb-theme/
```

## 🔄 Fluxo de Trabalho

### Desenvolvimento Local

```bash
# Fazer mudanças no código
# ... editar arquivos ...

# Adicionar mudanças
git add .

# Fazer commit
git commit -m "Descrição das mudanças"

# Fazer push (deploy automático!)
git push origin main
```

### Verificar Deploy

1. Acesse a aba **Actions** no seu repositório GitHub
2. Verifique se o workflow foi executado com sucesso
3. Acesse seu site para verificar as mudanças

## 🛠️ Personalização

### Excluir Arquivos do Deploy

Edite o arquivo `.github/workflows/deploy.yml` na seção `exclude`:

```yaml
exclude: |
  **/.git*
  **/node_modules/**
  **/README.md
  **/package.json
  # Adicione outros arquivos que não devem ser enviados
```

### Modificar Scripts de Build

Edite o arquivo `package.json` para adicionar seus próprios scripts:

```json
{
  "scripts": {
    "build": "sass assets/css/styles.scss assets/css/styles.css",
    "minify": "cssnano assets/css/styles.css assets/css/styles.min.css"
  }
}
```

## 🔧 Troubleshooting

### Deploy Falhou

1. Verifique as credenciais FTP nos secrets
2. Confirme se o diretório FTP está correto
3. Verifique se o servidor aceita conexões FTP

### Arquivos Não Atualizaram

1. Verifique se o caminho do tema está correto
2. Confirme se os arquivos foram enviados via FTP
3. Limpe o cache do WordPress se necessário

### Erro de Permissão

1. Verifique se o usuário FTP tem permissão de escrita
2. Confirme se o diretório existe no servidor

## 📞 Suporte

Para dúvidas ou problemas:
1. Verifique os logs do GitHub Actions
2. Confirme as configurações de FTP
3. Teste a conexão FTP manualmente

---

**Próximos Passos:** Após configurar os secrets, faça um teste commitando e fazendo push para verificar se o deploy funciona corretamente.
