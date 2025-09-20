document.addEventListener('DOMContentLoaded', function() {
    const input = document.getElementById('preco');

    if (!input) return; // garante que o input exista

    input.addEventListener('input', function() {
        let valor = input.value;

        // Remove tudo que não for número
        valor = valor.replace(/\D/g, '');

        // Adiciona ponto como separador de milhar
        valor = valor.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

        input.value = valor;
    });
});
