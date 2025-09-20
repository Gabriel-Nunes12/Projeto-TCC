<!-- Página que exibe conteúdos mais populares -->
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

      <a class="navbar-brand" href="planos.php">Planos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <!-- Início do formulário -->
<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        <div class="btn-group dropstart">
  <button  type="button" data-bs-toggle="dropdown" aria-expanded="false">
<img src="img/usuario.png" alt="" width="30px" height="35px">
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

        <!-- carros do painel 1 -->
         <!-- CIVIC -->
        <div class="bg-white rounded-4 p-2 text-center" style="width: 200px;">
          <img src="img/civic.png" alt="Civic" style="width: 180px; height: 100px;" />
          <h6 class="mt-2 mb-0">HONDA-CIVIC</h6>
          <p class="mb-0">2019</p>
          <p class="text-danger fw-bold">R$ 100.000</p>
          <p class="text-muted mb-0">Duartina SP</p>
        </div>

        <!-- TUCSON -->
        <div class="bg-white rounded-4 p-2 text-center" style="width: 200px;">
          <img src="img/tucson.png" alt="Tucson" style="width: 180px; height: 100px;" />
          <h6 class="mt-2 mb-0">TUCSON</h6>
          <p class="mb-0">2008</p>
          <p class="text-danger fw-bold">R$ 25.000</p>
          <p class="text-muted mb-0">Borebi SP</p>
        </div>

        <!-- HB20 -->
        <div class="bg-white rounded-4 p-2 text-center" style="width: 200px;">
          <img src="img/hb20.png" alt="HB20" style="width: 180px; height: 100px;" />
          <h6 class="mt-2 mb-0">HB20</h6>
          <p class="mb-0">&nbsp;</p>
          <p class="text-danger fw-bold">R$ 45.000</p>
          <p class="text-muted mb-0">Paulistania SP</p>
        </div>
      </div>
    </div>

  <!-- Painel 2 - FILTRO -->
<div style="height: 390px; border-radius: 30px; background-color: #2e2e2e; padding: 5px; color: white;">
  <h4 class="text-center mb-4">FILTROS</h4>

  <!-- Primeiro select-->
  <div class="mb-3">
    <label for="opcoes1" class="form-label">Opções de Escolha Automoveis:</label>
    <select id="opcoes1" class="form-select">
      <option value="todos">Todos</option>
      <option value="carros">Carros</option>
      <option value="motos">Motos</option>
      <option value="populares">Populares</option>
      <option value="populares">Luxo</option>
    </select>
  </div>

  <!-- Segundo select-->
  <div class="mb-3">
    <label for="opcoes2" class="form-label">Opções de Preços:</label>
    <select id="opcoes2" class="form-select">
      <option value="0-20000">Até R$ 20.000</option>
      <option value="20000-50000">R$ 20.000 - R$ 50.000</option>
      <option value="50000-100000">R$ 50.000 - R$ 100.000</option>
      <option value="100000+">Acima de R$ 100.000</option>
    </select>
  </div>

 <!-- Terceiro select-->
  <div class="mb-3">
    <label for="opcoes2" class="form-label">Opções de Marcas:</label>
    <select id="opcoes2" class="form-select">
      <option value="volkswagen">Todos</option>
      <option value="chevrolet">Chevrolet</option>
      <option value="fiat">Fiat</option>
      <option value="Honda">Honda</option>
      <option value="volkswagen">Volkswagen</option>
    </select>
  </div>

  <button class="btn btn-light w-100 mt-3 fw-bold">APLICAR FILTROS</button>
</div>


    <!-- Painel 3 -->
    <div style="height: 350px; border-radius: 30px; background-color: #5a595b; padding: 20px;">
      <h4 class="text-white mb-4 text-center">DESTAQUES NO MERCADO</h4>
      <div class="d-flex justify-content-between flex-wrap gap-3" style="margin-top: 50px;">

        <!-- carros do painel 3 -->
        <div class="bg-white rounded-4 p-2 text-center" style="width: 200px;">
          <img src="img/hilux.png" alt="Civic" style="width: 180px; height: 100px;" />
          <h6 class="mt-2 mb-0">HILUX</h6>
          <p class="mb-0">2019</p>
          <p class="text-danger fw-bold">R$ 150.000</p>
          <p class="text-muted mb-0">Bauru SP</p>
        </div>
        <div class="bg-white rounded-4 p-2 text-center" style="width: 200px;">
          <img src="img/saveiro.png" alt="Saveiro" style="width: 180px; height: 100px;" />
          <h6 class="mt-2 mb-0">SAVEIRO</h6>
          <p class="mb-0">2022</p>
          <p class="text-danger fw-bold">R$ 62.000</p>
          <p class="text-muted mb-0">Paulistania SP SP</p>
        </div>
        <div class="bg-white rounded-4 p-2 text-center" style="width: 200px;">
          <img src="img/gol.png" alt="Gol G6" style="width: 180px; height: 100px;" />
          <h6 class="mt-2 mb-0">GOL G6</h6>
          <p class="mb-0">2016</p>
          <p class="text-danger fw-bold">R$ 35.000</p>
          <p class="text-muted mb-0">Cabralia SP</p>
        </div>
      </div>
    </div>

    <!-- Painel 4 -->
    <div style="height: 350px; border-radius: 30px; background-color: #5a595b; padding: 20px;">
      <h4 class="text-white mb-4 text-center">DESTAQUES NO MERCADO</h4>
      <div class="d-flex justify-content-between flex-wrap gap-3" style="margin-top: 50px;">

        <!-- carros do painel 4 -->
        <div class="bg-white rounded-4 p-2 text-center" style="width: 200px;">
          <img src="img/spin.png" alt="Civic" style="width: 180px; height: 100px;" />
          <h6 class="mt-2 mb-0">SPIN</h6>
          <p class="mb-0">2013</p>
          <p class="text-danger fw-bold">R$ 36.000</p>
          <p class="text-muted mb-0">Duartina SP</p>
        </div>
        <div class="bg-white rounded-4 p-2 text-center" style="width: 200px;">
          <img src="img/uno.png" alt="Tucson" style="width: 180px; height: 100px;" />
          <h6 class="mt-2 mb-0">FIAT UNO</h6>
          <p class="mb-0">2010</p>
          <p class="text-danger fw-bold">R$ 25.000</p>
          <p class="text-muted mb-0">Espirito Santo SP</p>
        </div>
        <div class="bg-white rounded-4 p-2 text-center" style="width: 200px;">
          <img src="img/s10.png" alt="HB20" style="width: 180px; height: 100px;" />
          <h6 class="mt-2 mb-0">S10</h6>
          <p class="mb-0">2020</p>
          <p class="text-danger fw-bold">R$ 150.000</p>
          <p class="text-muted mb-0">Piratininga SP</p>
        </div>
      </div>
    </div>

  </main>
</div>

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
