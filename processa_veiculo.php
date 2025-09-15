<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Conexão com o banco
include("conexao.php");

// Pasta de uploads
if (!is_dir('uploads')) mkdir('uploads', 0777, true);

// Recebe arquivo e campos
$image = $_FILES['image'] ?? null;
$marca = $_POST['marca'] ?? '';
$modelo = $_POST['modelo'] ?? '';
$ano = $_POST['ano'] ?? '';
$preco = $_POST['preco'] ?? '';
$local = $_POST['local'] ?? '';

if (!$image || !$marca || !$modelo || !$ano || !$preco || !$local) {
    echo json_encode(['success'=>false, 'message'=>'Campos obrigatórios faltando']);
    exit;
}

// Salvar imagem
$ext = pathinfo($image['name'], PATHINFO_EXTENSION);
$nome_img = uniqid().".".$ext;
$caminho = "uploads/".$nome_img;

if (!move_uploaded_file($image['tmp_name'], $caminho)) {
    echo json_encode(['success'=>false,'message'=>'Erro ao salvar a imagem']);
    exit;
}

// Inserir no banco
$stmt = $conn->prepare("INSERT INTO veiculos (marca, modelo, ano, preco, local, imagem) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $marca, $modelo, $ano, $preco, $local, $nome_img);
$stmt->execute();

echo json_encode([
    'success'=>true,
    'message'=>'Veículo publicado com sucesso!',
    'marca'=>$marca,
    'modelo'=>$modelo,
    'ano'=>$ano,
    'preco'=>$preco,
    'local'=>$local,
    'imagem'=>$nome_img
]);
