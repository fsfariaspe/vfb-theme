# 🚀 Prompt para Continuar Desenvolvimento no VSCode

## 📋 Contexto do Projeto

Você está trabalhando no tema WordPress **"Viaje Fácil Brasil"** para uma agência de viagens. O projeto já tem:

### ✅ **Estrutura Implementada:**
- **Deploy automático** funcionando via GitHub Actions
- **Repositório:** https://github.com/fsfariaspe/vfb-theme
- **Hospedagem:** Nuvem Hospedagem
- **FTP configurado:** deploy-vfb@viajefacilbrasil.com.br
- **Site:** viajefacilbrasil.com.br

### 🎯 **Status Atual:**
- Header com altura reduzida (70px)
- Menu mobile básico funcionando
- Deploy automático ativo
- Estrutura de arquivos organizada

## 🛠️ **Configuração do VSCode**

### **1. Extensões Recomendadas:**
```json
{
  "recommendations": [
    "ms-vscode.vscode-json",
    "bradlc.vscode-tailwindcss",
    "formulahendry.auto-rename-tag",
    "ms-vscode.vscode-typescript-next",
    "esbenp.prettier-vscode",
    "ms-vscode.vscode-html-css-support",
    "ritwickdey.liveserver",
    "ms-vscode.vscode-git-graph"
  ]
}
```

### **2. Configurações do Workspace (.vscode/settings.json):**
```json
{
  "emmet.includeLanguages": {
    "php": "html"
  },
  "files.associations": {
    "*.php": "php"
  },
  "editor.formatOnSave": true,
  "editor.tabSize": 2,
  "editor.insertSpaces": true,
  "css.validate": true,
  "html.validate.styles": true,
  "php.validate.enable": true,
  "git.enableSmartCommit": true,
  "git.confirmSync": false
}
```

### **3. Tasks do VSCode (.vscode/tasks.json):**
```json
{
  "version": "2.0.0",
  "tasks": [
    {
      "label": "Deploy to Server",
      "type": "shell",
      "command": "git",
      "args": ["add", ".", "&&", "git", "commit", "-m", "feat: ${input:commitMessage}", "&&", "git", "push", "origin", "main"],
      "group": "build",
      "presentation": {
        "echo": true,
        "reveal": "always",
        "focus": false,
        "panel": "shared"
      },
      "problemMatcher": []
    }
  ],
  "inputs": [
    {
      "id": "commitMessage",
      "description": "Mensagem do commit",
      "default": "Atualização do tema",
      "type": "promptString"
    }
  ]
}
```

## 📁 **Estrutura de Arquivos Atual**

```
vfb-theme/
├── .github/workflows/deploy.yml    # Deploy automático
├── assets/
│   ├── css/styles.css              # Estilos principais
│   ├── js/main.js                  # JavaScript
│   └── images/                     # Imagens do tema
├── includes/                       # Funções PHP
├── template-parts/                 # Partes de templates
├── header.php                      # Cabeçalho
├── footer.php                      # Rodapé
├── index.php                       # Página principal
├── functions.php                   # Funções do tema
└── style.css                       # Informações do tema
```

## 🎯 **Próximas Tarefas Prioritárias**

### **1. Melhorar Menu Mobile:**
- Implementar menu hambúrguer animado
- Menu deslizante da direita
- Overlay escuro
- Animações suaves

### **2. Otimizar Responsividade:**
- Testar em diferentes dispositivos
- Ajustar breakpoints
- Melhorar UX mobile

### **3. Implementar Funcionalidades:**
- Sistema de busca funcional
- Carrossel de destinos
- Chatbot interativo
- Formulários de contato

## 💻 **Comandos Git Úteis**

### **Deploy Rápido:**
```bash
# Adicionar mudanças
git add .

# Commit com mensagem
git commit -m "feat: Descrição da mudança"

# Deploy automático
git push origin main
```

### **Verificar Status:**
```bash
# Ver mudanças
git status

# Ver histórico
git log --oneline

# Ver diferenças
git diff
```

## 🔧 **Workflow de Desenvolvimento**

### **1. Desenvolvimento Local:**
1. Abrir VSCode no diretório do projeto
2. Fazer mudanças nos arquivos
3. Testar localmente (se possível)
4. Fazer commit e push

### **2. Deploy Automático:**
1. GitHub Actions executa automaticamente
2. Arquivos enviados via FTP para servidor
3. Site atualizado em ~1-2 minutos

### **3. Verificação:**
1. Acessar viajefacilbrasil.com.br
2. Verificar se mudanças apareceram
3. Testar funcionalidades

## 🎨 **Padrões de Código**

### **CSS:**
- Usar classes semânticas
- Organizar por seções
- Comentários explicativos
- Responsive-first

### **PHP:**
- Seguir padrões WordPress
- Funções bem documentadas
- Sanitização de dados
- Hooks e filters

### **JavaScript:**
- ES6+ syntax
- Funções modulares
- Event listeners
- Error handling

## 📝 **Template de Commit Messages**

```
feat: Nova funcionalidade
fix: Correção de bug
style: Mudanças de estilo
refactor: Refatoração de código
docs: Documentação
test: Testes
chore: Tarefas de manutenção
```

## 🚨 **Problemas Conhecidos**

### **Menu Mobile:**
- Precisa de melhorias na animação
- Layout pode ser mais elegante
- Responsividade a ser testada

### **Deploy:**
- Funcionando corretamente
- Timeout de 120s configurado
- Exclusões otimizadas

## 🎯 **Objetivos Imediatos**

1. **Finalizar menu mobile** com design profissional
2. **Testar responsividade** em diferentes dispositivos
3. **Implementar funcionalidades** principais
4. **Otimizar performance** do site
5. **Adicionar conteúdo** dinâmico

## 📞 **Suporte**

- **Repositório:** https://github.com/fsfariaspe/vfb-theme
- **Site:** viajefacilbrasil.com.br
- **Hospedagem:** Nuvem Hospedagem
- **FTP:** deploy-vfb@viajefacilbrasil.com.br

---

**💡 Dica:** Use Ctrl+Shift+P no VSCode para acessar comandos rápidos como "Git: Commit" e "Tasks: Run Task"
