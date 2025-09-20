<!-- Página de cadastro de novos usuários -->
<DOCTYPE html>
<html lang="pt-br">
<!-- Cabeçalho HTML -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  <script src="cidades.js"></script>
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

<!-- Formulário de Cadastro -->
  <!-- Container flex para barra lateral e o painel -->
  <div class="d-flex" style="height: calc(920px - 70px);">
    
    <!-- Barra lateral -->
    <nav class="bg-body-tertiary" style="width: 180px; padding-top: 20px;">
      <img src="img/coca.jpg" alt="" style="height: 340px ; width: 175px; margin-top: 200px;" />
    </nav>

   <!-- Painel Cadastro -->
  <div class="d-flex flex-column justify-content-start"
     style="height: 550px; width: 580px; margin-top: 120px; margin-left: 150px; border-radius: 30px; background-color: #cac9ca; padding: 30px; box-shadow: 10px 10px 0px #000;">

<!-- Início do formulário -->
<form action="cadastro-script.php" class="row g-3" id="form" method="POST">
    <div class="col-md-6">
        <label for="usuario" class="form-label">Nome de Usuario</label>
        <input type="text" class="form-control" id="usuario" name="usuario">
    </div>
    <div class="col-md-6">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" id="telefone"  class="form-control" name="telefone" placeholder="(00) 00000-0000" maxlength="15">
<script src="telefone.js"></script>
    </div>
    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="col-md-6">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha">
    </div>
    <div class="col-md-6">
        <label for="confirm_email" class="form-label">Confirme o seu Email</label>
        <input type="email" class="form-control" id="confirm_email" name="confirm_email">
    </div>
    <div class="col-md-6">
        <label for="confirm_senha" class="form-label">Confirme a sua senha</label>
        <input type="password" class="form-control" id="confirm_senha" name="confirm_senha">
    </div>
<!-- Tipo de Documento -->
<div class="col-md-6">
    <label for="tipoDocumento" class="form-label">Tipo de Documento</label>
    <select id="tipoDocumento" name="tipoDocumento" class="form-control">
        <option value="">Selecione</option>
        <option value="cpf">CPF</option>
        <option value="cnpj">CNPJ</option>
    </select>
</div>

<!-- Campo CPF -->
<div class="col-md-6" id="cpfCampo" style="display:none;">
    <label for="cpf" class="form-label">CPF</label>
    <input type="text" class="form-control" id="cpf" name="cpf">
</div>

<!-- Campo CNPJ -->
<div class="col-md-6" id="cnpjCampo" style="display:none;">
    <label for="cnpj" class="form-label">CNPJ</label>
    <input type="text" class="form-control" id="cnpj" name="cnpj">
</div>
<script src="documento.js"></script>

    <div class="col-md-6">
        <label for="cep" class="form-label">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep" placeholder="00000-000" maxlength="9">
        <script src="cep.js"></script>
    </div>
    <div class="col-md-6">
        <label for="municipio" class="form-label">Municipio</label>
        <select name="local" id="local" name="local" class="form-control mb-2">
        <option value=""></option>
</select>
<script src="cidades.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selectElement = document.getElementById('local');
        if (typeof cidadesSP !== 'undefined' && selectElement) {
            selectElement.innerHTML = '<option value="">Selecione uma cidade</option>';
            cidadesSP.sort().forEach(cidade => {
                const option = document.createElement('option');
                option.value = cidade;
                option.textContent = cidade;
                selectElement.appendChild(option);
            });
        } else {
            console.error('Erro: Não foi possível carregar as cidades.');
        }
    });
</script>
    </div>
    <div class="col-md-6">
        <label for="nome" class="form-label">Nome completo</label>  
        <input type="text" class="form-control" id="nome" name="nome">
    </div>
    <div class="col-12">
       <button class="btn btn-dark w-100 rounded-pill fw-bold mb-2">CADASTRAR</button>
    </div>   
</form>
<!-- Fim do formulário -->
  <img src="img/x5.png"
       style="position: absolute; top: 100px; width: 750px; height: 650px; margin-left: 470px;" />

       <img src="img/bmw.png"
       style="position: absolute; top: 210px; width: 800px; height: 675px; margin-left: 730px;" />
<script>
     document.getElementById("form").addEventListener("submit", function(event){
    var email = document.getElementById("email").value;
    var confirmEmail = document.getElementById("confirm_email").value;
    var senha = document.getElementById("senha").value;
    var confirmSenha = document.getElementById("confirm_senha").value;

    if(email !== confirmEmail) {
      alert("Os emails não são iguais.");
      event.preventDefault();
      return;
    }

    if(senha !== confirmSenha) {
      alert("As senhas não são iguais.");
      event.preventDefault();
      return;
    }
  });
</script>

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

    <!-- Scripts específicos da página Cadastro -->
    <script src="js/JavaScript/cadastro_js/cep.js"></script>
    <script src="js/JavaScript/cadastro_js/documento.js"></script>
    <script src="js/JavaScript/cadastro_js/telefone.js"></script>

</body>
</html>
