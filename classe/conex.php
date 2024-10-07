<?php
// Configurações do banco de dados
$servername = "localhost";  // Nome do servidor (geralmente "localhost")
$username = "root";         // Nome de usuário do MySQL
$password = "";             // Senha do MySQL
$dbname = "sca";      // Nome do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>