# 🚀 VS Code Professional Setup - Viaje Fácil Brasil

Este diretório contém a configuração profissional do VS Code para o projeto **Viaje Fácil Brasil**.

## 📁 Arquivos de Configuração

### 📦 `extensions.json`
Lista de extensões recomendadas que serão sugeridas automaticamente quando abrir o projeto:

- **JSON Language Features** - Suporte avançado para JSON
- **Tailwind CSS IntelliSense** - Autocomplete para classes CSS
- **Auto Rename Tag** - Renomeia tags HTML/XML automaticamente  
- **TypeScript Language Features** - Suporte moderno para JavaScript/TypeScript
- **Prettier** - Formatação automática de código
- **HTML CSS Support** - IntelliSense para CSS em HTML
- **Live Server** - Servidor local para desenvolvimento
- **Git Graph** - Visualização gráfica do histórico Git

### ⚙️ `settings.json`
Configurações específicas do workspace para desenvolvimento WordPress:

- **Emmet em PHP** - Habilita Emmet para arquivos PHP
- **Formatação automática** - Código formatado ao salvar
- **Validação CSS/HTML/PHP** - Detecção de erros em tempo real
- **Git inteligente** - Commits e sync automáticos facilitados

### 🛠️ `tasks.json`
Task automatizada para deploy:

- **"Deploy to Server"** - Comando rápido para fazer commit e push
- Acessível via `Ctrl+Shift+P` → `Tasks: Run Task`
- Solicita mensagem personalizada do commit

## 🎯 Como Usar

### 1. **Primeira Configuração**
Quando abrir o projeto no VS Code:
1. Uma notificação aparecerá sugerindo extensões
2. Clique em **"Install All"** ou **"Install"** para cada extensão
3. As configurações serão aplicadas automaticamente

### 2. **Deploy Rápido**
Para fazer deploy das suas mudanças:
1. Pressione `Ctrl+Shift+P` (ou `Cmd+Shift+P` no Mac)
2. Digite: `Tasks: Run Task`
3. Selecione: `Deploy to Server`
4. Digite a mensagem do commit
5. O deploy automático será executado!

### 3. **Desenvolvimento**
- **Auto-formatação**: Código formatado automaticamente ao salvar
- **IntelliSense**: Autocomplete inteligente para PHP, CSS, HTML
- **Validação**: Erros mostrados em tempo real
- **Git integrado**: Mudanças visíveis na barra lateral

## 🔧 Configurações Aplicadas

```json
{
  "emmet.includeLanguages": {
    "php": "html"                    // Emmet em arquivos PHP
  },
  "files.associations": {
    "*.php": "php"                   // Reconhecimento de arquivos PHP
  },
  "editor.formatOnSave": true,       // Formatação automática
  "editor.tabSize": 2,               // Indentação 2 espaços
  "editor.insertSpaces": true,       // Usar espaços em vez de tabs
  "css.validate": true,              // Validação CSS
  "html.validate.styles": true,      // Validação HTML/CSS
  "php.validate.enable": true,       // Validação PHP
  "git.enableSmartCommit": true,     // Git inteligente
  "git.confirmSync": false           // Sync sem confirmação
}
```

## 🎨 Benefícios da Configuração

### ✅ **Para WordPress**
- Emmet funciona em arquivos PHP
- Validação de código WordPress
- Formatação consistente
- IntelliSense para funções PHP

### ✅ **Para CSS/HTML**
- Autocomplete Tailwind CSS
- Validação em tempo real
- Formatação automática
- Live reload para testes

### ✅ **Para Git/Deploy**
- Comandos simplificados
- Deploy com um clique
- Histórico visual
- Commit inteligente

## 🚀 Comandos Úteis

| Comando | Atalho | Descrição |
|---------|--------|-----------|
| `Tasks: Run Task` | `Ctrl+Shift+P` | Executar task de deploy |
| `Format Document` | `Shift+Alt+F` | Formatar código |
| `Git: Commit` | `Ctrl+Shift+G` | Fazer commit |
| `Toggle Terminal` | `Ctrl+`` | Abrir/fechar terminal |

---

**💡 Dica**: Essa configuração torna o VS Code um IDE profissional para desenvolvimento WordPress, com todas as ferramentas necessárias para o projeto Viaje Fácil Brasil!