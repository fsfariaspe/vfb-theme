/**
 * Script de teste para verificar configuração do deploy
 * Execute com: node test-deploy.js
 */

const fs = require('fs');
const path = require('path');

console.log('🔍 Verificando configuração do deploy...\n');

// Verificar se os arquivos necessários existem
const requiredFiles = [
    '.github/workflows/deploy.yml',
    'package.json',
    '.gitignore',
    'style.css',
    'functions.php',
    'index.php'
];

console.log('📁 Verificando arquivos necessários:');
requiredFiles.forEach(file => {
    const exists = fs.existsSync(file);
    console.log(`  ${exists ? '✅' : '❌'} ${file}`);
});

// Verificar configuração do package.json
console.log('\n📦 Verificando package.json:');
try {
    const packageJson = JSON.parse(fs.readFileSync('package.json', 'utf8'));
    console.log(`  ✅ Nome: ${packageJson.name}`);
    console.log(`  ✅ Versão: ${packageJson.version}`);
    console.log(`  ✅ Scripts de build: ${Object.keys(packageJson.scripts).join(', ')}`);
} catch (error) {
    console.log('  ❌ Erro ao ler package.json:', error.message);
}

// Verificar workflow do GitHub Actions
console.log('\n🚀 Verificando workflow GitHub Actions:');
try {
    const workflow = fs.readFileSync('.github/workflows/deploy.yml', 'utf8');
    const hasFTPDeploy = workflow.includes('FTP-Deploy-Action');
    const hasSecrets = workflow.includes('secrets.FTP_SERVER');
    console.log(`  ${hasFTPDeploy ? '✅' : '❌'} FTP Deploy Action configurado`);
    console.log(`  ${hasSecrets ? '✅' : '❌'} Secrets configurados`);
} catch (error) {
    console.log('  ❌ Erro ao ler workflow:', error.message);
}

// Verificar estrutura do tema WordPress
console.log('\n🎨 Verificando estrutura do tema WordPress:');
const themeFiles = [
    'style.css',
    'index.php',
    'functions.php',
    'header.php',
    'footer.php'
];

themeFiles.forEach(file => {
    const exists = fs.existsSync(file);
    console.log(`  ${exists ? '✅' : '❌'} ${file}`);
});

console.log('\n📋 Checklist para ativar o deploy:');
console.log('  □ Configurar secrets no GitHub (FTP_SERVER, FTP_USERNAME, FTP_PASSWORD, FTP_DIRECTORY)');
console.log('  □ Verificar credenciais FTP na Nuvem Hospedagem');
console.log('  □ Confirmar caminho do tema no servidor');
console.log('  □ Fazer commit e push para testar');

console.log('\n🎯 Próximo passo: Configure os secrets no GitHub e faça um teste!');
