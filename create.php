<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Novo Cadastro</title>
</head>

<body>
    <form>
        <h1>Formulario Multi-Etapas</h1>
        <form class="style-form" action="/action_page.php" autocomplete="on">
            <label for="name">Nome:</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            <label for="data">Data De Nascimento:</label>
            <input type="date" id="data" name="data" required><br>
            <input type="submit" value="Enviar">
        </form>
    </form>

</body>

</html>