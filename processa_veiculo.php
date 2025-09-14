<?php
include("conexao.php");

// Pasta onde a imagem será salva
$pasta_destino = "uploads/";

// Verifica se foi enviado um arquivo
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $imagem_nome = basename($_FILES["image"]["name"]);
    $caminho_imagem = $pasta_destino . time() . "_" . $imagem_nome;

    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $caminho_imagem)) {
        die("Erro ao fazer upload da imagem.");
    }
} else {
    die("Imagem não enviada.");
}

// Dados do formulário
$modelo = $_POST['modelo'] ?? '';
$marca = $_POST['marca'];
$ano = (int)($_POST['ano'] ?? 0);
$combustivel = $_POST['combustivel'] ?? '';
$cambio = $_POST['cambio'] ?? '';
$direcao = (int)($_POST['direcao_hidraulica'] ?? 0); // pega o valor enviado (0 ou 1)
$trava = (int)($_POST['trava_eletrica'] ?? 0);       // idem
$km = (int)($_POST['km'] ?? 0);
$preco = (float)($_POST['preco'] ?? 0.0);
$usuario_id = 1; // Exemplo fixo — ou $_SESSION['vendedor_id']

// Preparar comando SQL
// Tipos para bind_param:
// s = string, i = integer, d = double (float)
$stmt = $conn->prepare("INSERT INTO veiculos (imagem_veiculo, modelo, marca, ano, combustivel, cambio, direcao_hidraulica, trava_eletrica, km, preco, usuario_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Corrigindo tipos: 
// imagem_veiculo (string) -> s
// modelo (string) -> s
// ano (int) -> i
// combustivel (string) -> s
// cambio (string) -> s
// direcao (int) -> i
// trava (int) -> i
// km (int) -> i
// preco (float/double) -> d
// vendedor_id (int) -> i

$stmt->bind_param("sssissiidii", $caminho_imagem, $modelo, $marca, $ano, $combustivel, $cambio, $direcao, $trava, $km, $preco, $usuario_id);



// Executar
if ($stmt->execute()) {
    echo "Veículo cadastrado com sucesso!";
    echo "<br><a href='index.php'>Voltar</a>";
} else {
    echo "Erro ao inserir: " . $stmt->error;
}

// Encerrar
$stmt->close();
$conn->close();
?>