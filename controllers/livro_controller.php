<!-- Está em teste -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/models/livro.php';
// session_start();


$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$sinopse = $_POST['sinopse'];
$genero = $_POST['genero'];
$paginas = $_POST['paginas'];

if(!empty($_FILES['capa']['tmp_name'])){
    $capa = file_get_contents($_FILES['capa']['tmp_name']);
};

$livro = new livros();
$livro->titulo = $titulo;
$livro->autor = $autor;
$livro->sinopse = $sinopse;
$livro->genero = $genero;
$livro->paginas = $paginas;
if(isset($capa)){
    $livro->capa= $capa;
} else {

    // corrigir isso depois
    $livro->capa = file_get_contents($_SERVER['DOCUMENT_ROOT'] . 'ellen_karla/Estante-Web/models/livro.php');
}


$livro->cadastrarLivros();
$livro->selecionarLivro($id_livro);
$livro->exibirLivros();
exit();