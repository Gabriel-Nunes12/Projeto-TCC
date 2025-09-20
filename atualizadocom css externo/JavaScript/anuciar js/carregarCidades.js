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