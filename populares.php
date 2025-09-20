<!DOCTYPE html>
<html lang="pt-br">
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


<!-- Container flex para barra lateral e os 4 painéis -->
<div class="d-flex" style="height: calc(950px - 70px);">

  <!-- Barra lateral -->
  <nav class="bg-body-tertiary" style="width: 180px; padding-top: 20px;">
    <img src="img/coca.jpg" alt="" style="height: 340px; width: 175px; margin-top: 200px;" />
  </nav>

  <!-- Área dos painéis - container grid com 2 colunas -->
  <main class="flex-grow-1 p-3" style="
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-top: 80px;
  ">

    <!-- Painel 1 -->
    <div style="height: 350px; border-radius: 30px; background-color: #5a595b; padding: 20px;">
      <h4 class="text-white mb-4 text-center">DESTAQUES NO MERCADO</h4>
      <div class="d-flex justify-content-between flex-wrap gap-3" style="margin-top: 50px;">
        <!-- conteúdo do painel 1 -->
      </div>
    </div>

<form action="filtros.php" method="GET">    <!-- Painel 2 - FILTRO -->
<div style="height: 390px; border-radius: 30px; background-color: #2e2e2e; padding: 5px; color: white;">
  <h4 class="text-center mb-4">FILTROS</h4>

  <!-- Primeiro select-->
  
  <div class="mb-3">
    <label>Escolha a marca</label>
    <select id="marca" name="marca" class="form-control mb-2">
        <option value="">Selecione uma Marca</option>
    </select>
    <script src="JavaScript/anuciar js/carros.js"></script>
  </div>

  <!-- Segundo select-->
  <div class="mb-3">
    <label>Escolha o modelo</label>
        <select id="modelo" name="modelo" class="form-control mb-2">
        <option value="">Selecione um Modelo</option>
    </select>
  </div>

 <!-- Terceiro select-->
<div class="mb-3">
    <label for="opcoes2" class="form-label">Opções de Preços:</label>
    <select id="opcoes2" class="form-select" name="preco">
      <option value="0-20000">Até R$ 20.000</option>
      <option value="20000-50000">R$ 20.000 - R$ 50.000</option>
      <option value="50000-100000">R$ 50.000 - R$ 100.000</option>
      <option value="100000+">Acima de R$ 100.000</option>
    </select>
  </div>
  <button type="submit" class="btn btn-light w-100 mt-3 fw-bold">APLICAR FILTROS</button>
</div>
</form>
    <!-- Painel 3 --> 
    <div style="height: 350px; border-radius: 30px; background-color: #5a595b; padding: 20px;">
      <h4 class="text-white mb-4 text-center">DESTAQUES NO MERCADO</h4>
      <div class="d-flex justify-content-between flex-wrap gap-3" style="margin-top: 50px;">
        <!-- conteúdo do painel 3 -->
      </div>
    </div>

    <!-- Painel 4 -->
    <div style="height: 350px; border-radius: 30px; background-color: #5a595b; padding: 20px;">
      <h4 class="text-white mb-4 text-center">DESTAQUES NO MERCADO</h4>
      <div class="d-flex justify-content-between flex-wrap gap-3" style="margin-top: 50px;">
        <!-- conteúdo do painel 4 -->
      </div>
    </div>

  </main>
</div>

  
</body>
</html>
