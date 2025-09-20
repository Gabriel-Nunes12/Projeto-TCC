// Preview da imagem
document.getElementById('file-upload').addEventListener('change', function(event) {
    const [file] = event.target.files;
    if (file) {
        document.getElementById('preview').src = URL.createObjectURL(file);
    }
});

// Enviar formulário via AJAX
document.getElementById('form-publicacao').addEventListener('submit', function(e){
    e.preventDefault(); // impede reload

    const form = e.target;
    const formData = new FormData(form);

    fetch('processa_veiculo.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if(data.success){
            // Criar card dinamicamente
            const container = document.getElementById('minhas-publicacoes');
            const card = document.createElement('div');
            card.className = "bg-white rounded-4 p-2 text-center shadow";
            card.style.width = "200px";
            card.innerHTML = `
                <img src="${data.imagem}" style="width:180px;height:100px;object-fit:cover;">
                <h6 class="mt-2 mb-0">${data.marca} - ${data.modelo}</h6>
                <p class="mb-0">${data.ano}</p>
                <p class="text-danger fw-bold">R$ ${Number(data.preco).toLocaleString("pt-BR")}</p>
                <p class="text-muted mb-0">${data.local}</p>
                <p class="mb-0">Direção: ${data.direcao_hidraulica} | Trava: ${data.trava_eletrica} | Câmbio: ${data.cambio}</p>
                <p class="mb-0">KM: ${data.km}</p>
            `;
            container.prepend(card);

            // Limpar formulário
            form.reset();
            document.getElementById('preview').src = "img/upd.jpg";
        } else {
            alert("Erro: " + data.message);
        }
    })
    .catch(err => {
        console.error(err);
        alert("Erro na conexão com o servidor.");
    });
});
