
<!-- Cabeçalho único -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estante web</title>
    <script src="script.js/script.js" defer></script>
    <link rel="stylesheet" href="css/style.css"> <!--Se conceta com CSS-->
    <!--Importando a letra Special elite-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Special+Elite&display=swap');
    </style>

</head>
<body>
    <header> <!--Cabeça-->
        <div class="logo-busca">
            <h1 class ="fonte_special_elite">Estante Web</h1> <!--Depois adciona a logo também-->
            <form role="search" action="" method="get"> 
                <!--Formulário/ action: significa quem receberá/ role="search: tornar a pesquisa acessível"-->
                <div class="caixa_busca">

                    <button type="submit" class="icone_pesquisa">
                        <img src="imgs/busca.svg" alt="Buscar" width="20" height="20">
                    </button>
                    <input type="search" name="titulo" id="busca" placeholder="Pesquise por título" autocomplete="off">
                    <button type="button" class="icone_pesquisa">
                        <img src="imgs/microfone.svg" alt="Pesquisar por voz" width="20" height="20">
                    </button>
                </div>
                <!--type=especifica que tipo de processamento nesse caso é de busca/ name="busca: identifica o campo de entrada -->
            </form>
        </div>
    </header>
<!------Barra de navegação -->
    <section class = "botton-header">
        <nav> 
            <ul>
                <li><a href="../index.php">Início</a></li> <!--links das seções-->
                <li><a href="views/quem_somos.php">Quem Somos</a></li>
                <li><a href="views/contato.php">Contato</a></li>
                <li class = "alinhar_imagem">
                        <a href="views/favoritos.php" class = "text"><img src="imgs/star.png" alt="" width="20px" height ="20px" style="margin-left: 10px;" class = "imagem_alinhar">Favoritos
                    </a>
                </li>
                <li class = "drop-hover alinhar_imagem"><a href="#" class = "text" ><?= $_SESSION['nome_doador'] ?> <i class="bi bi-caret-down-fill imagem_drop"></i></a>
                    <div class = "drop">
                        <a href="views/login.php">Login</a>
                        <a href="views/cadastro.php">Cadastro</a>
                    </div>
                <li>
            </ul>
        </nav>
    </section>
  
    
    <!-- BODY -->
    <main id="index">
   
    <!-- vai conter o carrossel e os livros -->
    <section id = "body-index">
    <?php
    //  -- Inicio carrossel --
    require_once 'carrossel_livros.php';
    // -- fim carrossel --
    ?>

    <!-- Filtrar Genero de livros -->
    
   
    <div class="filtrar-genero">
        <ul>
            <li><button class="botao-genero" >Educativo</button></li>
            <li><button class="botao-genero" >Religioso</button></li>
            <li><button class="botao-genero" onclick="buscarRomance()">Romance</button></li>
            <li><button class="botao-genero" >Ficção</button></li>
            <li><button class="botao-genero" >Aventura</button></li>
            <li><button class="botao-genero" >Infantis</button></li>
            </ul>
            <div id="resultados"></div>
           
           
    </div>

 
    <?php
    // Consumo de API de livros
    require_once 'consumo_api.php';
    // Fim do codigo API
    ?>  
    </section>
    <!-- FIM do codigo -->
 
       

    </main> 
    


    <footer>
        <div id="copy">
            &copy; Estante Web
        </div>
        <div>
            Todos os direitos reservados
        </div>
        <div class="img-fim">
            <a href="https://www.instagram.com/"><img src="imgs/facebook.svg"alt="" width="30px" height="30px"></a>
            <a href="https://www.facebook.com/"><img src="imgs/instagram.svg"alt="" width="30px" height="30px"></a>
        </div>
    </footer> <!--rodapé-->
    
</body>
</html>



