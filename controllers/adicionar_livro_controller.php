<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/models/livros.php';

// Adicionar livro

// public $titulo;
// public $autor;
// public $sinopse;
// public $genero;
// public $capa;

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$sinopse = $_POST['sinopse'];
$genero = $_POST['genero'];

if(!empty($_FILES['capa']['tmp_name'])){
    $capa = file_get_contents($_FILES['capa']['tmp_name']);
};


$livro = new Livros();
$livro->titulo = $titulo;
$livro->autor = $autor;
$livro->sinopse = $sinopse;
$livro->genero = $genero;

if(isset($capa)){
    $livro->capa =$capa;
} else {
    $livro->capa = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/imgs/livro.jpg');
}

var_dump($capa);

$livro->adicionarLivros();
// header('Location:/ellen_karla/Estante-Web/views/gerenciar_livros.php');
// exit();