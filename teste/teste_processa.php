<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Diretório de uploads
if (!is_dir('uploads')) {
    mkdir('uploads', 0777, true);
}

// Verifica se enviou arquivo
if (!isset($_FILES['image'])) {
    echo json_encode(['success' => false, 'message' => 'Nenhum arquivo enviado']);
    exit;
}

// Recebe dados
$marca = $_POST['marca'] ?? '';
$modelo = $_POST['modelo'] ?? '';
$ano = $_POST['ano'] ?? '';
$preco = $_POST['preco'] ?? '';

// Validar campos
if (!$marca || !$modelo || !$ano || !$preco) {
    echo json_encode(['success' => false, 'message' => 'Campos obrigatórios faltando']);
    exit;
}

// Processar upload
$img = $_FILES['image'];
$ext = pathinfo($img['name'], PATHINFO_EXTENSION);
$nome_img = uniqid() . "." . $ext;
$caminho = "uploads/" . $nome_img;

if (!move_uploaded_file($img['tmp_name'], $caminho)) {
    echo json_encode(['success' => false, 'message' => 'Erro ao mover arquivo. Verifique permissões da pasta uploads.']);
    exit;
}

// Sucesso
echo json_encode([
    'success' => true,
    'message' => 'Arquivo enviado com sucesso!',
    'marca' => $marca,
    'modelo' => $modelo,
    'ano' => $ano,
    'preco' => $preco,
    'imagem' => $nome_img
]);
