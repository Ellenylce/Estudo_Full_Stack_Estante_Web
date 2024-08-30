<?php


require_once $_SERVER['DOCUMENT_ROOT'].'/ellen_karla/Estante-Web/models/adms.php';

$nome_adm = $_POST['nome_adm'];
$email_adm = $_POST['email_adm'];
$contato_adm = $_POST['contato_adm'];
$senha_adm = $_POST['senha_adm'];
$senha_adm = password_hash($senha_adm, PASSWORD_DEFAULT);

if(!empty($_FILES['foto_adm']['tmp_name'])){
    $foto_adm = file_get_contents($_FILES['foto_adm']['tmp_name']);
};

// adicionei

// var_dump($_POST);

$adm = new Administradores();
$adm->nome_adm = $nome_adm;
$adm->contato_adm = $contato_adm;
$adm->email_adm = $email_adm;
$adm->senha_adm = $senha_adm;


if(isset($foto_adm)){
    $adm->foto_adm =  $foto_adm;
} else {
    $adm->foto_adm = file_get_contents($_SERVER['DOCUMENT_ROOT'] . 'ellen_karla/Estante-Web/models/adms.php');
}

$adm->cadastrarAdm();
header('Location:/ellen_karla/Estante-Web/views/login_adm.php');
exit();