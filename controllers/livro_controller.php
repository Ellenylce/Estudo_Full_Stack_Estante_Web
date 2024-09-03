<!-- Está em teste -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/models/livros.php';



$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$sinopse = $_POST['sinopse'];
$genero = $_POST['genero'];
// $paginas = $_POST['paginas'];

if(!empty($_FILES['capa']['tmp_name'])){
    $capa = file_get_contents($_FILES['capa']['tmp_name']);
};

$livro = new Livros();
$livro->titulo = $titulo;
$livro->autor = $autor;
$livro->genero = $genero;
$livro->sinopse = $sinopse;
// $paginas->paginas = $paginas;
if(isset($capa)){
    $livro->capa= $capa;
} else {
    $livro->capa = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/imgs/livro.jpg');
}


$livro->adicionarLivros();
// $livro->selecionarLivro($id_livro);
$livro->mostrarLivros();
header('Location:/ellen_karla/Estante-Web/views/gerenciar_livros.php');


exit();