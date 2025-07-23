<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="imagens/favicon-azul.ico" type="image/x-icon">
    <script src="script.js"></script>
</head>

<body>
    <main class="main">
        <div class="style-header">
            <h1 class="style-title">Sistema de Cadastro Interativo</h1>
            <h2 class="style-subtitle">Cadastro em etapas com validação em tempo real</h2>
        </div>
        <div class="grid-container">
            <div class="style-box iniciar-cadastro">
                <img src="imagens/imagem-cadastro.png" alt="imagem que ilustra o Cadastro" class="imagem-cadastro">
                <h3>Iniciar Cadastro</h3>
                <h4>Cadastre novos usuários com validações</h4>
                <button class="style-cadastro" id="style-cadastro" type="button" onclick="RedirectForms()">Começar Cadastro</button>
            </div>
            <div class="style-box  listar-cadastros">
                <img src="imagens/imagem-listar.png" alt="imagem que ilustra o Cadastro" class="imagem-listar">
                <h3>Listar Cadastros</h3>
                <h4>Veja todos os cadastros feitos</h4>
                <button class="style-listar" type="button" onclick="alert('Hello World!')">Ver Cadastros</button>
            </div>
        </div>
    </main>
    <footer>
        <div class="style-footer">
            <p>2025 - Projeto de Cadastro Interativo com PHP</p>
            <p>Desenvolvido por <span class="destaque">[Henrique Campos]</span></p>
        </div>
    </footer>
</body>
</html>