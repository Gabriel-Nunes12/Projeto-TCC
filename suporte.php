<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto TCC</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
      /* Rodape */
      html, body {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
      }
      main {
        flex: 1;
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

  <!-- CONTEUDO PRINCIPAL -->
  <main>
    <!-- Container flex para barra lateral e o painel -->
    <div class="d-flex" style="height: calc(950px - 70px);">
      
      <!-- Barra lateral -->
      <nav class="bg-body-tertiary" style="width: 180px; padding-top: 20px;">
        <img src="img/coca.jpg" alt="" style="height: 340px; width: 175px; margin-top: 200px;">
      </nav>

      <div class="container my-5">
        <!-- Título suporte  -->
        <div class="text-center mb-4">
          <h2 class="fw-bold"><i class="bi bi-hand-thumbs-up"></i> SUPORTE</h2>
        </div>

        <!-- Linha dos 3 paineis -->
        <div class="row g-4">
          <!-- Painel email-->
          <div class="col-md-4 d-flex">
            <div class="card text-center p-4 shadow-sm rounded-4 h-100 w-100" style="background-color: #cac9ca;">
              <i class="bi bi-envelope-fill fs-1 mb-3"></i>
              <h5 class="fw-bold" style="color: #000000;">E-mails</h5>
              <hr>
              <p class="fw-bold mb-0">SUPORTE COMPRAS</p>
              <p>compras@gmail.com</p>
              <i class="bi bi-gear-fill fs-3"></i>
              <p class="fw-bold mt-2">SUPORTE ANUNCIANTE</p>
              <p>anunciante@gmail.com</p>
            </div>
          </div>

          <!-- Painel telefones -->
          <div class="col-md-4 d-flex">
            <div class="card text-center p-4 shadow-sm rounded-4 h-100 w-100" style="background-color: #cac9ca;">
              <i class="bi bi-telephone-fill fs-1 mb-3"></i>
              <h5 class="fw-bold" style="color: #000000;">Telefones</h5>
              <hr>
              <p class="fw-bold mb-0">SUPORTE COMPRAS</p>
              <p>(14) 997890571</p>
              <i class="bi bi-chat-fill fs-3"></i>
              <p class="fw-bold mt-2">SUPORTE ANUNCIANTE</p>
              <p>(14) 996753219</p>
            </div>
          </div>

          <!-- Painel anuncios -->
          <div class="col-md-4 d-flex">
            <div class="card text-center p-4 shadow-sm rounded-4 h-100 w-100" style="background-color: #cac9ca;">
              <i class="bi bi-megaphone-fill fs-1 mb-3"></i>
              <h5 class="fw-bold" style="color: #000000;">Contatos para anúncios</h5>
              <hr>
              <p class="fw-bold mb-0">TELEFONE</p>
              <p>(14) 997793579</p>
              <i class="bi bi-envelope-fill fs-1 mb-3"></i>
              <p class="fw-bold">E-MAIL</p>
              <p>anunciar@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Rodape -->
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
