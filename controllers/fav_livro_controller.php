<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/models/favoritos.php';

$id_usuario = $_POST['id_usuario'];
$id_livro = $_POST['id_livro'];

$livro_favorito = new Favorito();

$livro_favorito->id_usuario = $id_usuario;
$livro_favorito->id_livro = $id_livro;

$id_livro_favorito = $livro_favorito->cadastrarLivroFavorito();

header('Location: /ellen_karla/Estante-Web/views/favoritos.php');
exit();