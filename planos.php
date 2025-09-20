<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto TCC</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    html, body {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
    }
    main {
      flex: 1;
    }
    .plan-card {
      background: #333;
      color: white;
      width: 150px;
      border-radius: 8px;
      padding: 15px;
      text-align: center;
      transform: skewX(-10deg);
    }
    .plan-card > div {
      transform: skewX(10deg);
    }
  </style>
</head>
<body>
    
  <!-- Cabeçalho -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary px-3">
    <img src="img/logo.png" alt="Logo" style="height: 70px;">
    <img src="img/casa.png" alt="Home" style="height: 40px; margin-left: auto;">

    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Início</a>
      <a class="navbar-brand" href="populares.php">Populares</a>
      <a class="navbar-brand" href="anunciar.php">Anunciar</a>
      <a class="navbar-brand" href="suporte.php">Suporte</a>
      <a class="navbar-brand" href="planos.php">Planos</a>

      <form class="d-flex ms-auto" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>

      <div class="btn-group dropstart ms-3">
        <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="img/usuario.png" alt="Usuário" width="30" height="35">
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Suporte</a></li>
          <li><a class="dropdown-item" href="#">Notificação</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <!-- Barra lateral -->
    <div class="d-flex" style="height: calc(950px - 70px);">
      <nav class="bg-body-tertiary" style="width: 180px; padding-top: 20px;">
        <img src="img/coca.jpg" alt="Banner" style="height: 340px; width: 175px; margin-top: 200px;">
      </nav>

      <!-- Seção Planos -->
      <section class="d-flex flex-column align-items-center my-5 w-100">
        
        <!-- Título -->
        <div class="text-center mb-3">
          <i class="bi bi-tag-fill"></i>
          <h2 class="fw-bold d-inline">PLANOS</h2>
        </div>

        <!-- Painel 1 -->
        <div class="p-4 mb-5" style="background-color: #b0b0b0; border-radius: 15px; width: 95%; max-width: 1400px; margin-left: 40px;">
          
          <!-- Barra TEMPO DE EXPOSIÇÃO -->
          <div class="mb-3" style="background: #4e4e4e; border-radius: 20px; padding: 5px;">
            <h5 class="text-white m-0">TEMPO DE EXPOSIÇÃO - DESTAQUES</h5>
          </div>

          <!-- Cards Preco  -->
          <div class="d-flex justify-content-center flex-wrap gap-3 mb-4">
            <div class="plan-card"><div><h6 class="fw-bold">1 SEMANA</h6><p class="text-danger fw-bold">150 REAIS</p><p class="text-success fw-bold">OFERTA!</p></div></div>
            <div class="plan-card"><div><h6 class="fw-bold">2 SEMANAS</h6><p class="text-danger fw-bold">250 REAIS</p><p class="text-success fw-bold">OFERTA!</p></div></div>
            <div class="plan-card"><div><h6 class="fw-bold">4 DIAS</h6><p class="text-danger fw-bold">100 REAIS</p><p class="text-success fw-bold">OFERTA!</p></div></div>
          </div>
          <div class="d-flex justify-content-center flex-wrap gap-3">
            <div class="plan-card"><div><h6 class="fw-bold">1 MÊS</h6><p class="text-danger fw-bold">500 REAIS</p><p class="text-success fw-bold">OFERTA!</p></div></div>
            <div class="plan-card"><div><h6 class="fw-bold">2 MESES</h6><p class="text-danger fw-bold">900 REAIS</p><p class="text-success fw-bold">OFERTA!</p></div></div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- Rodapé do segundo código -->
  <div class="bg-dark text-light text-center py-3">
    <div class="container">
      <p class="mb-0">&copy; 2025 Projeto TCC - Todos os direitos reservados.</p>
      <p class="mb-0">
        <a href="#" class="text-light text-decoration-none mx-2">Política de Privacidade</a> |
        <a href="#" class="text-light text-decoration-none mx-2">Termos de Uso</a>
      </p>
    </div>
  </div>

</body>
</html>
