# Fontes do Tema Viaje Fácil Brasil

Esta pasta contém as fontes personalizadas do tema.

## Fontes Utilizadas:

- **Google Fonts**: Playfair Display e Inter (carregadas via CDN)
- **Fontes Locais**: Podem ser adicionadas aqui conforme necessário

## Como Adicionar Fontes Locais:

1. Adicione os arquivos de fonte (.woff2, .woff, .ttf)
2. Atualize o CSS em `assets/css/styles.css`
3. Use `@font-face` para definir as fontes

## Exemplo:

```css
@font-face {
    font-family: 'MinhaFonte';
    src: url('../fonts/MinhaFonte.woff2') format('woff2'),
         url('../fonts/MinhaFonte.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
```
