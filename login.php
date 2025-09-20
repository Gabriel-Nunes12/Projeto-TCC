<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto TCC</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Script senha -->
  <script src="JavaScript/cadastro js/senha.js"></script>
</head>
<body>
    
  <!-- Cabeçalho -->
   <nav class="navbar navbar-expand-lg bg-body-tertiary px-3">
   <div class="container-fluid d-flex align-items-center justify-content-start">
    <img src="img/logo.png" alt="Logo" style="height: 70px; margin-right: 15px;">
    <img src="img/casa.png" alt="Home" style="height: 40px; margin-right: 10px;">
    <a class="navbar-brand me-3" href="index.php">Início</a>
    <a class="navbar-brand me-3" href="suporte.php">Suporte</a>
    <a class="navbar-brand" href="cadastro.php">Cadastro</a>

  </div>
</nav>

  <!-- Container flex para barra lateral e o painel -->
  <div class="d-flex" style="height: calc(950px - 70px);">
    
    <!-- Barra lateral -->
    <nav class="bg-body-tertiary" style="width: 180px; padding-top: 20px;">
      <img src="img/coca.jpg" alt="Propaganda" style="height: 340px; width: 175px; margin-top: 200px;">
    </nav>

    <!-- Painel Login -->
    <div class="d-flex flex-column justify-content-start"
         style="height: 550px; width: 380px; margin-top: 120px; margin-left: 200px;
                border-radius: 30px; background-color: #cac9ca; padding: 30px;
                box-shadow: 10px 10px 0px #000;">

      <!-- Títulos -->  
      <h5 class="fw-bold mb-0" style="color: black;">Bem Vindo!</h5>
      <h6 class="fw-bold mb-4" style="color: #ffffff;">Faça o seu Login:</h6>

      <!-- Campos Email e Senha -->
      <form action="login-script.php" method="post">
        <label for="email" class="fw-bold">E-mail</label>
        <input type="email" id="email" name="email" class="form-control mb-3" style="background-color: #ffffff; border: none;">

<label for="login_senha" class="fw-bold">Senha</label>
<div class="input-group mb-3">
  <input type="password" class="form-control" id="senha" name="senha"
         style="background-color: #ffffff; border: none;">
  <span class="input-group-text" style="cursor: pointer; background-color: #ffffff; border: none;">
    <i class="bi bi-eye" id="toggleLoginSenha"></i>
  </span>

</div>


        <button class="btn btn-dark w-100 rounded-pill fw-bold mb-2">ENTRAR</button>
        <small class="text-muted text-center">Esqueceu a senha?</small>
      </form>
    </div>
  </div>

  <!-- Imagens decorativas -->
  <img src="img/x5.png"
       style="position: absolute; top: 100px; width: 750px; height: 650px; margin-left: 770px;">
  <img src="img/bmw.png"
       style="position: absolute; top: 210px; width: 800px; height: 675px; margin-left: 1150px;">
</body>
</html>
