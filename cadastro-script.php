<?php
require_once "conexao.php";

// Pegar os dados do formulário
$usuario    = $_POST['usuario'] ?? '';
$telefone   = $_POST['telefone'] ?? '';
$email      = $_POST['email'] ?? '';
$senha      = $_POST['senha'] ?? '';
$conf_email = $_POST['confirm_email'] ?? '';
$conf_senha = $_POST['confirm_senha'] ?? '';
$tipoDocumento = $_POST['tipoDocumento'] ?? '';
$documento = !empty($_POST['cpf']) ? $_POST['cpf'] : $_POST['cnpj'];
$cep        = $_POST['cep'] ?? '';
$municipio  = $_POST['local'] ?? '';
$nome       = $_POST['nome'] ?? '';

// Verificações básicas
if ($email !== $conf_email) die("Os emails não coincidem!");
if ($senha !== $conf_senha) die("As senhas não coincidem!");

// Preparar a query
$sql = "INSERT INTO usuarios (nome_completo, nome_usuario, email, senha, tipo_documento, documento, municipio, telefone, cep)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) die("Erro ao preparar a query: " . $conn->error);

$stmt->bind_param("sssssssss", $nome, $usuario, $email, $senha, $tipoDocumento, $documento, $municipio, $telefone, $cep);

if ($stmt->execute()) {
    header("Location: meu_perfil.php");
    exit;
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
