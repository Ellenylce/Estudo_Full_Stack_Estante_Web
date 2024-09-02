<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/models/categoria.php';
// Adicionar categoria 
$nome_categoria = $_POST['nome_categoria'];

$categoria = new Categoria();
$categoria->nome_categoria = $nome_categoria;

$categoria->adicionarCategoria();
header('Location:/ellen_karla/Estante-Web/views/gerenciar_categorias.php');

exit();

