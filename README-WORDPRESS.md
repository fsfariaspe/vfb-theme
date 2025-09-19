# Tema WordPress - Viaje Fácil Brasil

## 📋 Descrição

Tema personalizado para a agência de viagens Viaje Fácil Brasil, desenvolvido com WordPress, Tailwind CSS e funcionalidades modernas.

## 🚀 Características

### ✨ Funcionalidades Principais
- **Design Responsivo** - Funciona perfeitamente em todos os dispositivos
- **Carrossel de Imagens** - Hero section com transições suaves
- **Motor de Busca** - Integração preparada para Oner Travel
- **Chatbot Vivi** - Assistente virtual de viagem
- **SEO Otimizado** - Meta tags e schema markup
- **Performance** - Carregamento rápido e otimizado

### 🎨 Design
- **Tailwind CSS** - Framework CSS moderno
- **Cores Personalizadas** - Paleta de cores da marca
- **Tipografia** - Google Fonts (Playfair Display)
- **Ícones** - Emojis e SVGs
- **Animações** - Transições suaves e efeitos visuais

### 📱 Responsividade
- **Mobile First** - Design otimizado para mobile
- **Tablet** - Layout adaptado para tablets
- **Desktop** - Experiência completa em desktop
- **Touch Friendly** - Interface otimizada para touch

## 📁 Estrutura de Arquivos

```
tema-viaje-facil-brasil/
├── style.css                 # Arquivo principal do tema
├── index.php                 # Template da página inicial
├── header.php                # Cabeçalho
├── footer.php                # Rodapé
├── functions.php             # Funções do tema
├── page.php                  # Template para páginas
├── single.php                # Template para posts
├── archive.php               # Template para arquivos
├── search.php                # Template para busca
├── 404.php                   # Template para erro 404
├── comments.php              # Sistema de comentários
├── sidebar.php               # Sidebar
├── assets/                   # Recursos estáticos
│   ├── css/
│   │   └── styles.css        # Estilos customizados
│   ├── js/
│   │   └── main.js           # JavaScript principal
│   └── images/               # Imagens do tema
└── README-WORDPRESS.md       # Este arquivo
```

## 🛠️ Instalação

### 1. Upload do Tema
1. Faça upload da pasta do tema para `/wp-content/themes/`
2. Ative o tema no painel administrativo do WordPress
3. Configure os menus em **Aparência > Menus**

### 2. Configuração Inicial
1. **Menus**: Configure o menu principal em **Aparência > Menus**
2. **Widgets**: Configure os widgets em **Aparência > Widgets**
3. **Personalização**: Ajuste as cores e logo em **Aparência > Personalizar**

### 3. Páginas Recomendadas
- **Página Inicial** - Já configurada
- **Quem Somos** - Criada automaticamente
- **Contato** - Recomendada para formulários
- **Blog** - Para posts e notícias

## ⚙️ Configuração

### Menus
O tema suporta dois menus:
- **Menu Principal** - Navegação principal do site
- **Menu do Rodapé** - Links do rodapé

### Widgets
Áreas de widgets disponíveis:
- **Sidebar Principal** - Sidebar das páginas
- **Footer 1, 2, 3** - Colunas do rodapé

### Imagens
Tamanhos de imagem personalizados:
- **vfb-hero** - 1920x1080 (Hero section)
- **vfb-large** - 1200x800 (Posts grandes)
- **vfb-medium** - 600x400 (Posts médios)
- **vfb-thumbnail** - 300x200 (Miniaturas)

## 🔧 Personalização

### Cores
As cores principais podem ser alteradas no arquivo `assets/css/styles.css`:
- **Azul Principal**: #2563eb
- **Azul Escuro**: #1d4ed8
- **Cinza**: #6b7280
- **Cinza Escuro**: #1f2937

### Fontes
- **Principal**: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto
- **Títulos**: Playfair Display (Google Fonts)

### JavaScript
O arquivo `assets/js/main.js` contém:
- Carrossel de imagens
- Motor de busca
- Chatbot Vivi
- Menu mobile
- Animações

## 📱 Funcionalidades Especiais

### Carrossel de Imagens
- 7 destinos diferentes
- Transição automática a cada 4 segundos
- Indicadores clicáveis
- Animações suaves

### Motor de Busca
- Integração preparada para Oner Travel
- Tabs para Pacotes, Passagens e Hotéis
- Validação de formulário
- Placeholder funcional

### Chatbot Vivi
- Botão flutuante
- Janela de chat responsiva
- Simulação de respostas
- Design moderno

## 🔌 Integrações

### Oner Travel
O tema está preparado para integração com o widget da Oner Travel:
- Formulário de busca compatível
- Estrutura de dados preparada
- Documentação em `ONER_TRAVEL_INTEGRATION.md`

### APIs de Fornecedores
Funções preparadas para integração:
- `vfb_get_promotions()` - Buscar promoções
- `vfb_get_services()` - Listar serviços
- `vfb_get_destinations()` - Destinos populares

## 📊 SEO

### Meta Tags
- Título dinâmico
- Descrição personalizada
- Open Graph tags
- Twitter Cards

### Schema Markup
- TravelAgency schema
- Informações de contato
- Endereço da empresa
- Dados estruturados

### Performance
- Imagens otimizadas
- CSS minificado
- JavaScript otimizado
- Cache friendly

## 🐛 Solução de Problemas

### Problemas Comuns

1. **Imagens não aparecem**
   - Verifique se as imagens estão na pasta `assets/images/`
   - Confirme os caminhos no código

2. **JavaScript não funciona**
   - Verifique se o arquivo `main.js` está carregando
   - Confirme se não há erros no console

3. **Menu não aparece**
   - Configure o menu em **Aparência > Menus**
   - Atribua o menu à localização "Menu Principal"

4. **Estilos não aplicam**
   - Verifique se o Tailwind CSS está carregando
   - Confirme se o arquivo `styles.css` está ativo

### Logs de Erro
Para debugar problemas:
1. Ative o debug no `wp-config.php`
2. Verifique os logs de erro
3. Use o console do navegador

## 📞 Suporte

Para suporte técnico:
- **Email**: atendimento@viajefacilbrasil.com.br
- **Telefone**: (81) 99242-9403
- **Desenvolvedor**: Flávio Soares de Farias

## 📄 Licença

Este tema foi desenvolvido especificamente para a Viaje Fácil Brasil.
Todos os direitos reservados.

## 🔄 Atualizações

### Versão 1.0
- Lançamento inicial
- Funcionalidades básicas
- Design responsivo
- Integração preparada para Oner Travel

### Próximas Versões
- Integração com APIs de fornecedores
- Sistema de promoções dinâmico
- Painel administrativo personalizado
- Mais funcionalidades de SEO

---

**Desenvolvido com ❤️ para a Viaje Fácil Brasil**
