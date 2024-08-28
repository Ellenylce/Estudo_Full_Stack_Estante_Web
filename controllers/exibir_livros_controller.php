
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ellen_karla/Estante-Web/models/livros.php';



// Está funcionando (teste)
$livrosModel = new Livros();
$livros = $livrosModel->exibirLivros();
// terei que fazer com que os dados tornem-se um objeto para dar certo
// corrigir isso
// $livros->titulo = $titulo;
// $livros->autor = $autor;
// $livros->paginas = $paginas;
// $livros->sinopse = $sinopse;
// $livros->genero = $genero;
// $livros->capa = $capa;

// teste
// $livros->$titulo;
// $livros->$autor;
// $livros->$paginas;
// $livros->$sinopse;
// $livros->$genero;
// $livros->$capa;

// Iterar sobre os resultados e criar objetos Livros
$livrosObjetos = [];
foreach ($livros as $livro) {
    $livroObjeto = new Livros();
    $livroObjeto->id = $livro['id'];
    $livroObjeto->titulo = $livro['titulo'];
    // ... atribuir os demais valores
    $livrosObjetos[] = $livroObjeto;
}






// echo '<pre>';
// var_dump($livros);
// echo '<pre>';