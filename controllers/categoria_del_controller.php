<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/models/categoria.php';


// deletar categoria
$id = $_POST['id'];
// var_dump($id_categoria);

$categoria = new Categoria($id);
$categoria->deletarCategoria();

header('Location:/ellen_karla/Estante-Web/views/gerenciar_categorias.php');
exit();