<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/auth/auth.php';

    $email_user = $_POST['email_user'];
    $senha_user = $_POST['senha_user'];

    Auth::login($email_user, $senha_user);
?>