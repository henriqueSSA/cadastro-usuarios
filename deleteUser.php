<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['id'])) {
    try {

        require_once "conection.php";


        $sql = "DELETE FROM Pessoas WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $executar = $stmt->execute([$_POST['id']]);


        if ($executar) {
            echo "<script>
            alert('Registro excluído com sucesso!');
            window.location.href = 'readerUser.php';
            </script>";
            exit;
        } else {
            echo "Erro ao excluir o registro.";
        }
    } catch (PDOException $e) {

        echo "Erro no banco de dados: " . $e->getMessage();
    }
} else {
    echo "Requisição inválida.";
}
