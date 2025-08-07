<?php require_once "getUserById.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/favicon-azul.ico" type="image/x-icon">
    <title>Editar Cadastro</title>
</head>

<body>
    <form action="updateUserDb.php?id=<?= $pessoa['id'] ?>" method="POST" autocomplete="on">
        <input type="hidden" name="id" value="<?= $pessoa['id'] ?>">

        <label>Nome:</label><br>
        <input type="text" name="name" value="<?= $pessoa['nome'] ?>" required><br>

        <label>CPF:</label><br>
        <input type="text" name="cpf" maxlength="14" value="<?= $pessoa['cpf'] ?>" required><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?= $pessoa['email'] ?>" required><br>

        <label>Data de Nascimento:</label><br>
        <input type="date" name="data_nasc" value="<?= $pessoa['data_nasc'] ?>" required><br>

        <label>Idade:</label><br>
        <input type="number" name="idade" value="<?= $pessoa['idade'] ?>" readonly required><br>

        <label>CEP:</label><br>
        <input type="text" name="cep" value="<?= $pessoa['cep'] ?>" required><br>

        <label>UF:</label><br>
        <input type="text" name="uf" value="<?= $pessoa['uf'] ?>" required><br>

        <label>Bairro:</label><br>
        <input type="text" name="bairro" value="<?= $pessoa['bairro'] ?>" required><br>

        <label>Número:</label><br>
        <input type="number" name="numero" value="<?= $pessoa['numero'] ?>" required><br>

        <label>Cidade:</label><br>
        <input type="text" name="cidade" value="<?= $pessoa['cidade'] ?>" required><br>

        <button type="submit">Salvar</button>
    </form>
</body>

</html>