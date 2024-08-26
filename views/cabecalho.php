<?php
// require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/auth/auth.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estante web</title>
    <link rel="stylesheet" href="../css/style.css"> <!--Se conceta com CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Special+Elite&display=swap');
    </style>
</head>
<body>
    <header>
        <div class="logo-busca">
            <h1 class="fonte_special_elite">Estante Web</h1> <!--Depois adciona a logo também-->
            
        </div>
    </header>
    <!--seção de navegação-->
    <section class = "botton-header">
        <nav> 
            <ul>
                <li><a href="../index.php">Início</a></li> <!--links das seções-->
                <li><a href="quem_somos.php">Quem Somos</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li class = "alinhar_imagem">
                        <a href="favoritos.php" class = "text"><img src="../imgs/star.png" alt="" width="20px" height ="20px" style="margin-left: 10px;" class = "imagem_alinhar">Favoritos
                    </a>
                </li>
                <li class = "drop-hover alinhar_imagem"><a href="#" class = "text" >Olá, usuário <i class="bi bi-caret-down-fill imagem_drop"></i></a>
                    <div class = "drop">
                        <a href="login.php">Login</a>
                        <a href="cadastro.php">Cadastro</a>
                    </div>
                <li>
            </ul>
        </nav>
    </section>