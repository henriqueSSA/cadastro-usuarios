<?php
try {
    require_once "conection.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        $data_nasc = $_POST["data_nasc"];
        $idade = $_POST["idade"];
        $cep = $_POST["cep"];
        $uf = $_POST["uf"];
        $bairro = $_POST["bairro"];
        $numero = $_POST["numero"];
        $cidade = $_POST["cidade"];

        $sql = "UPDATE Pessoas SET 
            nome = :nome,
            cpf = :cpf,
            email = :email,
            data_nasc = :data_nasc,
            idade = :idade,
            cep = :cep,
            uf = :uf,
            bairro = :bairro,
            numero = :numero,
            cidade = :cidade
            WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':nome' => $nome,
            ':cpf' => $cpf,
            ':email' => $email,
            ':data_nasc' => $data_nasc,
            ':idade' => $idade,
            ':cep' => $cep,
            ':uf' => $uf,
            ':bairro' => $bairro,
            ':numero' => $numero,
            ':cidade' => $cidade,
            ':id' => $id
        ]);

        echo "<script>alert('Registro atualizado com sucesso!');
        window.location.href = 'readerUser.php';
        </script>";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

?>
