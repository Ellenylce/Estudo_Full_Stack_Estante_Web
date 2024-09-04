<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/models/favoritos.php';



// Recebe o ID do livro a ser excluído
$id = $_POST['id'];

// Instancia o modelo e chama a função de exclusão
$favorito = new Favorito($id);
$favorito->deletarLivroFavorito();
   
    header('Location: /ellen_karla/Estante-Web/views/favoritos.php');
exit();
?>