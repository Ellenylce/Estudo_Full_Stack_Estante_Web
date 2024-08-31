<!-- está em teste -->

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/livro.php';

$id_livro = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$livro = livros::selecionarLivro($id_livro);

if (!$livro) {
    echo "Livro não encontrado.";
    exit();
}
?>

<main>
    <div>
        <img src="data:image/jpeg;base64,<?= base64_encode($livro['capa']); ?>" alt="capa do livro">
        <h1><?= htmlspecialchars($livro['titulo']); ?></h1>
        <h1><?= htmlspecialchars($livro['autor']); ?></h1>
        <h1><?= htmlspecialchars($livro['paginas']); ?></h1>
        <h1><?= htmlspecialchars($livro['genero']); ?></h1>
    </div>
    <p><?= htmlspecialchars($livro['sinopse']) ?></p>
</main>