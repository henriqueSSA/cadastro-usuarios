<?php
try{
    if($_SERVER["REQUEST_METHOD"]=== "POST"){
    $nome = $_POST["name"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $data_nasc = $_POST["data_nasc"];
    $idade = $_POST["idade"];
    $cep = $_POST["cep"];
    $uf = $_POST["uf"];
    $bairro = $_POST["bairro"];
    $numero = $_POST["numero"];
    $cidade = $_POST["cidade"];

    require_once "conection.php";

    $sql = "INSERT INTO Pessoas (nome, cpf, email, data_nasc, idade, cep, uf, bairro, numero, cidade) 
            VALUES (:nome, :cpf, :email, :data_nasc, :idade, :cep, :uf, :bairro, :numero, :cidade)";

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
        ':cidade' => $cidade
    ]);

    header("Location: index.php");
    exit();
}

}catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
}

?>