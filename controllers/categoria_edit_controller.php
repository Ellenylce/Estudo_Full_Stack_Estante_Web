<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/models/categoria.php';

$id = $_POST['id'];
$nome = $_POST['nome'];

$categoria = new Categoria($id);
$categoria->nome_categoria = $nome;
$categoria->atualizarCategoria();


header('Location: /ellen_karla/Estante-Web/views/gerenciar_categorias.php');
exit();


