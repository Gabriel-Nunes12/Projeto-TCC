<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto TCC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="JavaScript/anuciar js/carros.js"></script>
        <script src="JavaScript/anuciar js/botao.js"></script>
    <script src="JavaScript/anuciar js/cidades.js"></script>
<script src="JavaScript/anuciar js/carregarCidades.js"></script>
  </head>
<body>

  <!-- Navbar -->
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
    
    
<?php
session_start();
include("conexao.php");

// Aqui você pode verificar se o usuário está logado
if(!isset($_SESSION['usuario_id'])){
    header("Location: login.php");
    exit();
}

$usuario_id = $_SESSION['usuario_id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Projeto TCC - Anunciar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<script src="JavaScript/anuciar js/carros.js"></script>
<script src="JavaScript/anuciar js/botao.js"></script>
<script src="JavaScript/anuciar js/cidades.js"></script>
<script src="JavaScript/anuciar js/carregarCidades.js"></script>
</head>
<body>

<!-- Navbar simplificada -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Início</a>
    <a class="navbar-brand" href="populares.php">Populares</a>
    <a class="navbar-brand" href="anunciar.php">Anunciar</a>
    <a class="navbar-brand" href="suporte.php">Suporte</a>
    <a class="navbar-brand" href="meu_perfil.php">Meu Perfil</a>
    <a class="navbar-brand" href="logout.php">Sair</a>
  </div>
</nav>

<div class="d-flex" style="height: calc(100vh - 70px);">

  <!-- Barra lateral -->
  <nav class="bg-body-tertiary" style="width: 180px; padding-top: 20px;">
    <img src="img/coca.jpg" alt="" style="height: 340px; width: 175px; margin-top: 200px;" />
  </nav>

  <!-- Coluna principal -->
  <div style="flex-grow:1; padding:20px; display:flex; flex-direction:column;">

    <!-- MEU PERFIL -->
    <div class="mb-3 d-flex flex-column align-items-start" style="gap:10px;">
      <button class="btn d-flex align-items-center rounded-pill px-3" style="background:#6e6e6e; color:#fff; border:none; font-weight:700;">
        MEU PERFIL
      </button>
      <button class="btn rounded-pill px-3" style="background:#000; color:#fff; border:none; font-weight:700;">
        Editar publicações
      </button>
    </div>

    <!-- Painel principal -->
    <main class="flex-grow-1" style="display:grid; grid-template-columns:2fr 1fr; gap:30px;">

      <!-- MINHAS PUBLICAÇÕES -->
      <div style="height:auto; border-radius:30px; background-color:#5a595b; padding:20px;">
        <h4 style="color:#fff; font-weight:bold;">MINHAS PUBLICAÇÕES</h4>
        <div id="lista-veiculos" class="d-flex justify-content-between flex-wrap gap-3" style="margin-top:30px;">
          <!-- Cards serão inseridos aqui via JS -->
        </div>
      </div>

      <!-- PAINEL DE ANÚNCIO -->
      <div style="display:flex; flex-direction:column; gap:20px;">
        <div style="height:550px; border-radius:30px; background-color:#5a595b; padding:20px; display:flex; flex-direction:column; align-items:center; justify-content:center; box-shadow:10px 10px 0px #000;">
          <form id="form-publicacao" enctype="multipart/form-data" style="display:flex;flex-direction:column;align-items:center;gap:10px;">
            <label for="file-upload" class="custom-file-upload">
              <img id="preview" src="img/upd.jpg" alt="Pré-visualização" style="width:200px;height:200px;object-fit:cover;cursor:pointer;">
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
              <option value="1">Sim</option>
              <option value="0">Não</option>
            </select>

            <select id="trava_eletrica" name="trava_eletrica" class="form-control mb-2" required>
              <option value="">Trava elétrica?</option>
              <option value="1">Sim</option>
              <option value="0">Não</option>
            </select>

            <input type="text" id="km" name="km" placeholder="km rodados" class="form-control mb-2">
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
            <select name="local" id="local" class="form-control mb-2">
              <option value="">Selecione o local</option>
            </select>

            <button type="button" onclick="adicionarPublicacao()" style="background-color:#333;color:#fff;border:none;padding:10px 20px;font-weight:bold;border-radius:10px;width:100%;">
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
    if(file){
        document.getElementById('preview').src = URL.createObjectURL(file);
    }
});

// Função para enviar e atualizar a lista de veículos
function adicionarPublicacao() {
    const form = document.getElementById('form-publicacao');
    const formData = new FormData(form);
    fetch('processa_veiculo.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if(data.sucesso){
            listarVeiculos();
            form.reset();
            document.getElementById('preview').src = 'img/upd.jpg';
        } else {
            alert(data.mensagem || 'Erro ao publicar veículo.');
        }
    })
    .catch(err => console.error(err));
}

// Função para listar veículos do banco
function listarVeiculos() {
    fetch('listar_veiculos.php')
    .then(res => res.json())
    .then(veiculos => {
        const lista = document.getElementById('lista-veiculos');
        lista.innerHTML = '';
        veiculos.forEach(v => {
            const card = document.createElement('div');
            card.classList.add('bg-white','rounded-4','p-2','text-center','shadow');
            card.style.width = '200px';
            card.innerHTML = `
                <img src="${v.imagem_veiculo}" style="width:180px;height:100px;object-fit:cover;" />
                <h6 class="mt-2 mb-0">${v.marca} - ${v.modelo}</h6>
                <p class="mb-0">${v.ano}</p>
                <p class="text-danger fw-bold">R$ ${parseFloat(v.preco).toLocaleString('pt-BR')}</p>
                <p class="text-muted mb-0">${v.local}</p>
            `;
            lista.appendChild(card);
        });
    });
}

// Carrega os veículos ao abrir a página
window.addEventListener('DOMContentLoaded', listarVeiculos);
</script>

</body>
</html>
