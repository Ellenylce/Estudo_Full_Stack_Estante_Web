
<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/auth/auth.php';
?>

<!-- Cabeçalho único -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estante web</title>
    <script src="script.js/script.js" defer></script>
    <link rel="stylesheet" href="css/style.css"> <!--Se conceta com CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                <li><a href="/ellen_karla/Estante-Web/index.php">Início</a></li> <!--links das seções-->
                <li><a href="/ellen_karla/Estante-Web/views/quem_somos.php">Quem Somos</a></li>
                <li><a href="/ellen_karla/Estante-Web/views/contato.php">Contato</a></li>
                <!-- <li class = "alinhar_imagem">
                        <a href="views/favoritos.php" class = "text"><img src="imgs/star.png" alt="" width="20px" height ="20px" style="margin-left: 10px;" class = "imagem_alinhar">Favoritos
                    </a>
                </li> -->

                <!-- Se estiver logado  -->
                <?php if(Auth:: estarLogado()) : ?>
                
                <li class = "alinhar_imagem">
                     <a href="/ellen_karla/Estante-Web/views/favoritos.php" class = "text"><img src="imgs/star.png" alt="" width="20px" height ="20px" style="margin-left: 10px;" class = "imagem_alinhar">Favoritos
                    </a>
                </li>   
                <li class = "drop-hover alinhar_imagem"><a href="#" class = "text" > Olá, <?= $_SESSION['nome_user'] ?> <i class="bi bi-caret-down-fill imagem_drop"></i></a>
                <!-- dropdown -->
                    <div class = "drop">
                        <a href="/ellen_karla/Estante-Web/views/perfil_user.php">Meu Perfil</a>
                        <a href="/ellen_karla/Estante-Web/controllers/logout_controller.php">Encerrar Sessão</a>
                    </div>
                <li>
                <?php else : ?>
                    <!-- se não estiver logado -->
                <li class = "drop-hover alinhar_imagem"><a href="#" class = "text" > Olá, usuário <i class="bi bi-caret-down-fill imagem_drop"></i></a>
                <!-- dropdown -->
                    <div class = "drop">
                        <a href="/ellen_karla/Estante-Web/views/login.php">Login</a>
                        <a href="/ellen_karla/Estante-Web/views/cadastro.php">Cadastro</a>
                    </div>
                <li>
                <?php endif;?> 

                <!-- Logout -->
                <!-- <li><a href="/ellen_karla/Estante-Web/controllers/logout_controller.php">Sair</a></li> -->
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

    <!-- Filtrar Livros -->
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
    <!-- Fim -->

    <!-- card com os livros  -->
    <?php
     require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/controllers/exibir_livros_controller.php';
     require_once $_SERVER['DOCUMENT_ROOT'].'/ellen_karla/Estante-Web/models/livros.php';
    ?>
   <!-- O PHP recupera os dados binários da capa do livro do banco de dados e armazena-os na variável $livro->capa.
Os dados binários são codificados em base64.
A string codificada em base64 é inserida no atributo src da tag <img>, junto com o tipo MIME da imagem, criando uma URL de dados que o navegador pode interpretar e exibir a imagem -->
    
    <div class="livros">
        <?php foreach ($livros as $livro): ?>
            <div class="livro">
                <img src="data:image/jpeg;base64,<?php echo base64_encode($livro->capa); ?>" alt="Capa do livro">
                <h2><?php echo $livro->titulo; ?></h2>
                <p><?php echo $livro->autor; ?></p>
                <a href="#">Ver detalhes</a>
            </div>
        <?php endforeach; ?>
    </div>

    
 <!-- Finaliza card -->
 
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



