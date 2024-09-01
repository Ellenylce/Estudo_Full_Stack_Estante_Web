



<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/models/livros.php';

$id_livro = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$livro = livros::selecionarLivro($id_livro);

if (!$livro) {
    echo "Livro não encontrado.";
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class = "container_centralizar">
    <!-- botão de voltar para o index -->
<a href="/ellen_karla/Estante-Web/index.php" class="btn-voltar">Voltar para o início</a>

<section class = "livro-detalhes">
        <div class="livro-info">
            <h1><?= htmlspecialchars($livro['titulo']); ?></h1>
            <img class = "img_livro"src="data:image/jpeg;base64,<?= base64_encode($livro['capa']); ?>" alt="capa do livro">
        </div>
        <div class="livro-detalhes-extras">
            <h4>Autor: </h4><p><?= htmlspecialchars($livro['autor']); ?></p>
            <br>
           <h4>Páginas: </h4><p><?= htmlspecialchars($livro['paginas']); ?> páginas</p>
           <br>
           <h4>Genêro: </h4><p><?= htmlspecialchars($livro['genero']); ?></p>
           <br>
            <h4>Sinopse:</h4><p><?= htmlspecialchars($livro['sinopse']) ?></p>
        </div>
</section>
</body>
</html>
