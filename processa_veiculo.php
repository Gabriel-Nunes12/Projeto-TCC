<?php
session_start();
include("conexao.php");

header('Content-Type: application/json');

if(!isset($_SESSION['id_usuario'])){
    echo json_encode(["success"=>false,"message"=>"Usuário não logado"]);
    exit;
}

$usuario_id = $_SESSION['id_usuario'];
$pasta_destino = "uploads/";

if(isset($_FILES['image']) && $_FILES['image']['error']==0){
    $imagem_nome = basename($_FILES['image']['name']);
    $caminho_imagem = $pasta_destino.time().'_'.$imagem_nome;
    if(!move_uploaded_file($_FILES['image']['tmp_name'],$caminho_imagem)){
        echo json_encode(["success"=>false,"message"=>"Erro ao fazer upload da imagem."]);
        exit;
    }
} else {
    echo json_encode(["success"=>false,"message"=>"Imagem não enviada."]);
    exit;
}

// Recebendo dados do formulário
$marca = $_POST['marca'] ?? '';
$modelo = $_POST['modelo'] ?? '';
$ano = (int)($_POST['ano'] ?? 0);
$combustivel = $_POST['combustivel'] ?? '';
$cambio = $_POST['cambio'] ?? '';
$direcao = $_POST['direcao_hidraulica'] ?? '';
$trava = $_POST['trava_eletrica'] ?? '';
$km = (float)($_POST['km'] ?? 0);
$local = $_POST['local'] ?? '';
$preco = (float)($_POST['preco'] ?? 0);

// Preparar SQL
$stmt = $conn->prepare("INSERT INTO veiculos (imagem, marca, modelo, ano, combustivel, local, cambio, direcao_hidraulica, trava_eletrica, km, preco, usuario_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssisssssddi", $caminho_imagem, $marca, $modelo, $ano, $combustivel, $local, $cambio, $direcao, $trava, $km, $preco, $usuario_id);

if($stmt->execute()){
    header("Location: anunciar.php");
    exit();
} else {
    echo json_encode(["success"=>false,"message"=>$stmt->error]);
}

$stmt->close();
$conn->close();
?>
