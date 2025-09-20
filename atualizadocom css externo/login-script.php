<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Conectar ao banco de dados
    $conn = new mysqli('localhost', 'root', '', 'projeto_tcc');

    // Verificar a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Consultar o banco de dados para verificar o usuário
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        // Bind dos parâmetros
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verificar se o usuário foi encontrado
        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            // Comparar a senha digitada com a senha armazenada no banco de dados
            if ($senha === $row['senha']) {
                echo "Login bem-sucedido!";
                // Redirecionar para a página interna ou painel do usuário
                header("Location: populares.php"); // Exemplo de redirecionamento
                exit();
            } else {
                echo "Senha incorreta!";
            }
        } else {
            echo "Usuário não encontrado!";
        }

        // Fechar a declaração
        $stmt->close();
    }

    // Fechar a conexão
    $conn->close();
}
?>