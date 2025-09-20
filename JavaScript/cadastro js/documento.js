document.addEventListener('DOMContentLoaded', function () {
    const tipoDocumento = document.getElementById('tipoDocumento');
    const cpfCampo = document.getElementById('cpfCampo');
    const cnpjCampo = document.getElementById('cnpjCampo');
    const cpfInput = document.getElementById('cpf');
    const cnpjInput = document.getElementById('cnpj');

    tipoDocumento.addEventListener('change', function () {
        if (this.value === 'cpf') {
            cpfCampo.style.display = 'block';
            cnpjCampo.style.display = 'none';
            cpfInput.value = '';
        } else if (this.value === 'cnpj') {
            cpfCampo.style.display = 'none';
            cnpjCampo.style.display = 'block';
            cnpjInput.value = '';
        } else {
            cpfCampo.style.display = 'none';
            cnpjCampo.style.display = 'none';
        }
    });

    // Máscara dinâmica para CPF e CNPJ
    function mascarar(valor, tipo) {
        valor = valor.replace(/\D/g, ''); // Mantém apenas números

        if (tipo === 'cpf') {
            valor = valor.slice(0, 11); // Limita a 11 dígitos
            return valor
                .replace(/(\d{3})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d{1,2})$/, '$1-$2');
        } else if (tipo === 'cnpj') {
            valor = valor.slice(0, 14); // Limita a 14 dígitos
            return valor
                .replace(/(\d{2})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d)/, '$1/$2')
                .replace(/(\d{4})(\d{1,2})$/, '$1-$2');
        }

        return valor;
    }

    cpfInput.addEventListener('input', function () {
        this.value = mascarar(this.value, 'cpf');
    });

    cnpjInput.addEventListener('input', function () {
        this.value = mascarar(this.value, 'cnpj');
    });
});
