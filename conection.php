<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cadastro";

try {
  $conn = new PDO("mysql:host=$servername;dbname=Cadastro", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conectado com Sucesso<br>";
} catch(PDOException $e) {
  echo "Conexão Falhou: " . $e->getMessage();
}
?>