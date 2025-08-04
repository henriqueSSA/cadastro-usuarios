<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <link rel="icon" href="imagens/favicon-azul.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>

    <title>Novo Cadastro</title>
</head>

<body>
    <div class="style-tform">
        <div class="barra-container">
            <div class="barra-progresso" id="barra-progresso"></div>
        </div>
        <h1>Formulário Multi-Etapas</h1>
        <!-- Primeira Etapa do Formulário -->
        <form action="newUser.php" autocomplete="on" method="POST">
            <div class="style-form1" id="style-form1">

                <label for="name">Nome:</label><br>
                <input type="text" id="name" name="name" required><br><br>
                <label for="cpf">CPF:</label><br>
                <input type="text" id="cpf" name="cpf" maxlength="14" placeholder="000.000.000-00" required><br><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>
                <label for="data_nasc">Data de Nascimento:</label><br>
                <input type="date" id="data_nasc" name="data_nasc" max="2009-07-20" required><br><br>
                <label for="idade">Idade:</label><br>
                <input type="number" id="idade" name="idade" required readonly><br>
                <div class="style-btcadastro-container">
                    <button class="style-cadastro" type="button" onclick="home()">Anterior</button>
                    <button class="style-cadastro" type="button" onclick="validationForm()">Proximo</button>
                </div>
            </div>

            <!-- Segunda Etapa do Formulário -->
            <div class="style-form2" id="style-form2">

                <label for="cep">CEP:</label><br>
                <input type="text" id="cep" name="cep" placeholder="00000-000" required><br><br>
                <label for="uf">UF:</label><br>
                <input type="text" id="uf" name="uf" required><br><br>
                <label for="bairro">Bairro:</label><br>
                <input type="text" id="bairro" name="bairro" required><br><br>
                <label for="numero">N°:</label><br>
                <input type="number" id="numero" name="numero" required><br><br>
                <label for="cidade">Cidade:</label><br>
                <input type="text" id="cidade" name="cidade" required><br>
                <div class="style-btcadastro-container">
                    <button class="style-cadastro" type="button" onclick="RedirectForms()">Anterior</button>
                    <button class="style-cadastro" id="botaoSalvar" type="submit" value="enviar">Salvar</button>
                </div>
        </form>
    </div>

    </div>


</body>

</html>