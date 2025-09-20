<?php
// Incluir a conexão com o banco
require_once "conexao.php";

// Pegar os dados do formulário
$usuario    = $_POST['usuario'] ?? '';
$telefone   = $_POST['telefone'] ?? '';
$email      = $_POST['email'] ?? '';
$senha      = $_POST['senha'] ?? '';
$conf_email = $_POST['confirm_email'] ?? '';
$conf_senha = $_POST['confirm_senha'] ?? '';
$tipoDocumento = $_POST ['tipoDocumento']?? '';
// Se veio CPF, pega ele, senão pega CNPJ
$documento = !empty($_POST['cpf']) ? $_POST['cpf'] : $_POST['cnpj'];
$cep        = $_POST['cep'] ?? '';
$municipio  = $_POST['local'] ?? '';
$nome       = $_POST['nome'] ?? '';

// Verificações básicas
if ($email !== $conf_email) {
    die("Os emails não coincidem!");
}
if ($senha !== $conf_senha) {
    die("As senhas não coincidem!");
}

// Usar a senha diretamente sem criptografar (recomendado usar password_hash futuramente)
$senha_pura = $senha;

// Preparar a query
$sql = "INSERT INTO usuarios (nome_completo, nome_usuario, email, senha, tipo_documento, documento, municipio, telefone, cep)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Erro ao preparar a query: " . $conn->error);
}

$stmt->bind_param("sssssssss", $nome, $usuario, $email, $senha_pura,$tipoDocumento, $documento, $municipio, $telefone, $cep);

if ($stmt->execute()) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
