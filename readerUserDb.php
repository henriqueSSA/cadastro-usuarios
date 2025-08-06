<?php
try {

    require_once "conection.php";

    $sql = "SELECT 
    id,
    nome,
    cpf,
    email,
    DATE_FORMAT(data_nasc, '%d/%m/%Y') AS data_nasc,
    idade,
    cep,
    uf,
    bairro,
    numero,
    cidade
    FROM Pessoas;";

    $stmt = $conn->prepare($sql);
    $stmt->execute();


    $pessoas = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
    exit();
}

?>