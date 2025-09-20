const input = document.getElementById('preco');

input.addEventListener('input', () => {
    // Remove tudo que não for número
    let valor = input.value.replace(/\D/g, '');
    
    // Adiciona ponto como separador de milhar, funciona para qualquer quantidade de dígitos
    valor = valor.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    
    // Atualiza o input
    input.value = valor;
});