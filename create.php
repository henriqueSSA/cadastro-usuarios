<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Novo Cadastro</title>
</head>

<body>
    <div class="style-tform">
        <h1>Formulário Multi-Etapas</h1>
        <div class="style-form">
            <form action="/action_page.php" autocomplete="on" onsubmit="mostrarLoading()">
                <label for="name">Nome:</label><br>
                <input type="text" id="name" name="name" required><br><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>
                <label for="data_nasc">Data de Nascimento:</label><br>
                <input type="date" id="data_nasc" name="data_nasc" max="2009-07-20" required><br><br>
                <label for="idade">Idade:</label><br>
                <input type="number" id="idade" name="idade" required><br>
                <button class="style-btcadastro" type="button" onclick="RedirectForms()">Proximo</button>
            </form>
            <div class="barra-container">
                <div class="barra-progresso" id="barra-progresso"></div>
            </div>
        </div>
    </div>

    <script>
        function mostrarLoading() {
            // Mostra o loading
            document.getElementById('barra-progresso').style.display = 'block';
        }
    </script>

</body>

</html>