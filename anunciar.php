<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto TCC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="JavaScript/anuciar js/carros.js"></script>
    <script src="JavaScript/anuciar js/cidades.js"></script>
<script src="JavaScript/anuciar js/carregarCidades.js"></script>
  </head>
<body>
    
  <!-- Cabecario -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <img src="img/logo.png" alt="" style="height: 70px;">
        <img src="img/casa.png" alt="" style="height: 40px; margin-left: 60%;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Inicio</a>
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
    </div>
  </div>
</nav>

<!-- Container flex para barra lateral, perfil e os 4 painéis -->
<div class="d-flex" style="height: calc (950px - 70px);">

  <!-- Barra lateral -->
  <nav class="bg-body-tertiary" style="width: 180px; padding-top: 20px;">
    <img src="img/coca.jpg" alt="" style="height: 340px; width: 175px; margin-top: 200px;" />
  </nav>

  <!-- Coluna esquerda com perfil e painéis -->
  <div style="flex-grow: 1; display: flex; flex-direction: column; padding: 20px;">

    <!-- MEU PERFIL -->
    <div class="mb-3 d-flex flex-column align-items-start" style="gap:10px; width: fit-content;">
      <button class="btn d-flex align-items-center rounded-pill px-3" style="background:#6e6e6e; color:#ffffff; border:none; font-weight:700;">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#000" viewBox="0 0 16 16" class="me-2" aria-hidden="true" style="background:#ffffff; border-radius:50%; padding:2px;">
          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3z"/>
          <path fill-rule="evenodd" d="M8 8a3 3 0 100-6 3 3 0 000 6z"/>
        </svg>
        MEU PERFIL
      </button>

      <button class="btn rounded-pill px-3" style="background:#000; color:#fff; border:none; font-weight:700;">
        Editar publicações
      </button>
    </div>

    <!-- Área dos painéis -->
    <main class="flex-grow-1" style="
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 30px;
    ">

      <!-- Painel da Minhas Publicações -->
      <div style="height: auto; border-radius: 30px; background-color: #5a595b; padding: 20px;">
        <h4 class="mb-0" style="color: rgb(255, 255, 255); font-weight: bold;">MINHAS PUBLICAÇÕES</h4>

        <!-- Lista de veículos -->
        <div class="d-flex justify-content-between flex-wrap gap-3" style="margin-top: 30px;">

          


        </div>
      </div>

      <!-- Parte da direita -->
      <div style="display: flex; flex-direction: column; gap: 20px;">

        <!-- Painel Upload -->
        <div style="height: 550px; border-radius: 30px; background-color: #5a595b; padding: 20px; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 10px 10px 0px #000;">
          <div style="width: 200px; height: 100px; border-radius: 50px; background-color: #5a595b; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
               
            <!-- Formulário para envio de imagem e descrições -->
<form action="processa_veiculo.php" method="POST" enctype="multipart/form-data" style="display:flex;flex-direction:column;align-items:center;gap:10px;">
    <label for="file-upload" class="custom-file-upload">
        <img id="preview" src="img/upd.jpg" alt="Pré-visualização" style="width: 200px; height: 200px; object-fit: cover; cursor: pointer;">
    </label>
    <input id="file-upload" type="file" name="image" accept="image/*" hidden>

    <select id="marca" name="marca" class="form-control mb-2">
        <option value="">Selecione uma Marca</option>
    </select>

    <select id="modelo" name="modelo" class="form-control mb-2">
        <option value="">Selecione um Modelo</option>
    </select>

    <input type="number" id="ano" name="ano" placeholder="Ano" class="form-control mb-2">

    <select id="cambio" name="cambio" class="form-control mb-2" required>
      <option value="">Selecione o câmbio</option>
      <option value="Manual">Manual</option>
      <option value="Automático">Automático</option>
    </select>

    <select id="direcao_hidraulica" name="direcao_hidraulica" class="form-control mb-2" required>
      <option value="">Direção hidráulica?</option>
      <option value="Sim">Sim</option>
      <option value="Não">Não</option>
    </select>

    <select id="trava_eletrica" name="trava_eletrica" class="form-control mb-2" required>
      <option value="">Trava elétrica?</option>
      <option value="Sim">Sim</option>
      <option value="Não">Não</option>
    </select>

    <input type="text" id="km" name="km" placeholder="km rodados" class="form-control mb-2">
    <script src="JavaScript/anuciar js/km.js"></script>

    <select id="combustivel" name="combustivel" class="form-control mb-2" required>
      <option value="">Selecione o combustível</option>
      <option value="Gasolina">Gasolina</option>
      <option value="Etanol">Etanol</option>
      <option value="Diesel">Diesel</option>
      <option value="Flex">Flex</option>
      <option value="Elétrico">Elétrico</option>
      <option value="Híbrido">Híbrido</option>
    </select>

    <input type="text" id="preco" name="preco" placeholder="Preço (R$)" class="form-control mb-2">
    <script src="JavaScript/anuciar js/preco.js"></script>

    <select name="local" id="local" class="form-control mb-2">
      <option value="">Selecione o local</option>
    </select>

    <button type="submit" style="background-color: #333; color: white; border: none; padding: 10px 20px; font-weight: bold; border-radius: 10px; cursor: pointer; width: 100%;">
        PUBLICAR VEÍCULO
    </button>
</form>


        </div>
        </div>

    </main>
  </div>
</div>
<script>
document.getElementById('file-upload').addEventListener('change', function(event) {
    const [file] = event.target.files;
    if (file) {
        const preview = document.getElementById('preview');
        preview.src = URL.createObjectURL(file);
    }
});
</script>
</body>
</html>