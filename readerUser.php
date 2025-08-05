<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/favicon-azul.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Lista Cadastros</title>
</head>

<body>

    <div class="style-listaUser">
        <h1 class="style-titleUser">Cadastros Realizados</h1>
        <table>
            <tr>
                <th>ID Usuario</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>EMAIL</th>
                <th>DATA DE NASCIMENTO</th>
                <th>IDADE</th>
                <th>CEP</th>
                <th>UF</th>
                <th>BAIRRO</th>
                <th>NUMERO</th>
                <th>CIDADE</th>
                <th>ACOES</th>
            </tr>
            <?php if (!empty($pessoas)): ?>
                <?php foreach ($pessoas as $pessoa): ?>
                    <tr>
                        <td><?= htmlspecialchars($pessoa['id']) ?></td>
                        <td><?= htmlspecialchars($pessoa['nome']) ?></td>
                        <td><?= htmlspecialchars($pessoa['cpf']) ?></td>
                        <td><?= htmlspecialchars($pessoa['email']) ?></td>
                        <td><?= htmlspecialchars($pessoa['data_nasc']) ?></td>
                        <td><?= htmlspecialchars($pessoa['idade']) ?></td>
                        <td><?= htmlspecialchars($pessoa['cep']) ?></td>
                        <td><?= htmlspecialchars($pessoa['uf']) ?></td>
                        <td><?= htmlspecialchars($pessoa['bairro']) ?></td>
                        <td><?= htmlspecialchars($pessoa['numero']) ?></td>
                        <td><?= htmlspecialchars($pessoa['cidade']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="12">Nenhum registro encontrado.</td>
                </tr>
            <?php endif; ?>

            </tr>
        </table>
    </div>

</body>

</html>