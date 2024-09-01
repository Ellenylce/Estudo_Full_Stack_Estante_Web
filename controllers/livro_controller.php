<!-- Está em teste -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/models/livros.php';



$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$sinopse = $_POST['sinopse'];
$categoria = $_POST['categoria'];
$paginas = $_POST['paginas'];

if(!empty($_FILES['capa']['tmp_name'])){
    $capa = file_get_contents($_FILES['capa']['tmp_name']);
};

$livro = new livros();
$livro->titulo = $titulo;
$livro->autor = $autor;
$livro->sinopse = $sinopse;
$paginas->paginas = $paginas;
if(isset($capa)){
    $livro->capa= $capa;
} else {
    $livro->capa = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/imgs/livro.jpg');
}


$livro->cadastrarLivros();
$livro->selecionarLivro($id_livro);
$livro->mostrarLivros();
exit();