<?php
$conn = new mysqli('localhost', 'root', '', 'dp');
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Recebe filtros via GET
$marca = $_GET['marca'] ?? '';
$modelo = $_GET['modelo'] ?? '';
$preco = $_GET['preco'] ?? '';

// Montar consulta dinâmica
$where = [];
$params = [];
$tipos = '';

// Filtro por marca
if ($marca !== '') {
    $where[] = "marca = ?";
    $params[] = $marca;
    $tipos .= 's';
}

// Filtro por modelo
if ($modelo !== '') {
    $where[] = "modelo = ?";
    $params[] = $modelo;
    $tipos .= 's';
}

// Filtro por preço
if ($preco !== '') {
    if ($preco === '100000+') {
        $where[] = "preco > 100000";
    } else {
        list($min, $max) = explode('-', $preco);
        $where[] = "preco BETWEEN ? AND ?";
        $params[] = $min;
        $params[] = $max;
        $tipos .= 'dd';
    }
}

$sql = "SELECT * FROM veiculos";
if ($where) {
    $sql .= " WHERE " . implode(" AND ", $where);
}

$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Erro ao preparar consulta: " . $conn->error);
}

if ($params) {
    $stmt->bind_param($tipos, ...$params);
}

$stmt->execute();
$result = $stmt->get_result();

// Mostrar anúncios filtrados com imagem
echo "<div class='row'>";
while ($carro = $result->fetch_assoc()) {
    echo "<div class='col-md-4 mb-4'>";
    echo "<div class='card' style='border-radius:15px; overflow:hidden;'>";
    // Mostra a imagem
echo "<img src='{$carro['imagem']}' class='card-img-top' alt='{$carro['modelo']}' style='height:200px; object-fit:cover;'>";
    echo "<div class='card-body' style='background:#2e2e2e; color:white;'>";
    echo "<h5 class='card-title'>{$carro['marca']} - {$carro['modelo']} ({$carro['ano']})</h5>";
    echo "<p class='card-text'>Combustível: {$carro['combustivel']}</p>";
    echo "<p class='card-text'>Câmbio: {$carro['cambio']}</p>";
    echo "<p class='card-text'>KM: {$carro['km']}</p>";
    echo "<p class='card-text'>Preço: R$ ".number_format($carro['preco'], 2, ',', '.')."</p>";
    echo "</div></div></div>";
}
echo "</div>";

$stmt->close();
$conn->close();
?>
