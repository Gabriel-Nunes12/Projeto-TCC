<?php
// Verifica se todos os campos foram enviados
if (isset($_FILES['meuArquivo'], $_POST['titulo'], $_POST['descricao'], $_POST['autor']) 
    && $_FILES['meuArquivo']['error'] === 0) {
    
    // Dados da imagem
    $imagem = $_FILES['meuArquivo'];

    // Pasta de destino
    $pasta = 'uploads/';
    if (!is_dir($pasta)) {
        mkdir($pasta, 0777, true);
    }

    // Caminho final da imagem
    $destino = $pasta . basename($imagem['name']);

    // Move a imagem para a pasta de destino
    if (move_uploaded_file($imagem['tmp_name'], $destino)) {
        // Pega os outros dados enviados pelo formulário
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $autor = $_POST['autor'];

        // Redireciona para ver.php passando as informações pela URL
        header("Location: ver.php?img=" . urlencode($destino) . 
               "&titulo=" . urlencode($titulo) . 
               "&descricao=" . urlencode($descricao) . 
               "&autor=" . urlencode($autor));
        exit;
    } else {
        echo "Erro ao mover o arquivo.";
    }
} else {
    echo "Formulário incompleto ou erro no upload.";
}
?>
