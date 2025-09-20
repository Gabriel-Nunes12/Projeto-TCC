
// Array com as marcas de carro mais conhecidas
const marcasCarros = [
    "Audi", "BMW", "Chevrolet", "Citroën", "Fiat", "Ford", "Honda",
    "Hyundai", "Jeep", "Mercedes-Benz", "Mitsubishi",
    "Nissan", "Peugeot", "Renault", "Toyota",
    "Volkswagen", "Volvo"
];

// Função para criar o select de marcas de carro
function criarSelectMarcas() {
    // Ordenar as marcas alfabeticamente
    marcasCarros.sort();

    // Criar o elemento select
    const selectElement = document.createElement('select');
    selectElement.id = 'marca';
    selectElement.name = 'marca';
    selectElement.className = 'form-select';

    // Adicionar a opção padrão
    const defaultOption = document.createElement('option');
    defaultOption.value = '';
    defaultOption.textContent = 'Selecione uma marca';
    selectElement.appendChild(defaultOption);

    // Adicionar todas as marcas como opções
    marcasCarros.forEach(marca => {
        const option = document.createElement('option');
        option.value = marca;
        option.textContent = marca;
        selectElement.appendChild(option);
    });

    return selectElement;
}

// Função para inicializar o select de marcas
function inicializarSelectMarcas(containerId) {
    const container = document.getElementById(containerId);
    if (container) {
        const selectMarcas = criarSelectMarcas();
        container.appendChild(selectMarcas);
    }
}
