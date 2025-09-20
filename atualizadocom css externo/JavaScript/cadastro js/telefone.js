document.addEventListener('DOMContentLoaded', function () {
    const telefoneInput = document.getElementById('telefone');

    telefoneInput.addEventListener('input', function () {
        let valor = telefoneInput.value.replace(/\D/g, ''); // Remove tudo que não é número

        if (valor.length > 11) {
            valor = valor.slice(0, 11); // Limita a 11 dígitos
        }

        if (valor.length > 10) {
            // Formato para celular: (99) 99999-9999
            valor = valor.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
        } else if (valor.length > 6) {
            // Formato intermediário: (99) 9999-9999
            valor = valor.replace(/(\d{2})(\d{4})(\d{0,4})/, '($1) $2-$3');
        } else if (valor.length > 2) {
            valor = valor.replace(/(\d{2})(\d{0,5})/, '($1) $2');
        } else {
            valor = valor.replace(/(\d*)/, '($1');
        }

        telefoneInput.value = valor;
    });
});
