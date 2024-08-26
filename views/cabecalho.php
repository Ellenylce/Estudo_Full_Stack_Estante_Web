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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Special+Elite&display=swap');
    </style>
</head>
<body>
    <header>
        <div class="logo-busca">
            <h1 class="fonte_special_elite">Estante Web</h1> <!--Depois adciona a logo também-->
            <form action=""> <!--Formulário/ action: significa quem receberá-->
                <div class="caixa_busca">
                    <div class="icone_pesquisa">
                        <img src="../imgs/busca.svg" alt="" width="20px" height ="20px"> 
                    </div>
                    <div class="alinhar_input">
                        <input  type="search" name="busca" id="busca" >
                    </div>
                    <div class="icone_pesquisa">
                        <img src="../imgs/microfone.svg" alt="" width="20px" height ="20px">
                    </div>
                </div>
            </form>
        </div>
    </header>
    <!--seção de navegação-->
    <nav> 
        <a href="../index.php">Início</a> <!--links das seções-->
        <a href="quem_somos.php">Quem Somos</a>
        <a href="contato.php">Contato</a>
        <a href="favoritos.php" class="alinhar_verticalmente"><img src="../imgs/star.png" alt="" width="20px" height ="20px">Favoritos</a>
        <a href="login.php">Login</a>
    </nav>