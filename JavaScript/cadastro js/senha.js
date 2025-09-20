// Espera o carregamento completo do DOM antes de executar o script
document.addEventListener("DOMContentLoaded", () => {

  // Função para alternar a visibilidade da senha ao clicar no ícone
  function togglePassword(inputId, iconId) {
    
    // Pega o elemento input (campo de senha) pelo ID
    const input = document.getElementById(inputId);
    // Pega o elemento do ícone pelo ID
    const icon = document.getElementById(iconId);

    // Verifica se os elementos existem para evitar erros
    if (input && icon) {

      // Adiciona um evento de clique no ícone
      icon.addEventListener("click", () => {

        // Checa se o tipo do input é "password"
        const isPassword = input.type === "password";
        
        // Alterna o tipo do input: se for password, muda para text; se for text, muda para password
        input.type = isPassword ? "text" : "password";

        // Alterna as classes do ícone para mudar a aparência (olho aberto / olho cortado)
        icon.classList.toggle("bi-eye");       // remove/adiciona classe olho aberto
        icon.classList.toggle("bi-eye-slash"); // remove/adiciona classe olho cortado
      });
    }
  }

  // Chamadas da função togglePassword para cada campo de senha do cadastro
  togglePassword("senha", "toggleSenha");               // Campo de senha principal
  togglePassword("confirm_senha", "toggleConfirmSenha"); // Campo de confirmação de senha

  // Chamadas da função togglePassword para o campo de senha do login
  togglePassword("login_senha", "toggleLoginSenha");     // Campo de senha do login
});
