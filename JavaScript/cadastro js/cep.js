document.addEventListener('DOMContentLoaded', function () {
    const cepInput = document.getElementById('cep');

    cepInput.addEventListener('input', function () {
        let valor = cepInput.value.replace(/\D/g, ''); // Remove tudo que não é número

        if (valor.length > 8) {
            valor = valor.slice(0, 8); // Limita a 8 dígitos
        }

        if (valor.length > 5) {
            valor = valor.replace(/(\d{5})(\d{0,3})/, '$1-$2');
        }

        cepInput.value = valor;
    });
});
