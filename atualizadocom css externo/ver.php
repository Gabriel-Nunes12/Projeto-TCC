<?php
// Pega os dados enviados pela URL (GET)
$imagem = isset($_GET['img']) ? $_GET['img'] : '';
$titulo = isset($_GET['titulo']) ? $_GET['titulo'] : '';
$descricao = isset($_GET['descricao']) ? $_GET['descricao'] : '';
$autor = isset($_GET['autor']) ? $_GET['autor'] : '';
?>

<h2><?php echo htmlspecialchars($titulo); ?></h2>
<p><b>Descrição:</b> <?php echo htmlspecialchars($descricao); ?></p>
<p><b>Autor:</b> <?php echo htmlspecialchars($autor); ?></p>

<?php if ($imagem && file_exists($imagem)): ?>
    <img src="<?php echo htmlspecialchars($imagem); ?>" alt="Imagem" style="max-width:300px;">
<?php else: ?>
    <p>Imagem não encontrada.</p>
<?php endif; ?>

<br>
<a href="anunciar.html">Voltar</a>
