<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/favicon-azul.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
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
            <?php
            require_once "readerUserDb.php";
            if (!empty($pessoas)) {
                foreach ($pessoas as $pessoa) {
                    echo "<tr>";
                    echo "<td>" . $pessoa['id'] . "</td>";
                    echo "<td>" . $pessoa['nome'] . "</td>";
                    echo "<td>" . $pessoa['cpf'] . "</td>";
                    echo "<td>" . $pessoa['email'] . "</td>";
                    echo "<td>" . $pessoa['data_nasc'] . "</td>";
                    echo "<td>" . $pessoa['idade'] . "</td>";
                    echo "<td>" . $pessoa['cep'] . "</td>";
                    echo "<td>" . $pessoa['uf'] . "</td>";
                    echo "<td>" . $pessoa['bairro'] . "</td>";
                    echo "<td>" . $pessoa['numero'] . "</td>";
                    echo "<td>" . $pessoa['cidade'] . "</td>";
                    echo '<td>
                    <div class="style-btacoes">
                    <form action="deleteUser.php" method="post" onsubmit="return confirm(\'Tem certeza que deseja excluir?\');">
                    <input type="hidden" name="id" value="' . $pessoa['id'] . '">
                    <button class= "style-excluir" id = "style-excluir" type="submit">Excluir</button>
                    </form>
                   <button class= "style-edite" id = "style-edite" type="button" onclick="RedirectForms3();">Editar</button>
                   </div>
                    </td>';
                    echo "</tr>";
                }
            } else {
                echo "<tr>";
                echo "<td colspan='12'>Nenhum registro encontrado.</td>";
                echo "</tr>";
            }
            ?>
        </table>

    </div>
        <button class="style-readerListar" type="button" onclick="home()">Anterior</button>
        
</body>

</html>