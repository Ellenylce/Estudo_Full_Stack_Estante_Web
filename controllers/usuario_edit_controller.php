<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/models/usuarios.php';

$id = $_POST['id'];
$nome_user = $_POST['nome_user'];
$email_user = $_POST['email_user'];

if (!empty($_FILES['foto_user']['tmp_name'])) {
    $capa = file_get_contents($_FILES['foto_user']['tmp_name']);
};

$usuario = new Usuarios ($id);
$usuario ->nome_user = $nome_user;
$usuario ->email_user = $email_user;

if (isset($foto_user)) {
    $usuario->foto_user = $foto_user;
} else {
    $usuario->foto_user = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/imgs/usuario.png');
}

$usuario->atualizarUsuario();


header('Location: /ellen_karla/Estante-Web/views/index.php');
exit();