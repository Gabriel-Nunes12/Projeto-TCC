
  document.addEventListener('DOMContentLoaded', () => {
    const checkbox = document.getElementById('mostrarSenha');
    const checkbox2 = document.getElementById('mostrar_conf_Senha');
    const senhaInput = document.getElementById('senha');
    const confirm_senhaInput = document.getElementById('confirm_senha');

    checkbox.addEventListener('change', () => {
      senhaInput.type = checkbox.checked ? 'text' : 'password';
    });
        checkbox2.addEventListener('change', () => {
      confirm_senhaInput.type = checkbox.checked ? 'text' : 'password';
    });
  });
