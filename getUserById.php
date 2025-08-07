<?php
require_once "conection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM Pessoas WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $pessoa = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$pessoa) {
        die("Pessoa não encontrada.");
    }
} else {
    die("ID não especificado.");
}
?>