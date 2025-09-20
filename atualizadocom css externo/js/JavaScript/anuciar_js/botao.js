document.getElementById('file-upload').addEventListener('change', function(event) {
    let arquivo = event.target.files[0];
    if (arquivo) {
        let leitor = new FileReader();
        leitor.onload = function(e) {
            document.getElementById('preview').src = e.target.result;
        }
        leitor.readAsDataURL(arquivo);
    }
});

function adicionarPublicacao() {
    const imgInput = document.getElementById("file-upload").files[0];
    const marca = document.getElementById("marca").value.trim();
    const modelo = document.getElementById("modelo").value.trim();
    const ano = document.getElementById("ano").value.trim();
    const preco = document.getElementById("preco").value.trim();
    const local = document.getElementById("local").value.trim();

    if (!imgInput || !marca || !modelo || !ano || !preco || !local) {
        alert("Preencha todos os campos!");
        return;
    }

    const reader = new FileReader();
    reader.onload = function(e) {
        const lista = document.querySelector(".d-flex.justify-content-between.flex-wrap.gap-3");
        if (!lista) {
            console.error("Elemento da lista não encontrado.");
            return;
        }

        const card = document.createElement("div");
        card.classList.add("bg-white", "rounded-4", "p-2", "text-center", "shadow");
        card.style.width = "200px";
        card.innerHTML = `
            <img src="${e.target.result}" style="width: 180px; height: 100px; object-fit: cover;" />
            <h6 class="mt-2 mb-0">${marca} -- ${modelo}</h6>
            <p class="mb-0">${ano}</p>
            <p class="text-danger fw-bold">R$ ${(preco).toLocaleString("pt-BR")}</p>
            <p class="text-muted mb-0">${local} - SP</p>
        `;
        lista.appendChild(card);
    };
    reader.readAsDataURL(imgInput);

    // Limpar campos
    document.getElementById("file-upload").value = "";
    document.getElementById("preview").src = "img/upd.jpg";
    document.getElementById("marca").value = "";
    document.getElementById("modelo").value = "";
    document.getElementById("ano").value = "";
    document.getElementById("preco").value = "";
}
