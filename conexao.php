<?php
// Configurações do banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$db   = "dp";

// Criar a conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Definir charset para evitar problemas de acentuação
$conn->set_charset("utf8");
?>
