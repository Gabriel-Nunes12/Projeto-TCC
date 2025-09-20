<?php
session_start();
include("conexao.php");

if(!isset($_SESSION['id'])){
    echo json_encode(['success'=>false, 'veiculos'=>[]]);
    exit();
}

$usuario_id = $_SESSION['id'];

$result = $conn->query("SELECT *, 
    IF(direcao_hidraulica=1,'Sim','Não') as direcao_hidraulica, 
    IF(trava_eletrica=1,'Sim','Não') as trava_eletrica
    FROM veiculos WHERE usuario_id = $usuario_id ORDER BY id_veiculo DESC");

$veiculos = [];
while($row = $result->fetch_assoc()){
    $veiculos[] = $row;
}

echo json_encode(['success'=>true, 'veiculos'=>$veiculos]);
?>
