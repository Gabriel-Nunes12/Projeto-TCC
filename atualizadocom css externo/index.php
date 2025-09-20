<!-- Página inicial -->

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
      <a class="navbar-brand" href="index.php">Inicio</a>
      <a class="navbar-brand" href="populares.php">Populares</a>
      <a class="navbar-brand" href="suporte.php">Suporte</a>
      <a class="navbar-brand" href="login.php">Login</a>
      <a class="navbar-brand" href="cadastro.php">Cadastro</a>
    </div>
  </nav>

  <!-- Container flex para barra lateral e o painel -->
  <main>
    <div class="d-flex" style="height: calc(950px - 70px);">
      
      <!-- Barra lateral -->
      <nav class="bg-body-tertiary" style="width: 180px; padding-top: 20px;">
        <img src="img/coca.jpg" alt="" style="height: 340px ; width: 175px; margin-top: 200px;" />
      </nav>

      <!-- Painel 1 -->
      <div class="flex-grow-1 d-flex justify-content-center align-items-start p-3 position-relative">
        <div
          style="
            margin-top: 130px;
            width: 750px;
            height: 430px;
            border-radius: 30px;
            background-color: #5a595b;
            padding: 20px;
          "
        >
          <h4 class="text-white mb-4 text-center">DESTAQUES NO MERCADO</h4>

          <!-- Linha dos carros -->
          <div class="d-flex justify-content-between flex-wrap gap-3" style="margin-top: 50px;">

            <!-- Carro 1 -->
            <div class="bg-white rounded-4 p-2 text-center" style="width: 200px;">
              <img src="img/civic.png" alt="Civic" style="width: 180px; height: 100px;" />
              <h6 class="mt-2 mb-0">HONDA-CIVIC</h6>
              <p class="mb-0">2019</p>
              <p class="text-danger fw-bold">R$ 100.000</p>
              <p class="text-muted mb-0">Duartina SP</p>
            </div>

            <!-- Carro 2 -->
            <div class="bg-white rounded-4 p-2 text-center" style="width: 200px;">
              <img src="img/tucson.png" alt="Tucson" style="width: 180px; height: 100px;" />
              <h6 class="mt-2 mb-0">TUCSON</h6>
              <p class="mb-0">2008</p>
              <p class="text-danger fw-bold">R$ 25.000</p>
              <p class="text-muted mb-0">Borebi SP</p>
            </div>

            <!-- Carro 3 -->
            <div class="bg-white rounded-4 p-2 text-center" style="width: 200px;">
              <img src="img/hb20.png" alt="HB20" style="width: 180px; height: 100px;" />
              <h6 class="mt-2 mb-0">HB20</h6>
              <p class="mb-0">&nbsp;</p>
              <p class="text-danger fw-bold">R$ 45.000</p>
              <p class="text-muted mb-0">Paulistania SP</p>
            </div>
          </div>
        </div>

        <!-- Imagem carro da tela inicial -->
        <img src="img/inicio.png"
             style="position: absolute; top: 100px; width: 600px; height: 580px; margin-left: 1124px;" />
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

<!-- Fim do corpo da página -->
</body>
</html>
