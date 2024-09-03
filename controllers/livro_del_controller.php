<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/models/livros.php';


// deletar livro
$id = $_POST['id'];
// var_dump($id_livro);

$livro = new Livros ($id);
$livro->deletarLivro();

header('Location:/ellen_karla/Estante-Web/views/gerenciar_livros.php');
exit();