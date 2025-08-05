<?php
try{
    
    require_once "conection.php";

    $sql = "SELECT * FROM Pessoas";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
 

    $pessoas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
}catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
    exit();
}



?>