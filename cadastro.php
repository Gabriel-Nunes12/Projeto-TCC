<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


  <!-- Scripts locais -->
  <script src="JavaScript/anuciar js/cidades.js"></script>
  <script src="JavaScript/cadastro js/cep.js"></script>
  <script src="JavaScript/cadastro js/documento.js"></script>
  <script src="JavaScript/cadastro js/telefone.js"></script>
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
    <a class="navbar-brand" href="login.php">Login</a>

  </div>
</nav>

  <!-- Container flex para barra lateral e o painel -->
  <div class="d-flex" style="height: calc(920px - 70px);">
    
    <!-- Barra lateral -->
    <nav class="bg-body-tertiary" style="width: 180px; padding-top: 20px;">
      <img src="img/coca.jpg" alt="Propaganda" style="height: 340px; width: 175px; margin-top: 200px;">
    </nav>

    <!-- Painel Cadastro -->
    <div class="d-flex flex-column justify-content-start"
         style="height: 600px; width: 580px; margin-top: 120px; margin-left: 150px;
                border-radius: 30px; background-color: #cac9ca; padding: 30px;
                box-shadow: 10px 10px 0px #000;">      <form action="cadastro-script.php" class="row g-3" id="form" method="POST">
        
        <div class="col-md-6">
          <label for="usuario" class="form-label">Nome de Usuário</label>
          <input type="text" class="form-control" id="usuario" name="usuario">
        </div>

        <div class="col-md-6">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(00) 00000-0000">
        </div>

        <div class="col-md-6">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        
<div class="col-md-6">
  <label for="senha" class="form-label">Senha</label>
  <div class="input-group">
    <input type="password" class="form-control" id="senha" name="senha"
           style="background-color: #ffffff; border: none;">
  <span class="input-group-text" style="cursor: pointer; background-color: #ffffff; border: none;">
    <i class="bi bi-eye" id="toggleSenha"></i>
    </span>
  </div>
</div>

        <div class="col-md-6">
          <label for="confirm_email" class="form-label">Confirme o seu Email</label>
          <input type="email" class="form-control" id="confirm_email" name="confirm_email">
        </div>

<div class="col-md-6">
  <label for="confirm_senha" class="form-label">Confirme a sua senha</label>
  <div class="input-group">
    <input type="password" class="form-control" id="confirm_senha" name="confirm_senha"
           style="background-color: #ffffff; border: none;">
    <span class="input-group-text"  style="cursor: pointer; background-color: #ffffff; border: none;">
      <i class="bi bi-eye" id="toggleConfirmSenha"></i>
    </span>
  </div>
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
          <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
        </div>

        <!-- Campo CNPJ -->
        <div class="col-md-6" id="cnpjCampo" style="display:none;">
          <label for="cnpj" class="form-label">CNPJ</label>
          <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="00.000.000/0000-00">
        </div>

        <div class="col-md-6">
          <label for="cep" class="form-label">CEP</label>
          <input type="text" class="form-control" id="cep" name="cep" placeholder="00000-000">
        </div>

        <div class="col-md-6">
          <label for="municipio" class="form-label">Município</label>
          <select name="local" id="local" class="form-control mb-2">
            <option value=""></option>
          </select>
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

      <!-- Imagens decorativas -->
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
    </div>
  </div>
</body>
</html>
