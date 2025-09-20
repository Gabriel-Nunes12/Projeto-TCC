<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit();
}

// Conexão
$conn = new mysqli('localhost', 'root', '', 'dp');
if ($conn->connect_error) die("Falha na conexão: " . $conn->connect_error);

// Buscar dados do usuário
$id = $_SESSION['id_usuario'];
$sql = "SELECT nome_completo, nome_usuario, email, telefone, id_usuario FROM usuarios WHERE id_usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
} else {
    echo "Usuário não encontrado!";
    exit();
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Perfil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    html, body {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
      background-color: #f8f9fa;
    }
    main {
      flex: 1;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .perfil-header {
      background: linear-gradient(135deg, #0d6efd, #6610f2);
      color: white;
      border-radius: 15px 15px 0 0;
      padding: 20px;
      text-align: center;
    }
    .perfil-info {
      padding: 20px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.php">Meu Projeto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
          <li class="nav-item"><a class="nav-link" href="populares.php">Populares</a></li>
          <li class="nav-item"><a class="nav-link" href="planos.php">Planos</a></li>
          <li class="nav-item"><a class="nav-link" href="suporte.php">Suporte</a></li>
          <li class="nav-item"><a class="nav-link" href="anunciar.php">Anunciar</a></li>
          <li class="nav-item"><a class="nav-link" href="meu_perfil.php">Meu Perfil</a></li>
          <li class="nav-item"><a class="nav-link" href="logout.php">Sair</a></li>
        </ul>
      </div>
    </div>
  </nav>
    


  <!-- Conteúdo -->
  <main class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="perfil-header">
            <h2 class="fw-bold mb-0"><?php echo htmlspecialchars($user['nome_completo']); ?></h2>
            <small>@<?php echo htmlspecialchars($user['nome_usuario']); ?></small>
          </div>
          <div class="perfil-info">
            <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
            <p><strong>Telefone:</strong> <?php echo htmlspecialchars($user['telefone']); ?></p>
            <p><strong>ID:</strong> <?php echo htmlspecialchars($user['id_usuario']); ?></p>

          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Rodapé -->
  <footer class="bg-dark text-white text-center py-3 mt-auto">
    <p class="mb-0">© <?php echo date("Y"); ?> Meu Projeto. Todos os direitos reservados.</p>
  </footer>

</body>
</html>
