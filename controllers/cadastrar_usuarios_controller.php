<?php


require_once $_SERVER['DOCUMENT_ROOT'].'/ellen_karla/Estante-Web/models/usuarios.php';

$nome_user = $_POST['nome_user'];
$email_user = $_POST['email_user'];
$senha_user = $_POST['senha_user'];
$senha_user = password_hash($senha_user, PASSWORD_DEFAULT);

if(!empty($_FILES['foto_user']['tmp_name'])){
    $foto_user = file_get_contents($_FILES['foto_user']['tmp_name']);
};

// adicionei
// var_dump($_POST);

$usuario = new Usuarios();
$usuario->nome_user = $nome_user;
$usuario->email_user = $email_user;
$usuario->senha_user = $senha_user;


if(isset($foto_user)){
    $usuario->foto_user =  $foto_user;
} else {
    $usuario->foto_user = file_get_contents($_SERVER['DOCUMENT_ROOT'] . 'ellen_karla/Estante-Web/models/usuarios.php');
}

$usuario->cadastrarUsuario();
header('Location:/ellen_karla/Estante-Web/views/login.php');
exit();