<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cadastro";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "CREATE DATABASE IF NOT EXISTS Cadastro";
  $conn->exec($sql);

  echo "Banco de dados criado com sucesso!<br>";

  require_once "conection.php";

  // sql to create table
  $sql = "CREATE TABLE Pessoas (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255) NOT NULL,
  cpf VARCHAR(14) NOT NULL UNIQUE,
  email VARCHAR(50) NOT NULL,
  data_nasc DATE NOT NULL,
  idade INT NOT NULL,
  cep VARCHAR(10) NOT NULL,
  uf VARCHAR(2) NOT NULL,
  bairro VARCHAR(100) NOT NULL,
  numero VARCHAR(10) NOT NULL,
  cidade VARCHAR(100) NOT NULL,
  reg_data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Tabela de Pessoas criada com sucesso!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>