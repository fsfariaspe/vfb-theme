# 🧪 Testar Diferentes Caminhos FTP

## Caminhos possíveis para testar:

### Opção 1: Caminho completo
```
FTP_DIRECTORY: /public_html/wp-content/themes/vfb-theme/
```

### Opção 2: Caminho relativo (se FTP já aponta para public_html)
```
FTP_DIRECTORY: /wp-content/themes/vfb-theme/
```

### Opção 3: Caminho sem public_html
```
FTP_DIRECTORY: /wp-content/themes/vfb-theme/
```

### Opção 4: Caminho com nome do domínio
```
FTP_DIRECTORY: /home/viajefacilbrasil.com.br/public_html/wp-content/themes/vfb-theme/
```

## Como testar:

1. Vá no GitHub: https://github.com/fsfariaspe/vfb-theme/settings/secrets/actions
2. Edite o secret `FTP_DIRECTORY`
3. Teste um caminho por vez
4. Faça um commit de teste
5. Verifique se os arquivos aparecem

## Comando de teste:
```bash
git add .
git commit -m "test: Testar caminho FTP"
git push origin main
```
