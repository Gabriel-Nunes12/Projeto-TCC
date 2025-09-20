<!-- Página de login do usuário -->
<!DOCTYPE html>
<html lang="pt-br">
<!-- Cabeçalho HTML -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto TCC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

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
<!-- Início do corpo da página -->
<body>
    
  <!-- Cabecario -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <img src="img/logo.png" alt="" style="height: 70px;">
        <img src="img/casa.png" alt="" style="height: 40px; margin-left: 60%;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" style="">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="populares.php">Populares</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="anunciar.php">Anunciar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="suporte.php">Suporte</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <a class="navbar-brand" href="login.php">Login</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <a class="navbar-brand" href="cadastro.php">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Suporte</a></li>
    <li><a class="dropdown-item" href="#">Notificação</a></li>
  </ul>
</div>
<div class="btn-group">
</nav>
      </form>
<!-- Fim do formulário -->
    </div>
  </div>
</nav>

  <!-- Container flex para barra lateral e o painel -->
  <div class="d-flex" style="height: calc(950px - 70px);">
    
    <!-- Barra lateral -->
    <nav class="bg-body-tertiary" style="width: 180px; padding-top: 20px;">
      <img src="img/coca.jpg" alt="" style="height: 340px ; width: 175px; margin-top: 200px;" />
    </nav>

   <!-- Painel Login -->
  <div class="d-flex flex-column justify-content-start"
     style="height: 550px; width: 380px; margin-top: 120px; margin-left: 200px; border-radius: 30px; background-color: #cac9ca; padding: 30px; box-shadow: 10px 10px 0px #000;">

  <!-- Títulos -->  
  <h5 class="fw-bold mb-0" style="color: black;">Bem Vindo!</h5>
  <h6 class="fw-bold mb-4" style="color: rgb(255, 255, 255);">Faça o seu Login:</h6>

  <!-- Campos Email e Senha-->
   <!-- Início do formulário -->
<form action="login-script.php" method="post">
  <label for="email" class="fw-bold">E-mail</label>
  <input type="email" id="email" name="email" class="form-control mb-3" style="background-color: #ffffff; border: none;">

  <label for="senha" class="fw-bold">Senha</label>
  <input type="password" id="senha" name="senha" class="form-control mb-4" style="background-color: #ffffff; border: none;">

  <button class="btn btn-dark w-100 rounded-pill fw-bold mb-2">ENTRAR</button>
  <small class="text-muted text-center">Esqueceu a senha?</small>
    </form>
<!-- Fim do formulário -->
</div>


  <!-- Imagem carro da tela inicial -->
  <img src="img/x5.png"
       style="position: absolute; top: 100px; width: 750px; height: 650px; margin-left: 770px;" />

       <img src="img/bmw.png"
       style="position: absolute; top: 210px; width: 800px; height: 675px; margin-left: 1150px;" />
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
  
<!-- Fim do corpo da página -->
</body>
</html>
