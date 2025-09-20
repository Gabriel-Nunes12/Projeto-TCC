<!-- Página para anúncios -->
<!DOCTYPE html>
<html lang="pt-br">
<!-- Cabeçalho HTML -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto TCC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="carros.js"></script>
    <script src="cidades.js"></script>
<script src="carregarCidades.js"></script>
  </head>
<!-- Início do corpo da página -->
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

          <div class="bg-white rounded-4 p-2 text-center shadow" style="width: 200px;">
            <img src="img/civic.png" style="width: 180px; height: 100px;" />
            <h6 class="mt-2 mb-0">HONDA-CIVIC</h6>
            <p class="mb-0">2019</p>
            <p class="text-danger fw-bold">R$ 100.000</p>
            <p class="text-muted mb-0">Duartina SP</p>
          </div>

          <div class="bg-white rounded-4 p-2 text-center shadow" style="width: 200px;">
            <img src="img/tucson.png" style="width: 180px; height: 100px;" />
            <h6 class="mt-2 mb-0">TUCSON</h6>
            <p class="mb-0">2008</p>
            <p class="text-danger fw-bold">R$ 25.000</p>
            <p class="text-muted mb-0">Borebi SP</p>
          </div>

          <div class="bg-white rounded-4 p-2 text-center shadow" style="width: 200px;">
            <img src="img/hb20.png" style="width: 180px; height: 100px;" />
            <h6 class="mt-2 mb-0">HB20</h6>
            <p class="mb-0">&nbsp;</p>
            <p class="text-danger fw-bold">R$ 45.000</p>
            <p class="text-muted mb-0">Paulistania SP</p>
          </div>

          <div class="bg-white rounded-4 p-2 text-center shadow" style="width: 200px;">
            <img src="img/hilux.png" style="width: 180px; height: 100px;" />
            <h6 class="mt-2 mb-0">HILUX</h6>
            <p class="mb-0">2019</p>
            <p class="text-danger fw-bold">R$ 150.000</p>
            <p class="text-muted mb-0">Bauru SP</p>
          </div>

          <div class="bg-white rounded-4 p-2 text-center shadow" style="width: 200px;">
            <img src="img/saveiro.png" style="width: 180px; height: 100px;" />
            <h6 class="mt-2 mb-0">SAVEIRO</h6>
            <p class="mb-0">2022</p>
            <p class="text-danger fw-bold">R$ 62.000</p>
            <p class="text-muted mb-0">Paulistania SP</p>
          </div>

          <div class="bg-white rounded-4 p-2 text-center shadow" style="width: 200px;">
            <img src="img/gol.png" style="width: 180px; height: 100px;" />
            <h6 class="mt-2 mb-0">GOL G6</h6>
            <p class="mb-0">2016</p>
            <p class="text-danger fw-bold">R$ 35.000</p>
            <p class="text-muted mb-0">Cabralia SP</p>
          </div>

        </div>
      </div>

      <!-- Parte da direita -->
      <div style="display: flex; flex-direction: column; gap: 20px;">

        <!-- Painel Upload -->
        <div style="height: 550px; border-radius: 30px; background-color: #5a595b; padding: 20px; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 10px 10px 0px #000;">
          <div style="width: 200px; height: 100px; border-radius: 50px; background-color: #5a595b; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
               
            <!-- Formulário para envio de imagem e descrições -->
<!-- Início do formulário -->
<form style="display:flex;flex-direction:column;align-items:center;gap:10px;">
    <!-- Botão personalizado para selecionar a imagem -->
    <label for="file-upload" class="custom-file-upload">
        <img id="preview" src="img/upd.jpg" alt="Pré-visualização" 
             style="width: 200px; height: 200px; object-fit: cover; cursor: pointer;">
    </label>

    <!-- Input de imagem escondido -->
    <input id="file-upload" type="file" name="image" accept="image/*" hidden>
          
    <select id="marca" class="form-control mb-2">
    <option value="">Selecione uma Marca</option>
</select>
    <select id="modelo" class="form-control mb-2">
    <option value="">Selecione um Modelo</option>
    </select>
    <input type="number" id="ano" placeholder="Ano" class="form-control mb-2">
    <input type="text" id="preco" placeholder="Preço (R$)" class="form-control mb-2">
    <script src="preco.js"></script>
    <select name="local" id="local" class="form-control mb-2">
    <option value=""></option>
   </select>


    <button type="button" onclick="adicionarPublicacao()" 
        style="background-color: #333; color: white; border: none; padding: 10px 20px; 
               font-weight: bold; border-radius: 10px; cursor: pointer; width: 100%;">
        PUBLICAR VEÍCULO
        <script src="botao.js"></script>
      </button>
</form>
<!-- Fim do formulário -->


        </div>
        </div>
        <!-- Painel Feedback -->
        <div style="border-radius: 30px; padding: 20px; background: transparent;">
          <div style="text-align: left; margin-bottom: 8px;">
            <span style="display:inline-block; background:#000; color:white; padding:6px 24px; border-radius:20px; font-weight:bold;">Feedback</span>
          </div>
          <div style="background-color: #3a3a3a; border-radius: 8px; padding: 12px; box-shadow: 8px 8px 0 #000;">
            <div style="display:flex; align-items:center; justify-content:space-between; padding:10px 6px; border-bottom: 1px solid rgba(255,255,255,0.06);">
              <div style="display:flex; gap:8px; align-items:center;">
                <span style="display:inline-block; width:22px; height:22px; border-radius:50%; background:#111;"></span>
                <strong style="color:#ffffff;">Vendedor muito confiável!</strong>
              </div>
              
              <span style="color:#ffffff;">★</span>
            </div>
            
            <div style="display:flex; align-items:center; justify-content:space-between; padding:10px 6px; border-bottom: 1px solid rgba(240, 237, 237, 0.06);">
              <div style="display:flex; gap:8px; align-items:center;">
                <span style="display:inline-block; width:22px; height:22px; border-radius:50px; background:#111;"></span>
                <strong style="color:#ffffff;">veiculo em bom estado!</strong>
              </div>
              <span style="color:#ffffff;">★</span>
            </div>
            <div style="display:flex; align-items:center; justify-content:space-between; padding:10px 6px;">
              <div style="display:flex; gap:8px; align-items:center;">
                <span style="display:inline-block; width:22px; height:22px; border-radius:50%; background:#111;"></span>
                <strong style="color:#ffffff;">Adorei!!</strong>
              </div>
              <span style="color:#ffffff;">★</span>
            </div>
          </div>
        </div>

      </div>
    </main>
  </div>
</div>

<!-- Fim do corpo da página -->

    <!-- Scripts específicos da página Anunciar -->
    <script src="js/JavaScript/anuciar_js/botao.js"></script>
    <script src="js/JavaScript/anuciar_js/carregarCidades.js"></script>
    <script src="js/JavaScript/anuciar_js/carros.js"></script>
    <script src="js/JavaScript/anuciar_js/cidades.js"></script>
    <script src="js/JavaScript/anuciar_js/marcas.js"></script>
    <script src="js/JavaScript/anuciar_js/preco.js"></script>

</body>
</html>
