<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $conn = new mysqli('localhost', 'root', '', 'dp');
    if ($conn->connect_error) die("Falha na conexão: " . $conn->connect_error);

$sql = "SELECT id_usuario, nome_completo, senha FROM usuarios WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();

            // Comparação simples (modo atual)
            if ($senha === $row['senha']) {
                // 🔹 Salva apenas o ID na sessão
$_SESSION['id_usuario'] = $row['id_usuario'];

                header("Location: meu_perfil.php");
                exit();
            } else {
                echo "<script>alert('Senha incorreta!'); window.location.href='login.php';</script>";
            }
        } else {
            echo "<script>alert('Usuário não encontrado!'); window.location.href='login.php';</script>";
        }

        $stmt->close();
    }
    $conn->close();
}
?>
